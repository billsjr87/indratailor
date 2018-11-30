<?php

class Cust_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function add_customer ($cust_data) {
    $this->db->select('cust_indx')->from('tb_custs')->where('cust_phnn',$cust_data['cust_phnn']);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return false;
    } else {
      $this->db->insert('tb_custs', $cust_data);
      return (int) $this->db->insert_id();
    }
  }

  public function read_all () {
    $this->db->from('tb_custs');
    $this->db->order_by('cust_name','asc');
    $query = $this->db->get();
    $query->result();
    $result = array();
    foreach ($query->result() as $row) {
      $cust = array(
        'cust_indx' => $row->cust_indx,
        'cust_titl' => $row->cust_titl,
        'cust_name' => $row->cust_name,
        'cust_phnn' => $row->cust_phnn,
        'cust_addr' => $row->cust_addr,
        'cust_rgdt' => $row->cust_rgdt
      );
      array_push($result, $cust);
    }
    return $result;
  }

}
