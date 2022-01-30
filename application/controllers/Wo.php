<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wo extends CI_Controller {
    
    public function index()
	{
		//load libary pagination
		$this->load->library('pagination');
		$this->load->library('session');

		//ambil data keyword
		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}
		//load the department_model
		$this->load->model('M_Wo');
		// $view = array('content'=>'equipment/table');
		$dataSearch = strtoupper($data['keyword']);
		$var = $this->db->query("SELECT * FROM wo WHERE wodesc LIKE ?", '%' . $dataSearch . '%');

		$config['base_url'] = base_url('Wo/index'); //site url
		$config['total_rows'] = $var->num_rows(); //total row
		$config['per_page'] = 30;  //show record per halaman
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

		$data['start'] = $this->uri->segment(5);
		$data['wo'] = $this->M_Wo->getData($config['per_page'], $data['start'], $dataSearch);

		$this-> load->view('template/sidebar');
		$this->load->view('wo/table',  $data);
		$this-> load->view('template/js');
	}
	public function pdf()
	{
		$this->load->model('M_Wo');
		$this->load->library('dompdf_gen');
		$data['wo'] = $this->M_Wo->getPDF();
		$this->load->view('wo/laporan_pdf', $data);
		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Data_Wo.pdf", array('Attachment' => 0));
	}

}