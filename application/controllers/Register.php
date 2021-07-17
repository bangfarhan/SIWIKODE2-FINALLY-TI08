<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') == "login" && $this->session->userdata('id_status') == 2) {
			redirect('User');
		}
	}
	public function index()
	{
		$this->load->view('v_register');
	}
	public function proses_register()
	{
		$data['nama'] = $this->input->post('nama');
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$data['jk'] = $this->input->post('jk');
		$data['create_date'] = date('Y-m-d H-m-s');
		$data['update_date'] = date('Y-m-d H-m-s');
		$data['id_status'] = 2;
		$this->M_tabel->createTable('pengguna', $data);
		redirect('Login');
	}
}
