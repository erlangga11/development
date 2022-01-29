<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wo extends CI_Controller {
    
    public function index()
	{
		$this->load->model('M_Wo');	
		$wo = $this->M_Wo->getData();
		$DATA = array('data_wo' => $wo);
		// $view = array('content'=>'equipment/table');
		$this-> load->view('template/sidebar');
		$this->load->view('wo/table',  $DATA);
		$this-> load->view('template/js');
	}

}