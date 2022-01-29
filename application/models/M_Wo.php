<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Wo extends CI_Model {
    
    public function getData()
	{
		$this->db->select("*");
		$this->db->from('wo');
		$query=$this->db->get();
		return $query->result();		
	}
}

