<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {
    
    public function index()
	{
		$this-> load->view('template/sidebar');
		$this->load->view('chart/chart');
		$this-> load->view('template/js');
	}

}