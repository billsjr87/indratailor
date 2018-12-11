<?php

class Measure_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function add_measure ($measure_data) {
    $this->db->insert('tb_measures', $measure_data);
    return $this->db->insert_id();
  }

  public function getAllMeasure() {
    $query = $this->db->get('tb_measures');
    $result = array();
    foreach ($query->result() as $row) {
      array_push($result, array(
        'mssr_indx' => $row->mssr_indx,
        'cust_indx' => $row->cust_indx,
        'cate_indx' => $row->cate_indx,
        'msssr_size' => $row->mssr_size,
        'mssr_date' => $row->mssr_date
      ));
    }
    return $result;
  }

}
