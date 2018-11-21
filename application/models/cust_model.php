<?php

class Cust_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function add_customer ($cust_data) {
    if ($this->db->select('cust_indx')->from('tb_custs')->where('cust_phnn',$cust_data['cust_phnn'])->num_rows() > 0) {
      return FALSE;
    } else {
      $this->db->insert('tb_custs', $cust_data);
      return $this->db->insert_id();
    }
  }

}
