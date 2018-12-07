<?php

class User_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function isUserExist($username, $password) {
    $encripted_pass = MD5($password);
    $this->db->where('user_name', $username);
    $this->db->where('user_pass', $encripted_pass);
    $query = $this->db->get('tb_user');
    if ($query->num_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function getUserDetail($username) {
    $this->db->where('user_name', $username);
    $query = $this->db->get('tb_user');
    return $query->row();
  }

}
