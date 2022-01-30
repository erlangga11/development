<?php

class Dynamic_chart_model extends CI_Model
{
 function fetch_year()
 {
  $this->db->select('siteid');
  $this->db->from('equipment');
  $this->db->group_by('siteid');
  $this->db->order_by('siteid', 'DESC');
  return $this->db->get();
 }

 function fetch_chart_data($siteid)
 {
  $this->db->where('siteid', $siteid);
  $this->db->order_by('siteid', 'ASC');
  return $this->db->get('equipment');
 }
}

?>