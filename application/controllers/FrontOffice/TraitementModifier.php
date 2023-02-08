<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TraitementModifier extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->modifierObjet();
	}

	public function modifierObjet(){
        $this->load->model('objet');
        $this->do_upload();
        redirect('frontoffice/myobjects');
    }

    public function addPhoto($photo){
		$this->load->model('photo');
        $post = $this->input->post();
        $options_echappees = array();
        $options_echappees['chemin'] = './uploads/' + $photo;
        $options_non_echappees = array();
        $options_non_echappees['id'] = 'null';
		if($this->photo->create($options_echappees, $options_non_echappees)){
            redirect('frontoffice/myobjects');
        } else {
            redirect('inscription');
        }        
    }

    public function do_upload(){
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);
        $this->load->model('photo');
        $fieldName = 'userfile';
        $ifError = false;
        $data = array();
        if ($_FILES && isset($_FILES[$fieldName]) && is_array($_FILES[$fieldName]['name'])) {
            print_r($_FILES[$fieldName]['name']);
            foreach ($_FILES[$fieldName]['name'] as $key => $name) {
                if ($name) {
                    $_FILES['file_temp']['name'] = $_FILES[$fieldName]['name'][$key];
                    $_FILES['file_temp']['type'] = $_FILES[$fieldName]['type'][$key];
                    $_FILES['file_temp']['tmp_name'] = $_FILES[$fieldName]['tmp_name'][$key];
                    $_FILES['file_temp']['error'] = $_FILES[$fieldName]['error'][$key];
                    $_FILES['file_temp']['size'] = $_FILES[$fieldName]['size'][$key];
                    if (!$this->upload->do_upload('file_temp'))
                    {
                        $ifError = true;
                        $data['error'] = $this->upload->display_errors();
                        print_r($data['error']);
                    } else {
                        $fichier = $this->upload->data();
                        print_r($fichier);
                    }
                }
            }
        }
        if ($ifError == true) {
            $data['content'] = 'Front-Office/pages/modifier';
            $this->load->view('Front-Office/include/template', $data);
        } 
    }
	
	public function modifier(){
        $this->load->model('objet');
        $post = $this->input->post();
        $options_echappees = array();
        $options_echappees['nom'] = $post['nom'];
        $options_echappees['prenom'] = $post['prenom'];
        $options_echappees['mot_de_passe'] = $post['password'];
        $options_echappees['email'] = $post['email'];
        $options_echappees['date_Naissance'] = $post['dtn'];
        $options_echappees['adresse'] = $post['localisation'];
        $options_echappees['tel'] = $post['telephone'];
        $options_non_echappees = array();
        $options_non_echappees['id'] = 'default';
        if($this->objet->update($options_echappees, $options_non_echappees)){
            $where = array();
		    $where['email'] = $options_echappees['email'];
		    $where['mot_de_passe'] =  $options_echappees['mot_de_passe'];
		    $compte = $this->user->getAll('*',$where);
            $this->session->set_userdata('compte',$compte[0]);
            redirect('frontoffice/accueil');
        } else {
            redirect('inscription');
        }          
    }
}
