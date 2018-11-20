<?php

class Prfl_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function read_prfl ($stor_indx) {
    $this->db->select('*');
    $this->db->from('tb_profiles');
    $this->db->where('stor_indx', $stor_indx);
    $query = $this->db->get();
    return $query->result();
  }

}
