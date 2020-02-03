<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'E-Recruitment',
			'email' => $this->session->userdata('email')
		];
		$this->load->view('templates/frontend/header', $data);
		$this->load->view('templates/frontend/topbar');
		$this->load->view('frontend/index', $data);
		$this->load->view('templates/frontend/footer');
	}
}
