<?php

class Dynamic_chart_model extends CI_Model
{
 function fetch_year()
 {
  $this->db->select('nilai_wo');
  $this->db->from('equipment');
  return $this->db->get()->result();
 }

 function fetch_chart_data($nilai_wo)
 {
  $this->db->where('nilai_wo', $nilai_wo);
//   $this->db->order_by('nilai_wo', 'ASC');
  return $this->db->get('equipment');
 }
}

?>