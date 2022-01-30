<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Wo extends CI_Model {
    
    public function getData($limit, $start, $keyword = null)
	{
		$total_rows = $this->db->affected_rows();
		if ($keyword) {
            $searchResult = $this->db->like('wodesc',$keyword)->or_like('taskdesc',$keyword);
            $total_rows = $searchResult->affected_rows();
        } 
		$var = $this->db->limit($limit, $start)->get('wo');
		$dataResult = $var->result();

		return array($dataResult, $total_rows); 
		// $this->db->select("*");
		// $this->db->from('wo');
		// $query=$this->db->get();
		// return $query->result();		
	}
	public function getRow($limit, $start){
        return $this->db->get('wo',$limit, $start)->result_array();
    }
	public function getPDF(){
        $this->db->select("*");
		$this->db->from('wo');
		$query=$this->db->get();
		return $query->result();
    }
}

