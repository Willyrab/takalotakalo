<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GestionObjets extends MY_Controller {

	public function index()
	{
        $this->formModif(1);
	}

    public function formModif($idObjet = ''){
		$this->load->model('objet');
		$where['id'] = $idObjet;
		$objet = $this->objet->getAll('*',$where);
        $data['content'] = 'Front-Office/pages/modifier';
		//$data['objet'] = $objet[0];
		$this->load->view('Front-Office/include/template',$data);
    }
}
