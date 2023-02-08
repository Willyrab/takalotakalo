<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('objet');
	}
	
	public function index()
	{
		$liste = $this->objet->getAllObjectsWithUser(0, 9);
		$data['content'] = 'Front-Office/pages/listeObjets';
		$data['liste'] = $liste;
		$data['next'] = 9;
		$data['previous'] = 0;
		$this->load->view('Front-Office/include/template.php',$data);
	}	
	
	public function affiche($debut){
		$liste = $this->objet->getAllObjectsWithUser($debut, 9);
		$data['content'] = 'Front-Office/pages/listeObjets';
		$data['liste'] = $liste;
		$data['next'] = ((int) $debut) + 9;
		$data['previous'] = ((int) $debut) - 9;
		$this->load->view('Front-Office/include/template.php',$data);
	}
}
