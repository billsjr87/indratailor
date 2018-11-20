<?php

class Pymt_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function add_accr ($pymt_data) {
    $this->db->insert('tb_pymts', $pymt_data);
    return $this->db->insert_id();
  }

}
