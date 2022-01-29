<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Equipment extends CI_Model {
    
    public function getData($limit, $start)
	{
		// $this->db->select("*");
		// $this->db->from('equipment');
		// $query=$this->db->get();
		// return $query->result();
        
        return $this->db->get('equipment',$limit, $start)->result();
        
	}
    public function getRow($limit, $start){
        return $this->db->get('equipment',$limit, $start)->result_array();
    }
}

