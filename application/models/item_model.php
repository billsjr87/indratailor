<?php

class Item_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function read_item_category (){
    $this->db->select('tb_item_cate.item_cate_indx, tb_items.*, tb_cate.*');
    $this->db->from('tb_item_cate');
    $this->db->join('tb_items','tb_item_cate.item_indx = tb_items.item_indx','inner');
    $this->db->join('tb_cate','tb_item_cate.cate_indx = tb_cate.cate_indx','inner');
    $query = $this->db->get();
    // echo $this->db->last_query();
    $result = array();
    foreach ($query->result() as $row) {
      $item = array(
        'item_cate_indx' => $row->item_cate_indx,
        'item_indx' => $row->item_indx,
        'item_name' => $row->item_name,
        'cate_indx' => $row->cate_indx,
        'cate_name' => $row->cate_name
      );
      array_push($result, $item);
    }
    return $result;
  }

  public function read_category(){
    $query = $this->db->get('tb_cate');
    $result = array();
    foreach ($query->result() as $row) {
      $cate = array(
        'cate_indx' => $row->cate_indx,
        'cate_name' => $row->cate_name
      );
      array_push($result, $cate);
    }
    return $result;
  }

}
