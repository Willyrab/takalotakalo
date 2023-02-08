<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TraitementInscription extends CI_Controller {

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
		$this->inscrire();
	}
	
	public function inscrire(){
        $this->load->model('utilisateur', 'user');
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
        $options_non_echappees['id'] = 'null';
        if($this->user->create($options_echappees, $options_non_echappees)){
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
