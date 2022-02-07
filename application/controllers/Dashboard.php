<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Equipment');
        $this->load->model('M_Dashboard');
    }
    
    public function index()
    {
        $eq = $this->M_Equipment->getNilaiWo();
        $site = $this->M_Dashboard->getSiteDesc();
        $siteid = $this->M_Dashboard->getSiteId();
        // echo "<pre>"; print_r($eq); die;
        $data = array(
            'content' => 'dashboard/dashboard',
            'equipment' => $eq,
            'site' => $site,
            'siteid' => $siteid
        );
        // echo "<pre>"; print_r((json_encode($data['equipment']))); die;
        // echo "<pre>"; print_r($data['equipment']); die;
        $this->load->view('layouts/base', $data);
    }

	public function ajaxGetValue()
	{
		$site = $this->input->post('site');
		if (isset($site)) {
			$chart = $this->M_Equipment->getEqChild($site);
			$chartData = array_column($chart, 'nilai_wo');
			$chartLabel = array_column($chart, 'diskripsi');
			// echo "<pre>"; print_r(json_encode($chartLabel)); die;
			$data = array(
				'site' => $chartLabel,
				'equipment' => $chartData
			);
			$data = json_encode($data);

            return print_r($data);		
		} else {
			# code...
		}
		
	}
}