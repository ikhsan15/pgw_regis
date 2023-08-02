<?php

class Pegawai_model extends CI_Model{
  public function tambah(){
    $this->db->trans_start();

    $pegawai = [
      'pc_nama' => $this->input->post('nama_calon', true)
    ];
    $this->db->insert('pgw_calon', $pegawai);

    $last_id = $this->db->insert_id();

    $keluarga = [
      'pc_id'   => $last_id,
      'pf_nama' => $this->input->post('nama_kel', true)
    ];
    $this->db->insert('pgw_keluarga', $keluarga);

    $pendidikan = [
      'pc_id'   => $last_id,
      'ppend_nama' => $this->input->post('nama_pend', true)
    ];
    $this->db->insert('pgw_pendidikan', $pendidikan);

    $this->db->trans_complete();

    if($this->db->trans_status() === FALSE){
      echo 'rollback';
    }else{
      echo 'commited';
    }

  }

  function ambil(){
    $query = "SELECT
              a.*, b.pf_nama, c.ppend_nama
              FROM pgw_calon as a, pgw_keluarga as b, pgw_pendidikan as c
              WHERE b.pc_id = a.pc_id
              and c.pc_id = a.pc_id
              ORDER BY a.pc_id desc
              ";
    return $this->db->query($query);
  }



}