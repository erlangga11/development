<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chart extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		//memanggil model
		$this->load->model('M_Chart');
	}

	public function index()
	{
		$site = $this->M_Chart->getSiteId();
		// echo "<pre>";print_r($data);die;
		$data = array(
			'site' => $site,
			'content' => 'chart/chart',
		);
		$this->load->view('layouts/base', $data);
	}

	public function ajaxGetSiteValue()
	{
		$siteid = $this->input->post('siteid');
		// echo "<pre>";print_r($siteid);die;
		if (isset($siteid)) {
			$unit =  $this->M_Chart->getUnit($siteid);
			$dataValue = array_column($unit, 'unitid');
			$dataDeskripsi = array_column($unit, 'diskripsi');
			$chart = $this->M_Chart->getNilaiWo($siteid, null);
			// echo "<pre>";print_r($chart);die;
			$chartData = array_column($chart, 'nilai_wo');
			$chartLabel = array_column($chart, 'diskripsi');
			
			// echo "<pre>";print_r($chartData);
			// echo "<pre>";print_r($chartLabel);die;
			$data = array(
				'value' => $dataValue,
				'desc' => $dataDeskripsi,
				'chartData' => $chartData,
				'chartLabel' => $chartLabel
			);
			// echo "<pre>";print_r($data);die;
			$data = json_encode($data);
			// echo "<pre>";print_r($data);die;
			return print_r($data);
		} else {
			echo "ilang";
		}
	}

	public function ajaxGetChartValue()
	{
		$siteid = $this->input->post('siteid');
		$unitid = $this->input->post('unitid');
		// echo $siteid;
		// echo $unitid;die;
		$chart = $this->M_Chart->getNilaiWO($siteid, $unitid);
		// echo "<pre>";print_r($chart);die;
		$chartData = array_column($chart, 'nilai_wo');
		$chartLabel = array_column($chart, 'diskripsi');

		$data = array(
			'value' => $chartData,
			'label' => $chartLabel
		);
		// echo "<pre>";print_r($data);die;
		$data = json_encode($data);
		// echo "<pre>";print_r($data);die;
		return print_r($data);
	}





	// public function ajaxGetValueSite($site)
	// {
	// 	$site = $this->input->post('site');
	// 	if (isset($site)) {
	// 		$child =  $this->M_Chart->getUnit($site);
	// 		echo "<pre>"; print_r($child);die;
	// 		$chart = $this->M_Equipment->getEqChild($site);
	// 		$chartData = array_column($chart, 'nilai_wo');
	// 		$chartLabel = array_column($chart, 'diskripsi');
	// 		// echo "<pre>"; print_r(json_encode($chartLabel)); die;
	// 		$data = array(
	// 			'site' => $chartLabel,
	// 			'equipment' => $chartData
	// 		);
	// 		// echo "<pre>"; print_r($data); die;
	// 		return $data;
	// 	} else {
	// 		# code...
	// 	}

	// } 


}
