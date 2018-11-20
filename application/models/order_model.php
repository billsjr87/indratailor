<?php

class Order_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function add_order ($ordr_data) {
    $this->db->insert('tb_orders', $ordr_data);
    return $this->db->affected_rows() > 0;
  }

  public function read_order () {
    return $this->db->get('tb_orders');
  }

  public function last_order_number () {
    $this->db->select('ordr_nmbr');
    $this->db->from('tb_orders');
    $this->db->order_by('ordr_nmbr','desc')->limit(1);
    $query = $this->db->get();
    $result = 0;
    foreach ($query->result() as $row) {
      $result = $row->ordr_nmbr;
    }
    return $result;
  }

}
