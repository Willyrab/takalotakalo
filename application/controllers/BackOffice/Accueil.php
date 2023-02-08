<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
		$this->load->model('acceptation');
		$this->load->model('utilisateur');
		$this->load->model('categorie');
	}
	
	public function index()
	{
		$data['nombreUtilisateurs'] = $this->utilisateur->count();
		$data['nombreEchanges'] = $this->acceptation->count();
		$data['categories'] = $this->categorie->getAll();
		$data['content'] = 'Back-Office/pages/listProduit';
		$this->load->view('Back-Office/include/template.php',$data);
	}	
}
