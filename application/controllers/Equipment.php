<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipment extends CI_Controller {
    
	

    public function index()
	{
		// $test = $this->M_Equipment->getData();
		// echo "<pre>";
		// echo print_r($test);
		// echo "</pre>";
		$this->load->model('M_Equipment');	
		$equipment = $this->M_Equipment->getData();
		$DATA = array('data_equipment' => $equipment);
		// $view = array('content'=>'equipment/table');
		$this-> load->view('template/sidebar');
		$this->load->view('equipment/table',  $DATA);
		$this-> load->view('template/js');
	}

}