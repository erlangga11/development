<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipment extends CI_Controller {
    
    public function index()
	{
		$this->load->view('template/sidebar');
		$this->load->view('equipment/table');
		$this->load->view('template/js');
	}

}