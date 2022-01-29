<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Welcome extends CI_Model {
    
    public function getData()
	{
		$this->db->select("*");
		$this->db->from('equipment');
		$query=$this->db->get();
		return $query->result();		
	}
}

