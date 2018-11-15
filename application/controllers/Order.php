<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->stor_name = "INDRA TAILOR";
		$this->stor_addr = "Addr";
		$this->stor_phnn = "Phnn";
	}

	public function index()
	{
		$data = array(
			'title' => 'Orders'
		);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('users/order');
		$this->load->view('templates/footer');
	}

	public function ordr_addn()
	{
		$data = array(
			'title' => 'Add Order',
			'stor_name' => $this->stor_name,
			'stor_addr' => $this->stor_addr,
			'stor_phnn' => $this->stor_phnn,
		);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('users/orders/add_order');
		$this->load->view('templates/footer');
	}

}
