<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipment extends CI_Controller {
    
	

    public function index()
	{
		//load libary pagination
        $this->load->library('pagination');
 
        //load the department_model
        $this->load->model('M_Equipment');

		
		
		// $view = array('content'=>'equipment/table');
		
		$config['base_url'] = 'http://localhost/ci_pku_pjb/Equipment/index'; //site url
        $config['total_rows'] = 3715; //total row
        $config['per_page'] = 50;  //show record per halaman
		$config['num_links'] = 5;

		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center"> ';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">'; 
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">'; 
		$config['last_tag_close'] = '</li>';
		
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">'; 
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">'; 
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">'; 
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">'; 
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
		$data['start'] = $this->uri->segment(3);
		// $data['M_Equipment'] = $this->M_Equipment->getRow($config['per_page'],$data['start']);
		
		$data['equipment'] = $this->M_Equipment->getData($config['per_page'],$data['start']);
		// $DATA = array('data_equipment' =>$data['equipment']);
 
	


		$this-> load->view('template/sidebar');
		$this->load->view('equipment/table', $data);	
		$this-> load->view('template/js');
	}

}