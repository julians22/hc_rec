<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kandidat extends CI_Model {

    public function getOneUser($email)
    {
        return $this->db->get_where('tbl_user', ['email' => $email])->row_array();
    }

}

/* End of file M_Kandidat.php */
