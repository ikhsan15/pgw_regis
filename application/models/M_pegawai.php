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

  function updateKolomTertentu($pc_id, $pc_nama, $pss_id_status_seleksi) {
    $escaped_input = $this->db->escape($pc_nama);
    // Mengatur dua kolom yang ingin diupdate dan nilainya
    $this->db->set('pc_nama', $escaped_input);
    $this->db->set('pss_id_status_seleksi', $pss_id_status_seleksi);

    $this->db->where('pc_id', $pc_id);
    $this->db->update('public.pgw_calon');
  }

  function tampil_data(){
    // return $this->db->get('kategori');
    $query = "SELECT * FROM pgw_status_seleksi
              ORDER BY pss_id
              ";
    return $this->db->query($query);
  }

  function getData(){
		$data_siswa = $this->db->get('pgw_calon');
		return $data_siswa->result();
	}
  
}