<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_auth extends CI_Model
{

    public function get($username)
    {
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username_admin '
        $result = $this->db->get('tbl_admin')->row(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }
}
