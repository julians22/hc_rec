<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Kandidat', 'kand');
        $this->load->model('M_user');
    }
    

    public function index()
    {
        $email = $this->session->userdata('email');
		
		$data = [
			'title' => 'Profil',
			'user' => $this->kand->getOneUser($email)
		];
		$this->load->view('templates/frontend/header', $data);
		$this->load->view('templates/frontend/topbar');
		$this->load->view('frontend/profil', $data);
		$this->load->view('templates/frontend/footer');
    }

    public function formKandidat()
    {
        $email = $this->session->userdata('email');

        $data = [
            'title' => 'Form Kandidat',
            'user' => $this->kand->getOneUser($email)
        ];
        $this->load->view('templates/frontend/header', $data);
		$this->load->view('templates/frontend/topbar');
		$this->load->view('frontend/form_kandidat', $data);
		$this->load->view('templates/frontend/footer');
    }

    public function userByEmail()
    {
        $email = $this->input->get('email');
        echo json_encode($this->M_user->userByEmail($email));
    }

    public function editprofil()
    {
        $data = [
            'nama_lengkap' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'phone' => $this->input->post('no_hp'),
            'alamat' => $this->input->post('alamat'),
            'tempat_lahir' => $this->input->post('tmpt_lahir'),
            'tanggal_lahir' => $this->input->post('tgl_lahir'),
            'jenis_kelamin' => $this->input->post('jk')
        ];
        $this->db->where('email', $this->input->post('email'));
        $this->db->update('tbl_user', $data);
        $this->session->set_flashdata('flash', 'Ubah Profil');
        redirect('user','refresh');
    }

}

/* End of file User.php */
