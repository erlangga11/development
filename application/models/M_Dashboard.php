<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Dashboard extends CI_Model {
    
    public function getData()
	{
        // echo "<pre>"; var_dump($this->db->select('*')->from('site')->get()->result()); die;
        // $array = array('nilai_wo <=' => '75', 'nilai_wo >=' => '50');
        $siteid = $this->db->select('COUNT(id)')->from('equipment')->where('nilai_wo <= ', '75')->where('nilai_wo > ', '50')->get()->result_array();
        echo "<pre>"; print_r($siteid); die;
		$query = $this->db->query('SELECT (SELECT DISTINCT COUNT(id) FROM equipment WHERE siteid = a.siteid) AS equip FROM site AS a');
		// $query=$this->db->get();
        echo "<pre>"; print_r($query->result_array()); die;
		return $query->result();		
	}
}

