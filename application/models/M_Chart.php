<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Chart extends CI_Model {

    public function getSiteId()
    {
        $data = $this->db->select('siteid, diskripsi')->from('site')->get();
        $data = $data->result();
        return $data;
    }
    public function getUnit($val = null){
        // echo "val : ".$val;die;
        if (isset($val)) {
            $data = $this->db->query(
                "SELECT unitid, diskripsi 
                FROM unit
                WHERE siteid = ? ", $val);
                $data = $data->result_array();
                // echo "<pre>";print_r($data) ;die;
                return $data;
        }

    }


    public function getNilaiWo($site = null, $unit = null)
    {
        // echo $site;
        // echo $unit;die;
        if(isset($unit)){
            $data = $this->db->query(
                "SELECT gc.diskripsi, gc.nilai_wo, c.unitid
                FROM equipment AS p
                LEFT JOIN equipment AS c ON c.parent = p.equipno
                LEFT JOIN equipment AS gc ON gc.parent = c.equipno
                WHERE p.parent = '-1' AND p.siteid = '".$site."' AND c.unitid = '".$unit."' ORDER BY c.equipno ASC"
            );
    
        }elseif(!isset($unit)){
            $data = $this->db->query(
                "SELECT gc.diskripsi,gc.nilai_wo,c.unitid
                FROM equipment AS p
                LEFT JOIN equipment AS c ON c.parent = p.equipno
                LEFT JOIN equipment AS gc ON gc.parent = c.equipno
                WHERE p.parent = '-1' AND p.siteid = ? 
                ORDER BY c.equipno ASC", $site
            );
            // echo "a";die;
        }else{
            echo "gagal";die;
        }
        
        
        $data = $data->result_array();
        // echo "<pre>"; print_r($data); die;
        // $data = array_column($data, 'nilai');
        
        return $data;  
    }



    
    public function getEqChild($val = null)
    {
            $data = $this->db->query("SELECT 
            c.diskripsi
            FROM equipment AS p
            LEFT JOIN equipment AS c ON c.parent = p.equipno
            WHERE p.parent = '-1' AND c.siteid = ?
            ORDER BY p.equipno ASC", $val);
            // echo "<pre>"; print_r($data->result_array()); die;
            $data = $data->result();
            // $data = array_column($data, 'equipno');
            // echo "<pre>"; print_r($data); die;
            return $data;
        
    }
}