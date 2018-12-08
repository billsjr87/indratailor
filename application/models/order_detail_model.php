<?php

class Order_detail_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function add_order_detail ($detail_data) {
    $this->db->insert_batch('tb_order_detail', $detail_data);
    return ($this->db->affected_rows() > 0) ? true : false;
  }

  public function get_details ($orderNumber) {
    $this->db->select('*');
    $this->db->from('tb_order_detail');
    $this->db->join('tb_item_cate', 'tb_item_cate.item_cate_indx = tb_order_detail.caty_indx', 'inner');
    $this->db->join('tb_items', 'tb_items.item_indx = tb_item_cate.item_indx', 'inner');
    $this->db->join('tb_cate', 'tb_cate.cate_indx = tb_item_cate.cate_indx', 'inner');
    $this->db->where('ordr_nmbr', $orderNumber);
    $query = $this->db->get();
    $result = array();
    foreach ($query->result() as $row) {
      array_push($result, array(
        "quantity" => $row->item_qtty,
        "price" => $row->item_pric,
        "category" => $row->cate_name,
        "type" => $row->item_name
      ));
    }
    return $result;
  }

}
