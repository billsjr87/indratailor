<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('order_model','m_order');
		$this->load->model('accr_model','m_ar');
		$this->load->model('pymt_model','m_pymt');
		$this->load->model('prfl_model','m_prfl');

		$this->stor_indx = 1; // TODO: replace with login credential
		$this->stor_prfl = $this->m_prfl->read_prfl($this->stor_indx);

	}

	public function index($message = NULL)
	{
		$data = array(
			'title' => 'Orders',
			'message' => $message
		);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('users/order');
		$this->load->view('templates/footer');
	}

	public function ordr_addn()
	{
		$data = array( // TODO: read profile data
			'title' => 'Add Order',
			'stor_indx' => $this->stor_indx,
			'stor_prfl' => $this->stor_prfl,
			'ordr_nmbr' => $this->m_order->last_order_number()
		);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('users/modals/modals');
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
		$accr_stat = ($ordr_dopy == $ordr_fees and $ordr_accr == 0) ? 1 : 0;
		$trax_date = date('Y-m-d H:i:s');

		$ordr_data = array('ordr_nmbr' => $ordr_nmbr, 'trax_date' => $trax_date, 'ordr_date' => $ordr_date,'ordr_fndt' => $ordr_fndt,
			'ordr_detl' => $ordr_detl,'cust_indx' => $cust_indx);
		// insert order
		if ($this->m_order->add_order($ordr_data)) {
			// TODO: add order details
			$detl_rslt = TRUE;
			// insert accr
			$accr_data = array ('ordr_nmbr' => $ordr_nmbr,'accr_amnt' => $ordr_fees,'accr_stat' => $accr_stat);
			$accr_nmbr = $this->m_ar->add_accr($accr_data);
			// insert pymt
			if ($accr_nmbr != 0 and $ordr_dopy != 0) {
				$pymt_data = array('accr_nmbr' => $accr_nmbr,'pymt_date' => $ordr_date,'pymt_amnt' => $ordr_dopy);
				$this->m_pymt->add_pymt($pymt_data);
			}
			if ($accr_nmbr != 0 and $detl_rslt) {
				$msg = "Order saved";
				$this->index($msg);
			} else {
				echo "failed to insert detail order and/or account receiveable.";
			}
		} else {
			echo "failed to insert order data";
		}
	}

}
