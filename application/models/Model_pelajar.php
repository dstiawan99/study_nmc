<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pelajar extends CI_Model
{
    public function get_pelajar()
    {
        $q = $this->db->query(" SELECT * FROM tbl_pelajar ");
        return $q;
    }
}
