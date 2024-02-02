<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pdf extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function getPribadi($rNum){    
    $this->db->select('*');
    $this->db->from('v_dt_pgw_calon');
    $this->db->where('pc_id', $rNum);
    $query = $this->db->get();
    return $query->result();
  }

  public function getKeluarga($rNum){    
    $this->db->select('*');
    $this->db->from('pgw_keluarga');
    $this->db->where('pc_id', $rNum);
    $query = $this->db->get();
    return $query->result();
  }

  public function getPendidikan($rNum){    
    $this->db->select('*');
    $this->db->from('pgw_pendidikan');
    $this->db->where('pc_id', $rNum);
    $query = $this->db->get();
    return $query->result();
  }

  public function getPekerjaan($rNum){    
    $this->db->select('*');
    $this->db->from('pgw_kerja');
    $this->db->where('pc_id', $rNum);
    $query = $this->db->get();
    return $query->result();
  }

  public function getReferensiPro($rNum){    
    $this->db->select('*');
    $this->db->from('pgw_referensi_pro');
    $this->db->where('pc_id', $rNum);
    $query = $this->db->get();
    return $query->result();
  }

  public function getReferensiKer($rNum){    
    $this->db->select('*');
    $this->db->from('pgw_referensi_kerabat');
    $this->db->where('pc_id', $rNum);
    $query = $this->db->get();
    return $query->result();
  }

  public function getRequest($rNum){    
    $this->db->select('*');
    $this->db->from('pgw_request');
    $this->db->where('pc_id', $rNum);
    $query = $this->db->get();
    return $query->result();
  }

  public function getKursus($rNum){    
    $this->db->select('*');
    $this->db->from('pgw_kursus');
    $this->db->where('pc_id', $rNum);
    $query = $this->db->get();
    return $query->result();
  }

  public function getBahasa($rNum){    
    $this->db->select('*');
    $this->db->from('v_dt_pgw_bahasa');
    $this->db->where('pc_id', $rNum);
    $query = $this->db->get();
    return $query->result();
  }

  public function getPertanyaan($rNum){    
    $this->db->select('*');
    $this->db->from('pgw_pertanyaan');
    $this->db->where('pc_id', $rNum);
    $query = $this->db->get();
    return $query->result();
  }

  // public function getData() {
  //   $query = $this->db->get('pgw_calon');
  //   return $query->result();
  // }
}
