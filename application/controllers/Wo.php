<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wo extends CI_Controller {
    
    public function index()
	{
		$this->load->view('template/sidebar');
		$this->load->view('wo/table');
		$this->load->view('template/js');
	}

}