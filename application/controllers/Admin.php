<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('id_status') != 1) {
            redirect('Dashboard');
        }
        $data['nama_user'] = $this->session->userdata('nama');
        $data['row'] = $this->m_admin->get();
        $this->template->load('template', 'v_admin', $data);
    }
    public function edit($id)
    {
        $data['nama_user'] = $this->session->userdata('nama');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $jenis_kuliner = $this->m_admin->getKul();
            $jenis_wisata = $this->m_admin->getWis();
            $data['jenis_kuliner'] = $jenis_kuliner;
            $data['jenis_wisata'] = $jenis_wisata;
            $query = $this->m_admin->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $data['jenis_kuliner'] = $jenis_kuliner;
                $data['jenis_wisata'] = $jenis_wisata;
                $this->template->load('template', 'admin_edit', $data);
            } else {
                echo "<script>alert('Data tidak ditemukan');";
                echo "window.location='" . site_url('Admin') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->m_admin->edit($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'simpan');
            }
            echo "<script>window.location='" . site_url('Admin') . "';</script>";
        }
    }

    public function add()
    {
        $data['nama_user'] = $this->session->userdata('nama');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $jenis_kuliner = $this->m_admin->getKul();
            $jenis_wisata = $this->m_admin->getWis();
            $data['jenis_kuliner'] = $jenis_kuliner;
            $data['jenis_wisata'] = $jenis_wisata;
            $this->template->load('template', 'admin_add', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->m_admin->add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'simpan');
            } else {
                echo "<script>alert('gagal');</script>";
            }
            echo "<script>window.location='" . site_url('Admin') . "';</script>";
        }
    }

    public function del($id)
    {
        $this->m_admin->del($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'hapus');
        }
        echo "<script>window.location='" . site_url('Admin') . "';</script>";
    }

    public function user()
    {

        $data['nama_user'] = $this->session->userdata('nama');
        $data['row'] = $this->m_admin->user();
        $this->template->load('template', 'v_user', $data);
    }

    public function user_add()
    {
        $data['nama_user'] = $this->session->userdata('nama');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        if ($this->form_validation->run() == FALSE) {
            $id_status = $this->m_admin->user();
            $data['id_status'] = $id_status;
            $this->template->load('template', 'user_add', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->m_admin->user_add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'simpan');
            } else {
                echo "<script>alert('gagal');</script>";
            }
            echo "<script>window.location='" . site_url('Admin/user') . "';</script>";
        }
    }

    public function user_edit($id)
    {
        $data['nama_user'] = $this->session->userdata('nama');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        if ($this->form_validation->run() == FALSE) {
            $query = $this->m_admin->user($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'user_edit', $data);
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
            echo "<script>window.location='" . site_url('Admin/user') . "';</script>";
        }
    }

    public function user_del($id)
    {
        $this->m_admin->user_del($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'hapus');
        }
        echo "<script>window.location='" . site_url('Admin/user') . "';</script>";
    }
}
