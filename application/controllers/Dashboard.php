<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function index()
	{
		$this->load->view('template/sidebar');
		$this->load->view('dashboard/dashboard');
		$this->load->view('template/js');
	}

}