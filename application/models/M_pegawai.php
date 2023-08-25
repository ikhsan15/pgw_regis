<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model{

  public function insert_table($table, $data){
    $this->db->insert($table, $data);
    $insertId = $this->db->insert_id();
    return $insertId;
  }

  function update_table($table, $data, $cond) {
    $this->db->where($cond);
    $this->db->update($table, $data);
  }

  function delete_table($table, $cond) {
    $this->db->where($cond);
    $this->db->delete($table);
  }

  // public function save_batch($data){
	// 	return $this->db->insert_batch('pgw_test', $data);
	// }

  // function getUsers(){
  //   $this->db->select('*');
  //   $fetched_records = $this->db->get('users');
  //   $users = $fetched_records->result_array();
  //   return $users;
  // }
  // function updateUser($id, $field, $value){
  //   $data = array($field => $value);
  //   $this->db->where('id', $id);
  //   $this->db->update('users', $data);
  // }
  
}