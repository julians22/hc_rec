<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
        $data = [
            'title' => 'Halaman Login'
        ];
        $this->form_validation->set_rules(
            'email',
            'Email',
            'trim|required|valid_email',
            [
                'required' => 'Bidang %s wajib diisi.',
                'valid_email' => 'Bidang %s harus berisi alamat email yang valid.'
            ]
        );
        $this->form_validation->set_rules(
            'password', 
            'Password', 
            'trim|required|min_length[5]|max_length[12]',
            [
                'required' => 'Bidang %s wajib diisi.',
                'min_length' => '%s minimal 5 karakter.',
                'max_length' => '%s tidak boleh lebih 15 karakter'
            ]
        );
        
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth/header', $data);
            $this->load->view('auth/index', $data);
            $this->load->view('templates/auth/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();
        if ($user) {
            //jika user aktif
            if ($user['active'] == 1) {
                //jika password sesuai
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email']
                    ];
                    $this->session->set_userdata( $data );
                    redirect('welcome','refresh');
                }else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Kata sandi tidak cocok</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect('auth');
                }
            }else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Email belum diverifikasi, segera verifikasi email anda, melalui email yang sudah kami kirimkan!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('auth');
            }
        }else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Email anda tidak terdaftar</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
    }

    public function reg()
    {
        $data = [
            'title' => 'Halaman Registrasi'
        ];
        $this->form_validation->set_rules('nama', 'Nama lengkap', 'trim|required',
            [
                'required' => 'Bidang %s wajib diisi'
            ]
        );
        
        $this->form_validation->set_rules('email',
            'Email', 
            'trim|required|valid_email|is_unique[tbl_user.email]',
            [
                'required' => 'Bidang %s wajib diisi.',
                'valid_email' => 'Bidang %s harus berisi alamat email yang valid.',
                'is_unique' => '%s sudah terdaftar'
            ]
        );
        $this->form_validation->set_rules('password1', 
            'Password', 
            'trim|required|min_length[5]',
            [
                'required' => 'Bidang %s wajib diisi.',
                'min_length' => '%s minimal 5 karakter.'
            ]
        );
        $this->form_validation->set_rules('password2', 
            'Password', 
            'trim|required|matches[password1]',
            [
                'required' => 'Bidang %s wajib diisi',
                'matches' => '%s tidak cocok'
            ]
        );
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth/header', $data);
            $this->load->view('auth/registrasi', $data);
            $this->load->view('templates/auth/footer');
        } else {
            $email = $this->input->post('email');
            $data = [
                'email' => htmlspecialchars($email),
                'nama_lengkap' => htmlspecialchars($this->input->post('nama')),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'date_created' => time()
            ];
            $token = base64_encode(random_bytes(8));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];
            $this->db->insert('tbl_user', $data);
            $this->db->insert('tbl_token', $user_token);
            $this->_sendEmail($token, 'verify');
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">Periksa email anda<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
    }

    private function _sendEmail($token, $type)
    {
        $config = [
			'mailtype'		=> 'html',
			'charset'       => 'utf-8',
			'protocol' 		=> 'smtp',
			'smtp_host'		=> 'ssl://smtp.googlemail.com',
			'smtp_user'		=> 'deanabne2212@bsi.ac.id',
            'smtp_pass'		=> 'dajulian22',
			'smtp_timeout' 	=> '8',
            'smtp_port'		=> 465,
            'newline'		=> "\r\n"
		];

        $this->load->library('email');
        $this->email->initialize($config);
        
        $this->email->from('deanabne2212@bsi.ac.id', 'Dean Abner Julian');
        $this->email->to($this->input->post('email'));
        if ($type == 'verify') {
            $this->email->subject('Verifikasi Email');
            $this->email->message('Click this link to verify your account : <a href="'.base_url(). 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) .'">Activate</a>');
        }elseif ($type == 'forgot') {
            $this->email->subject('Forgot Password');
            $this->email->message('Click this link to reset your password : <a href="'.base_url(). 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) .'">Activate</a>');
        }
        $this->email->send();
        echo $this->email->print_debugger();
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();
        if ($user) {
            $user_token = $this->db->get_where('tbl_token', ['token' => $token])->row_array();
            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('tbl_user');
                    $this->db->delete('tbl_token', ['email' => $email]);
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>' .$email. ' </strong>Sudah diverifikasi. Silahkan login dengan menggunakan email dan password yang anda daftarkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect('auth','refresh');
                }else {
                    $this->db->delete('tbl_user', ['email' => $email]);
                    $this->db->delete('tbl_token', ['email' => $email]);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Gagal verifikasi email! Silahkan registrasi ulang.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect('auth','refresh');
                }
            }else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Gagal verifikasi! Pastikan anda klik link di email yang kami kirim.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('auth','refresh');
            }
        }else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Gagal verifikasi! Email anda belum terdaftar, Registrasi ulang!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth','refresh');
        }
    }


    //logout
    public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Your Session Has been Ended </div>');
        redirect('auth');
    }

}

/* End of file Auth.php */