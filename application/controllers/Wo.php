<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wo extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Wo');
    }
    
    
    public function index()
    {
		$wo = $this->M_Wo->getData();
        // $data['content'] = 'dashboard/index';
        $data = array(
            'wo' => $wo,
            'content' => 'wo/table',
			'section' => 'wo/generatepdf'
        );
        // $data['token'] = $this->security->get_csrf_hash();
        // echo "<pre>"; print_r($data); die;
        
        // echo "<pre>"; print_r($data['equipment']); die;
        $this->load->view('layouts/base', $data);
    }

	public function generatePDF()
    {
        $pdf = new \TCPDF();
        $pdf->AddPage('L', 'mm', 'A3');
        $pdf->SetFont('', 'B', 10);
        $pdf->Cell(280, 10, "DAFTAR WO", 0, 1, 'C');
        $pdf->SetAutoPageBreak(true, 0);
        // Add Header
        $pdf->Ln(10);
        $pdf->SetFont('', 'B', 10);
        // $pdf->Cell(20, 8, "No", 1, 0, 'C');
        $pdf->Cell(20, 8, "Asset Num", 1, 0, 'C');
        $pdf->Cell(20, 8, "Wo Num", 1, 0, 'C');
        $pdf->Cell(40, 8, "Desc", 1, 0, 'C');
        $pdf->Cell(30, 8, "WTNUM", 1, 0, 'C');
        $pdf->Cell(50, 8, "Task Desc", 1, 0, 'C');
		$pdf->Cell(30, 8, "Priority", 1, 0, 'C');
		$pdf->Cell(18, 8, "Status", 1, 0, 'C');
		$pdf->Cell(40, 8, "Report Date", 1, 0, 'C');
		$pdf->Cell(30, 8, "Worktype", 1, 1, 'C');
        $pdf->SetFont('', '', 10);
        $eq = $this->db->get('wo')->result();
        $no=0;
        foreach ($eq as $data){
            $no++;
            // $pdf->Cell(20,8,$no,1,0, 'C');
            $pdf->Cell(20,8,$data->assetnum,1,0);
            $pdf->Cell(20,8,$data->wonum,1,0);
            $pdf->Cell(40,8,$data->wodesc,1,0);
            $pdf->Cell(30,8,$data->wtnum,1,0);
            $pdf->Cell(50,8,$data->taskdesc,1,0);
			$pdf->Cell(30,8,$data->priority,1,0);
			$pdf->Cell(18,8,$data->wostatus,1,0);
			$pdf->Cell(40,8,$data->reportdate,1,0);
			$pdf->Cell(30,8,$data->worktype,1,1);
        }
        $pdf->SetFont('', 'B', 10);
        // $pdf->Cell(277, 10, "Laporan Pdf Menggunakan Tcpdf, Instalasi Tcpdf Via Composer", 0, 1, 'L');
        ob_end_clean();
        $pdf->Output('Laporan-Equipment9.pdf'); 
    }

}