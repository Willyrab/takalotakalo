<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Echange extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('proposition');
	}

	public function index()
	{
		$data = $this->proposition->getAllPropositionsValides($this->session->userdata('compte')->id);
        $data['content'] = 'Front-Office/pages/echanges';
        $this->load->view('Front-Office/include/template',$data);
	}

	public function historique(){
		$this->load->model('acceptation');
		$data = $this->acceptation->historiqueEchange();
		$data['content'] = 'Front-Office/pages/historique';
		$this->load->view('Front-Office/include/template',$data);
	}

	public function accepterEchange($idProposition = '', $id_userechange = '', $id_objetechange = '', $id_userdemande = '', $id_objetdemande = ''){
		$this->load->model('acceptation');
		$this->load->model('objet');
		$options_echap = array();
		$options_echap['id_utilisateur'] = $id_userdemande;
		$where = array('id' => $id_objetechange);
		$this->objet->update($where, $options_echap);
		$options_echap['id_utilisateur'] = $id_userechange;
		$where['id'] = $id_objetdemande;
		$this->objet->update($where, $options_echap);
		$options_echappees = array();
		$options_echappees['id_proposition'] = $idProposition;
		$options_non_echappees = array();
		$options_non_echappees['dateAcceptation'] = 'now()';
		$this->acceptation->create($options_echappees, $options_non_echappees);
		$this->proposition->refusOtherPropositions($id_objetdemande);
		redirect('frontoffice/myobjects');
	}

	public function refuserEchange($idProposition = ''){
		$this->load->model('refus');
		$options_echappees = array();
		$options_echappees['id_proposition'] = $idProposition;
		$options_non_echappees = array();
		$options_non_echappees['dateRefus'] = 'now()';
		$this->refus->create($options_echappees, $options_non_echappees);
		redirect('frontoffice/myobjects');
	}

	public function envoyerEchange(){
		$this->load->model('proposition');
		$post = $this->input->post();
		$options_echappees = array();
        $options_echappees['id_userechange'] = $this->session->userdata('compte')->id;
        $options_echappees['id_objetechange'] = $post['id_objetechange'];
        $options_echappees['id_objetdemande'] = $post['id_objetdemande'];
        $options_echappees['id_userdemande'] = $post['id_userdemande'];
        $options_non_echappees = array();
        $options_non_echappees['id'] = 'default';
		$options_non_echappees['date_proposition'] = 'now()';
        if($this->proposition->create($options_echappees, $options_non_echappees)){
            redirect('frontoffice/myobjects');
        } else {
            redirect('frontoffice/accueil');
        }          
	}
}
