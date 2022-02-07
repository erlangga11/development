<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Equipment extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->db->cache_on();
    }
    

    public function getData()
    { 
        $data = $this->db->select('id, siteid, equipno,parent,diskripsi, nilai_wo, nilai_pdm, nilai')->from('equipment')->get();
        // echo "<pre>"; print_r($data->result_array()); die;
        $data = $data->result();

        return $data;
    }

   
    public function getNilaiWo()
    {
        $data = $this->db->query("SELECT (SELECT nilai_wo AS nilai FROM equipment WHERE siteid = site.siteid AND parent = '-1') FROM site");
        // echo "<pre>"; print_r($data->result_array()); die;
        $data = $data->result_array();
        $data = array_column($data, 'nilai');
        // echo "<pre>"; print_r($data); die;
        return $data;        
    }

    public function getEqChild($val = null)
    {
        if (isset($val)) {
            $data = $this->db->query("SELECT 
            c.diskripsi, c.nilai_wo
            FROM equipment AS p
            LEFT JOIN equipment AS c ON c.parent = p.equipno
            WHERE p.parent = '-1' AND c.siteid = ?
            ORDER BY p.equipno ASC", $val);
            // echo "<pre>"; print_r($data->result_array()); die;
            $data = $data->result_array();
            // $data = array_column($data, 'equipno');
            // echo "<pre>"; print_r($data); die;
            return $data;
        }
    }
    
    // public function getData($limit, $start, $keyword = null)
	// {
    //     $total_rows = $this->db->affected_rows();
    //     if ($keyword) {
    //         $searchResult = $this->db->like('diskripsi',$keyword)->or_like('siteid',$keyword);
    //         $total_rows = $searchResult->affected_rows();
    //     } 
    //     $var = $this->db->limit($limit, $start)->get('equipment');
    //     $dataResult = $var->result();
    //     // echo "<pre>"; var_dump($total_rows); die;
    //     // echo "<pre>"; print_r(array($searchResult, $dataResult, $total_rows)); die;
    //     return array($dataResult, $total_rows);      
	// }
    // public function getRow($limit, $start){
    //     return $this->db->get('equipment',$limit, $start)->result_array();
    // }
    // public function getPDF(){
    //     $this->db->select("*");
	// 	$this->db->from('equipment');
	// 	$query=$this->db->get();
	// 	return $query->result();
    // }
}

