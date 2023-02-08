<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyObjects extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('objet');
	}

	public function index()
	{
		$mesObjets = $this->objet->getMyObjets($this->session->userdata('compte')->id);
        $data['content'] = 'Front-Office/pages/mesObjets';
		$data['mesObjets'] = $mesObjets;
        $this->load->view('Front-Office/include/template',$data);
	}

	public function choixProduitEchanger(){
		$post = $this->input->post();
		$data['mesObjets'] = $this->objet->getMyObjets($this->session->userdata('compte')->id);
		$data['content'] = 'Front-Office/pages/mesObjets';
		$data['post'] = $post;
		$this->load->view('Front-Office/include/template',$data);
	}
}
