<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Indra Tailor || IIS'
		);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav');
		$this->load->view('users/home');
		$this->load->view('templates/footer');
	}
}
