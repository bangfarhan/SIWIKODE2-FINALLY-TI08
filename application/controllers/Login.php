<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') == "login") {
			redirect('User');
		}
	}
	public function index()
	{
		$this->load->view('v_login');
	}
	public function proses_login()
	{
		$username   = $this->input->post('username');
		$password   = $this->input->post('password');
		$result     = $this->M_login->getUser($username, $password);
		if ($result) {
			$newdata   = array(
				'id'        => $result['id'],
				'nama'      => $result['nama'],
				'id_status' => $result['id_status'],
				'status'    => "login"
			);
			$this->session->set_userdata($newdata);
			if ($this->session->userdata('id_status') != null) {
				redirect('User');
			}
		} else {
			redirect('Login');
		}
	}
}
