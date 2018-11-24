<?php

class Order_detail_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function add_order_detail ($detail_data) {
    $this->db->insert_batch('tb_order_detail', $detail_data);
    return ($this->db->affected_rows() > 0)? true : false;
  }

}
