<?php

class Accr_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function add_accr ($accr_data) {
    $this->db->insert('tb_accrs', $accr_data);
    return $this->db->insert_id();
  }

}
