<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {
    
    public function index()
	{
		$this->load->view('template/sidebar');
		$this->load->view('tablewo');
		$this->load->view('template/js');
	}

}