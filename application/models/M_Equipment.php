<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Equipment extends CI_Model {
    
    public function getData($limit, $start, $keyword = null)
	{
		// $this->db->select("*");
		// $this->db->from('equipment');
		// $query=$this->db->get();
		// return $query->result();
        
        if ($keyword) {
            $searchResult = $this->db->like('diskripsi',$keyword)->or_like('equipno',$keyword);
        } 
        $total_rows = $searchResult->affected_rows();
        $var = $this->db->limit($limit, $start)->get('equipment');
        $dataResult = $var->result();
        // echo "<pre>"; var_dump($total_rows); die;
        // echo "<pre>"; print_r(array($searchResult, $dataResult, $total_rows)); die;
        return array($dataResult, $total_rows);
        
	}
    public function getRow($limit, $start){
        return $this->db->get('equipment',$limit, $start)->result_array();
    }
    public function getPDF(){
        $this->db->select("*");
		$this->db->from('equipment');
		$query=$this->db->get();
		return $query->result();
    }
}

