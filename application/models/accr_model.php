<?php

class Accr_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function add_accr ($accr_data) {
    $this->db->insert('tb_accrs', $accr_data);
    return $this->db->insert_id();
  }

  public function get_account_number ($order_number) {
    $this->db->select('accr_nmbr');
    $this->db->from('tb_accrs');
    $this->db->where('ordr_nmbr', $order_number);
    $query = $this->db->get();
    $ret = $query->row()->accr_nmbr;
    return $ret;
  }

  public function get_account_ammount ($order_number) {
    $this->db->select('accr_amnt');
    $this->db->from('tb_accrs');
    $this->db->where('ordr_nmbr', $order_number);
    $query = $this->db->get();
    $ret = $query->row()->accr_amnt;
    return $ret;
  }

  public function update_status($order_number) {
    $this->db->set('accr_stat', 1);
    $this->db->where('ordr_nmbr', $order_number);
    $this->db->update('tb_accrs');
    return $this->db->affected_rows();
  }
}
