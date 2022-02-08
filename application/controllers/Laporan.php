<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pelajar_model');
        $this->load->library('pdf');
    }
    public function index()
    {
        $pdf = new FPDF('l', 'mm', 'A5');

        $pdf->AddPage();

        // Header Tittle
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(190, 7, 'LAPORAN DATA SISWA SIKAT', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 13);
        $pdf->Cell(190, 7, 'Tahun 2202', 0, 1, 'C');
        $pdf->Cell(190, 7, '', 0, 1, 'C');
        $pdf->Cell(190, 7, '', 0, 1, 'C');

        // Header Table
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(10, 7, 'NO', 1, 0, 'C');
        $pdf->Cell(30, 7, 'NIS', 1, 0, 'C');
        $pdf->Cell(45, 7, 'NAMA SISWA', 1, 0, 'C');
        $pdf->Cell(25, 7, 'KELAS', 1, 0, 'C');
        $pdf->Cell(40, 7, 'JURUSAN', 1, 0, 'C');
        $pdf->Cell(45, 7, 'EMAIL', 1, 1, 'C');

        // Data in table
        $no = 1;
        $pdf->SetFont('Arial', '', 11);
        $pelajar = $this->Pelajar_model->get_pelajar()->result();

        foreach ($pelajar as $row) {
            $pdf->Cell(10, 7, $no++, 1, 0, 'C');
            $pdf->Cell(30, 7, $row->nis, 1, 0, 'C');
            $pdf->Cell(45, 7, $row->nama_siswa, 1, 0, 'C');
            $pdf->Cell(25, 7, $row->kelas, 1, 0, 'C');
            $pdf->Cell(40, 7, $row->jurusan, 1, 0, 'C');
            $pdf->Cell(45, 7, $row->email, 1, 1, 'C');
        }

        $pdf->Output();
    }

    public function cetak()
    {
    }
}
