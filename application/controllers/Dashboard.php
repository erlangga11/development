<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	
	public function __construct()
	{
	 parent::__construct();
	 $this->load->model('Dynamic_chart_model');
	}
   
	function index()
	{
		$data['site_list'] = $this->Dynamic_chart_model->fetch_year();
		$this->load->view('template/sidebar');
		$this->load->view('dashboard/dashboard', $data);
		$this->load->view('template/js');
	 
	}
	function fetch_data()
	{
	 if($this->input->post('siteid'))
	 {
	  $equipment = $this->Dynamic_chart_model->fetch_chart_data($this->input->post('siteid'));
	  
	  foreach($equipment->result_array() as $row)
	  {
	   $output[] = array(
		'diskripsi'  => $row["diskripsi"],
		'nilai_wo' => floatval($row["nilai_wo"])
	   );
	  }
	  echo json_encode($output);
	 }
	}
    // public function index()
	// {
		// $this->load->model('M_Dashboard');
		// // $test = $this->M_Dashboard->getData();
		// $data['equipment'] = $this->M_Dashboard->getData();
		// // echo "<pre>"; var_dump($data['equipment']); die;
		// $this-> load->view('template/sidebar');
		// $this->load->view('dashboard/dashboard', $data);
		// $this-> load->view('template/js');
		

		
// 	}

	

 }