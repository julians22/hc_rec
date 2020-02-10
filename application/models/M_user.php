<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function userByEmail($email)
    {
        return $this->db->get_where('tbl_user', ['email' => $email])->row();
    }

}

/* End of file M_user.php */
