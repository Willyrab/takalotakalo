<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormVerif extends CI_Controller {

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
		$this->connexion();
	}
	
	public function verifier($post){
		$this->load->model('utilisateur','user');
		$where = array('email' => $post['email'], 'mot_de_passe' => $post['password']);
	    return $this->user->getAll('*',$where);
	}
    
    public function connexion(){
		$post = $this->input->post();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','trim|required|min_length[5]|max_length[52]|encode_php_tags');
		$this->form_validation->set_rules('password','Mot de passe','trim|required|min_length[1]|max_length[52]|encode_php_tags');
		if($this->form_validation->run()){
			$compte = $this->verifier($post);
            if(count($compte) == 0){
                redirect('frontoffice/formlogin/error');
            }
            $this->session->set_userdata('compte',$compte[0]);
			redirect('frontoffice/accueil');
		} else {
			$this->load->view('Front-Office/pages/login');
		}
	}
}
