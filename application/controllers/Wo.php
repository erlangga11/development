<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wo extends CI_Controller {
    
    public function index()
	{
		$data = array('content'=>'wo/table');
		$this->load->view('template/sidebar',$data);
	}

}