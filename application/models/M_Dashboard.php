<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Dashboard extends CI_Model {
    
     public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    public function getData()
    {
        $data = $this->db->select('id, siteid, diskripsi')->from('site')->get();
        $data = $data->result();
        // echo "<pre>"; print_r($data); die;
        return $data;
    }

    public function getSiteDesc()
    {
        $data = $this->db->select('diskripsi')->from('site')->get();
        // $data = $data->result();
        $data = $data->result_array();
        $data = array_column($data, 'diskripsi');
        // echo "<pre>";print_r(json_encode($arr)); die;

        return $data;
    }

    public function getSiteId()
    {
        $data = $this->db->select('siteid')->from('site')->get();
        // $data = $data->result();
        $data = $data->result();
        // $data = array_column($data, 'diskripsi');
        // echo "<pre>";print_r(json_encode($arr)); die;
        return $data;
    }
}

