<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uac extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user_model','m_user');
	}

	public function index()
	{
		if ($this->session->userdata('username') == '') {
			$this->login();
		} else {
			if ($this->session->userdata('access_control') == 1) {
				redirect(base_url().'dashboard');
			} else {
				redirect(base_url().'order');
			}
		}
	}

	public function login() {
		$data = array(
			'title' => 'Login'
		);
		$this->load->view('templates/header', $data);
		$this->load->view('login');
	}

	public function logout_attempt() {
		$this->session->unset_userdata('username');
		$this->login();
	}

	public function login_attempt() {
		$this->form_validation->set_rules('username', 'Username', 'required|max_length[16]');
  	$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if ($this->m_user->isUserExist($username, $password)) {
				$userDetail = $this->m_user->getUserDetail($username);
				$session_data = array(
					'username' => $userDetail->user_name,
					'access_control' => $userDetail->user_ctrl
				);
				$this->session->set_userdata($session_data);
				$this->index();
			} else {
				$this->session->set_flashdata('error', 'Username dan Password salah.');
				$this->login();
			}
		} else {
			$this->login();
		}
	}

}
