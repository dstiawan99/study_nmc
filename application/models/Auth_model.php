<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function cek($in)
    {
        $username = $this->db->escape($in['username']);
        $password = $this->db->escape($in['password']);

        $q_login = $this->db->query(" SELECT * FROM tbl_user WHERE username=$username AND password=$password ");

        if ($q_login->num_rows() > 0) {
            foreach ($q_login->result() as $data) {
                $session['id_user'] = $data->id_user;
                $session['username'] = $data->username;
                $session['nama_user'] = $data->nama_user;
                $session['login'] = TRUE;

                $this->session->set_userdata($session);
            }
        }

        if ($session['login'] == TRUE) {
            redirect('welcome');
        } else {
            redirect('/');
        }
    }
}
