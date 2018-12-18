<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('cust_model','m_cust');
		$this->load->model('measure_model','m_mssr');

	}

	public function index()
	{
		if ($this->session->userdata('username') == '') {
			redirect(base_url().'uac');
		}
		$customerList = $this->m_cust->read_all();
		$measureList = $this->m_mssr->getAllMeasure();
		$data = array(
			'title' => 'Indra Tailor || IIS',
			'customerList' => $customerList,
			'measureList' => $measureList
		);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('users/customer');
		$this->load->view('templates/footer');
	}
}
