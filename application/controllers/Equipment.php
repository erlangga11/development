<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipment extends CI_Controller {
    
    public function index()
	{
		$data = array('content'=>'equipment/table');
		$this->load->view('template/sidebar',$data);
	}

}