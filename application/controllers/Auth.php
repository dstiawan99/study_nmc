<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('login') == TRUE) {
            redirect('welcome');
        } else {
            $this->load->view('auth/login');
        }
    }
    public function login()
    {
        if ($this->input->method(TRUE) == 'POST' && !empty($_POST)) {
            $in['username'] = $this->input->post('username');
            $in['password'] = $this->input->post('password');
            $this->Auth_model->cek($in);
        }
    }

    public function logout()
    {
        session_destroy();
        redirect(base_url());
    }
}
