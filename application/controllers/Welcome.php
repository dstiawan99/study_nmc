<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if ($this->session->userdata('login') == TRUE) {
			$data['user'] = $this->db->get_where('tbl_user', array('id_user' => $this->session->userdata('id_user')), 1)->row()->photo;
			$this->load->view('templates/header');
			// $this->load->view('welcome_message');
			$this->load->view('templates/navbar', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('dashboard');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('auth/login');
		}
	}
}
