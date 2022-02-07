<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Equipment extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Equipment');
    }
    
    
    public function index()
    {
		$eq = $this->M_Equipment->getData();
        // $data['content'] = 'dashboard/index';
        $data = array(
            'equipment' => $eq,
            'content' => 'equipment/table',
            'section' => 'equipment/generatepdf'
        );
        $this->load->view('layouts/base', $data);
    }
    public function generatePDF()
    {
        $pdf = new \TCPDF();
        $pdf->AddPage('L', 'mm', 'A4');
        $pdf->SetFont('', 'B', 14);
        $pdf->Cell(280, 10, "DAFTAR EQUIPMENT", 0, 1, 'C');
        $pdf->SetAutoPageBreak(true, 0);
        // Add Header
        $pdf->Ln(10);
        $pdf->SetFont('', 'B', 12);
        $pdf->Cell(20, 8, "No", 1, 0, 'C');
        $pdf->Cell(50, 8, "Nomor Equipment", 1, 0, 'C');
        $pdf->Cell(110, 8, "Deskripsi", 1, 0, 'C');
        $pdf->Cell(30, 8, "Nilai WO", 1, 0, 'C');
        $pdf->Cell(30, 8, "Nilai PDM", 1, 0, 'C');
        $pdf->Cell(30, 8, "Nilai Total", 1, 1, 'C');
        $pdf->SetFont('', '', 12);
        $eq = $this->db->get('equipment')->result();
        $no=0;
        foreach ($eq as $data){
            $no++;
            $pdf->Cell(20,8,$no,1,0, 'C');
            $pdf->Cell(50,8,$data->equipno,1,0);
            $pdf->Cell(110,8,$data->diskripsi,1,0);
            $pdf->Cell(30,8,$data->nilai_wo,1,0);
            $pdf->Cell(30,8,$data->nilai_pdm,1,0);
            $pdf->Cell(30,8,$data->nilai,1,1);
        }
        $pdf->SetFont('', 'B', 10);
        // $pdf->Cell(277, 10, "Laporan Pdf Menggunakan Tcpdf, Instalasi Tcpdf Via Composer", 0, 1, 'L');
        ob_end_clean();
        $pdf->Output('Laporan-Equipment.pdf'); 
    }
}
