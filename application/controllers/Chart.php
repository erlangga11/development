<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {
    
    public function index()
	{
		$data = array('content'=>'chart/chart');
		$this->load->view('template/sidebar',$data);
	}

}