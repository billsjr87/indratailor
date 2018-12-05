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

  public function getAllOrder() {
    $this->db->select('tb_orders.*, tb_custs.*, tb_accrs.*');
    $this->db->from('tb_orders');
    $this->db->join('tb_custs', 'tb_custs.cust_indx = tb_orders.cust_indx', 'inner');
    $this->db->join('tb_accrs', 'tb_accrs.ordr_nmbr = tb_orders.ordr_nmbr', 'inner');
    $this->db->order_by('tb_orders.trax_date', 'DESC');
    $query = $this->db->get();
    $result = array();
    foreach ($query->result() as $row) {
      $order = array(
        'ordr_nmbr' => $row->ordr_nmbr,
        'ordr_date' => $row->ordr_date,
        'ordr_fndt' => $row->ordr_fndt,
        'ordr_detl' => $row->ordr_detl,
        'cust_indx' => $row->cust_indx,
        'cust_titl' => $row->cust_titl,
        'cust_name' => $row->cust_name,
        'cust_phnn' => $row->cust_phnn,
        'cust_addr' => $row->cust_addr,
        'accr_nmbr' => $row->accr_nmbr,
        'accr_amnt' => $row->accr_amnt,
        'accr_stat' => $row->accr_stat
      );
      array_push($result, $order);
    }
    return $result;
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
