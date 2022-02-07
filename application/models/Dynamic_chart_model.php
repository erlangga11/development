<?php

class Dynamic_chart_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
 function fetch_site()
 {
    $data = $this->db->select('siteid')->from('equipment')->
    group_by("siteid")->order_by('siteid','DESC')->get();
    // echo "<pre>"; print_r($data->result_array()); die;
    $data = $data->result();

    return $data;
 }

 function fetch_chart_data($siteid)
 {
    
    $data = $this->db->select('*')->from('equipment')->limit('10')->
    where('siteid', $siteid)->order_by('siteid','DESC')->get();
    // echo "<pre>"; print_r($data->result_array()); die;
    $data = $data->result();

    return $data;

 }
}
?>