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
    $result = array(
      'stor_name' => "",
      'stor_addr' => "",
      'stor_phnn' => ""
    );
    foreach ($query->result() as $profile) {
      $result['stor_name'] = $profile->stor_name;
      $result['stor_addr'] = $profile->stor_addr;
      $result['stor_phnn'] = $profile->stor_phnn;
    }
    return $result;
  }

}
