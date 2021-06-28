<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{	
		parent:: __construct();

    }
	public function index()
	{
		$data['nama_user'] = $this->session->userdata('nama');
		$data['jumlah_argo_wisata'] = $this->M_wisata->jumlah_wisata(1);
		$data['jumlah_kuliner'] = $this->M_wisata->jumlah_wisata(2);
		$data['jumlah_taman_wisata'] = $this->M_wisata->jumlah_wisata(3);
		$data['jumlah_museum'] = $this->M_wisata->jumlah_wisata(4);
		$data['jumlah_water_park'] = $this->M_wisata->jumlah_wisata(5);
		
		$this->load->view('user/v_dashboard',$data);
	}
	public function keranjang()
	{
		$data['nama_user'] = $this->session->userdata('nama');
		$this->load->view('user/v_keranjang',$data);
	}
	public function profile()
	{
		$data['nama_user'] = $this->session->userdata('nama');
		$this->load->view('user/v_profile',$data);
	}
	
}
