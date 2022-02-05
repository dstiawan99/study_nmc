<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelajar_model extends CI_Model
{
    public function get_pelajar()
    {
        // $q = $this->db->query(" SELECT * FROM tbl_pelajar ");
        $q = $this->db->get("tbl_pelajar ");
        return $q;
    }
}
