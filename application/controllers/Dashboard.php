<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function index()
	{
		$this->load->model('M_Dashboard');
		// $test = $this->M_Dashboard->getData();
		$data['equipment'] = $this->M_Dashboard->getData();
		echo "<pre>"; var_dump($data['equipment']); die;
		$this-> load->view('template/sidebar');
		$this->load->view('dashboard/dashboard', $data);
		$this-> load->view('template/js');
		
	}

}