<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {
    
    public function index()
	{
		$this->load->view('chart/chart');
	}

}