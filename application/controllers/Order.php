<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->stor_indx = 0001;
		$this->stor_name = "INDRA TAILOR";
		$this->stor_addr = "Addr";
		$this->stor_phnn = "Phnn";
		$this->ordr_nmbr = 000001;
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
			'stor_indx' => $this->stor_indx,
			'stor_name' => $this->stor_name,
			'stor_addr' => $this->stor_addr,
			'stor_phnn' => $this->stor_phnn,
			'ordr_nmbr' => $this->ordr_nmbr
		);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('users/orders/add_order');
		$this->load->view('templates/footer');
	}

	public function ordr_save()
	{
		$stor_indx = $this->input->post("stor_indx");
		$ordr_nmbr = $this->input->post("ordr_nmbr");
		$ordr_date = $this->input->post("ordr_date");
		$ordr_fndt = $this->input->post("ordr_fndt");
		$cust_indx = $this->input->post("cust_indx");
		$cust_name = $this->input->post("cust_name");
		$ordr_item = $this->input->post("ordr_item");
		$ordr_detl = $this->input->post("ordr_detl");
		$ordr_fees = $this->input->post("ordr_fees");
		$ordr_dopy = $this->input->post("ordr_dopy");
		$ordr_accr = $this->input->post("ordr_accr");

		$pymt_stat = 0;
		if ($ordr_dopy == $ordr_fees and $ordr_accr == 0) {
			$pymt_stat = 1;
		}

		$ordr_data = array(
			'ordr_nmbr' => $ordr_nmbr,
			'ordr_date' => $ordr_date,
			'ordr_fndt' => $ordr_fndt,
			'cust_indx' => $cust_indx,
			'ordr_detl' => $ordr_detl,
			'ordr_fees' => $ordr_fees
		);

		// TODO: read order data...
		// TODO: add order to database table order
		// TODO: add items to database table order_item
		// TODO: add account to database table account

		$acco_data = array(
			'ordr_nmbr' => $ordr_nmbr,
			'accr_pydt' => $ordr_date,
			'accr_pymt' => $ordr_dopy,
			'accr_stat' => $pymt_stat
		);
	}

}
