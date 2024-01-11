<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pegawai extends CI_Model{

  public function insert_table($table, $data){
    $this->db->insert($table, $data);
    $insertId = $this->db->insert_id();
    return $insertId;
  }

  public function update_table($table, $data, $cond) {
    $this->db->where($cond);
    $this->db->update($table, $data);
  }

  public function delete_table($table, $cond) {
    $this->db->where($cond);
    $this->db->delete($table);
  }
  
  function show_combo($table, $fieldId, $fieldName, $clause, $fieldOrder, $value) {
		$list = '';
    $sql  = " SELECT	".$fieldId.", ".$fieldName."
              FROM	".$table."
              WHERE	".$clause."
              ORDER BY ".$fieldOrder;
    $rhQ      = $this->db->query($sql);
    foreach($rhQ->result() as $rrQ){
      $field_id		= $rrQ->$fieldId;
      $field_name	= $rrQ->$fieldName;
      ($value == $field_id) ? $selected = "selected" : $selected = "";
      $list	.= '<option value="'.$field_id.'" '.$selected.'>'.$field_name.'</option>';
    }
    return $list;
  }

  // public function getPdf($pc_id){    
  //   $this->db->select('*');
  //   $this->db->from('pgw_calon');
  //   $this->db->where('pc_id', $pc_id);
  //   $query = $this->db->get();
  //   return $query->result();
  // }

  public function getPdf($pc_id){    
    $this->db->select('*');
    $this->db->from('view01');
    $this->db->where('pc_id', $pc_id);
    $query = $this->db->get();
    return $query->result();
  }

  public function getPdfKel($pc_id){    
    $this->db->select('*');
    $this->db->from('pgw_keluarga');
    $this->db->where('pc_id', $pc_id);
    $query = $this->db->get();
    return $query->result();
  }

  function tampil_data(){
    // return $this->db->get('kategori');
    $query = "SELECT * FROM pgw_calon
              ORDER BY pc_id
              ";
    return $this->db->query($query);
  }

  function getData(){
		$data_siswa = $this->db->get('pgw_calon');
		return $data_siswa->result();
	}
  
}