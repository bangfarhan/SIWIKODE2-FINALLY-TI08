<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['nama_user'] = $this->session->userdata('nama');
		$data['jumlah_taman_wisata'] = $this->M_wisata->jumlah_wisata(3);
		$data['jumlah_religi'] = $this->M_wisata->jumlah_wisata(4);
		$data['jumlah_water_park'] = $this->M_wisata->jumlah_wisata(5);
		$this->template->load('template', 'user/v_dashboard', $data);
	}
	public function keranjang($id)
	{
		if ($this->session->userdata('status') != 'login') {
			redirect('User');
		} else {
			$data['nama_user'] = $this->session->userdata('nama');
			$data['row'] = $this->m_admin->keranjang($id);
			$this->template->load('template', 'user/v_keranjang', $data);
		}
	}
	public function ker_add()
	{
		$data['nama_user'] = $this->session->userdata('nama');
		$post = $this->input->post(null, TRUE);
		$this->m_admin->ker_add($post);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'simpan');
			echo "<script>window.location='" . site_url('user/detail/' . $post['wisata_id']) . "';</script>";
		}
	}

	public function ker_del($id)
	{
		$this->m_admin->ker_del($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'simpan');
		}
		echo "<script>window.location='" . site_url('User/keranjang/' . $this->session->userdata('id')) . "';</script>";
	}

	public function profile($id)
	{
		if ($this->session->userdata('status') != 'login') {
			redirect('User');
		} else {
			$data['nama_user'] = $this->session->userdata('nama');
			$query = $this->m_admin->user($id);
		}
		if ($query->num_rows() > 0) {
			$data['row'] = $query->row();
			$this->template->load('template', 'user/v_profile', $data);
		}
	}

	public function rekreasi()
	{
		$data['nama_user'] = $this->session->userdata('nama');
		$data['row'] = $this->m_admin->get();
		$this->template->load('template', 'user/v_rekreasi', $data);
	}
	public function detail($id)
	{
		$data['nama_user'] = $this->session->userdata('nama');
		$data['row'] = $this->m_admin->get($id);
		$data['tes'] = $this->m_admin->testimoni();
		$data['profesi'] = $this->m_admin->profesi();
		$this->template->load('template', 'user/v_detail', $data);
	}

	public function tes_add()
	{
		$data['nama_user'] = $this->session->userdata('nama');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('komentar', 'komentar', 'required');

		if ($this->form_validation->run() == FALSE) {
		} else {
			$post = $this->input->post(null, TRUE);
			$this->m_admin->tes_add($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'simpan');
				echo "<script>window.location='" . site_url('user/detail/' . $post['wisata_id']) . "';</script>";
			}
		}
	}
	public function user_edit($id)
    {
        $data['nama_user'] = $this->session->userdata('nama');
		$id_user = $this->session->userdata('id');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        if ($this->form_validation->run() == FALSE) {
            $query = $this->m_admin->user($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'user/v_user_edit', $data);
            } else {
                echo "<script>alert('Data tidak ditemukan');";
                echo "window.location='" . site_url('Admin/user') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->m_admin->user_edit($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'simpan');
            }
            echo "<script>window.location='" . site_url('User/profile/') .$id_user. "';</script>";
        }
    }

}
