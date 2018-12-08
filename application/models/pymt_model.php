<?php

class Pymt_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function add_pymt ($pymt_data) {
    $this->db->insert('tb_pymts', $pymt_data);
    return $this->db->insert_id();
  }

  public function get_total_payment ($accrNumber) {
    $this->db->select('*');
    $this->db->from('tb_pymts');
    $this->db->where('accr_nmbr', $accrNumber);
    $query = $this->db->get();
    $result = 0;
    foreach ($query->result() as $row) {
      $result += $row->pymt_amnt;
    }
    return $result;
  }

}
