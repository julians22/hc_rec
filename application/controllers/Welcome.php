<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kandidat', 'kand');
	}
	

	public function index()
	{
		$email = $this->session->userdata('email');

		$data = [
			'title' => 'E-Recruitment',
			'user' => $this->kand->getOneUser($email)
		];
		$this->load->view('templates/frontend/header', $data);
		$this->load->view('templates/frontend/topbar');
		$this->load->view('frontend/index', $data);
		$this->load->view('templates/frontend/footer');
	}
}
