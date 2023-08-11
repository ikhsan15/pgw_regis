<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model{

  public function insert_table($table, $data){
    $this->db->insert($table, $data);
    $insertId = $this->db->insert_id();
    return $insertId;
  }

  function delete_table($table, $cond) {
    $this->db->where($cond);
    $this->db->delete($table);
  }

  public function save_batch($data){
		return $this->db->insert_batch('pgw_test', $data);
	}
  
}