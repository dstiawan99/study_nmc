<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelajar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pelajar_model');
	}
	public function index()
	{
		if ($this->session->userdata('login') == TRUE) {
			$data['pelajar'] = $this->Pelajar_model->get_pelajar();
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('table', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('auth/login');
		}
	}
	public function tambah_data()
	{
		if ($this->session->userdata('login') == TRUE) {
			// $data['pelajar'] = $this->Pelajar_model->get_pelajar();
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('tambah_data');
			$this->load->view('templates/footer');
		} else {
			$this->load->view('auth/login');
		}
	}
	public function edit_data($nis = '')
	{
		if ($this->session->userdata('login') == TRUE) {
			$data['pelajar'] = $this->db->get_where('tbl_pelajar', array('nis' => $nis), 1)->row();
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('edit_data', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('auth/login');
		}
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

	public function update()
	{
		$data = array(
			'nama_siswa' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'jurusan' => $this->input->post('jurusan'),
			'email' => $this->input->post('email')
		);

		$this->db->where('nis', $this->input->post('nis'));
		if ($this->db->update('tbl_pelajar', $data)) {
			$this->session->set_flashdata("success", "Berhasil Merubah Data");
			echo "<script>window.location.href='" . base_url() . "pelajar" . "';</script>";
		} else {
			$this->session->set_flashdata("error", "Gagal Merubah Data");
			echo "<script>window.location.href='" . base_url() . "pelajar" . "';</script>";
		}
	}

	public function delete($nis)
	{
		if ($this->db->delete('tbl_pelajar', array('nis' => $nis))) {
			$this->session->set_flashdata("success", "Berhasil Menghapus Data");
			echo "<script>window.location.href='" . base_url() . "pelajar" . "';</script>";
		}
	}
}
