<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function index()
	{
		$data = array('content'=>'dashboard/dashboard');
		$this->load->view('template/sidebar',$data);
		
	}

}