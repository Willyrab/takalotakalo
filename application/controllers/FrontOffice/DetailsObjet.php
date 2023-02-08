<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailsObjet extends MY_Controller {

	public function index()
	{
		$this->detailler(1);
	}

    public function detailler($idObjet = ''){
		$this->load->model('objet');
		$objet = $this->objet->getDetailsObjet($idObjet);
        $data['content'] = 'Front-Office/pages/detailsObjet';
		$data['objet'] = $objet;
		$this->load->view('Front-Office/include/template',$data);
    }
}
