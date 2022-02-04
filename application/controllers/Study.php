<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Study extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_pelajar');
	}
	public function index()
	{
		$data['pelajar'] = $this->Model_pelajar->get_pelajar();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('table', $data);
		$this->load->view('templates/footer');
	}
}
