<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelajar extends CI_Controller
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
	public function tambah_data()
	{
		// $data['pelajar'] = $this->Model_pelajar->get_pelajar();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('tambah_data');
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data = array(
			'nis' => $this->input->post('nis'),
			'nama_siswa' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'jurusan' => $this->input->post('jurusan'),
			'email' => $this->input->post('email')
		);

		if ($this->db->insert('tbl_pelajar', $data)) {
			$this->session->set_flashdata("success", "Berhasil Menambahkan Data");
			echo "<script>window.location.href='" . base_url() . "pelajar" . "';</script>";
		} else {
			$this->session->set_flashdata("error", "Gagal Menambahkan Data");
			echo "<script>window.location.href='" . base_url() . "pelajar" . "';</script>";
		}
	}
}
