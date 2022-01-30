<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Equipment extends CI_Controller
{
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
		$this->load->model('M_Equipment');
		// $view = array('content'=>'equipment/table');
		$dataSearch = strtoupper($data['keyword']);
		$var = $this->db->query("SELECT * FROM equipment WHERE diskripsi LIKE ?", '%' . $dataSearch . '%');

		$config['base_url'] = base_url('Equipment/index'); //site url
		// var_dump($var->result()); die;
		// $this->db->or_like('equipno',$data['keyword']);
		// $this->db->from('equipment');
		$config['total_rows'] = $var->num_rows(); //total row
		// $data['total_rows'] = $config['total_rows'];
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

		$data['equipment'] = $this->M_Equipment->getData($config['per_page'], $data['start'], $dataSearch);
		// $DATA = array('data_equipment' =>$data['equipment']);
		// echo "<pre>"; var_dump($data['equipment']); die;



		$this->load->view('template/sidebar');
		$this->load->view('equipment/table', $data);
		$this->load->view('template/js');
	}
	public function pdf()
	{
		$this->load->model('M_Equipment');
		$this->load->library('dompdf_gen');
		$data['equipment'] = $this->M_Equipment->getPDF();
		$this->load->view('equipment/laporan_pdf', $data);
		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Data_Equipment.pdf", array('Attachment' => 0));
	}
}
