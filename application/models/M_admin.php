<?php
class M_admin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($id = null)
    {
        $this->db->select('wisata.*, jenis_wisata.nama as wisata_nama, jenis_kuliner.nama as kuliner_nama');
        $this->db->from('wisata');
        $this->db->join('jenis_wisata', 'wisata.jenis_wisata_id = jenis_wisata.id');
        $this->db->join('jenis_kuliner', 'wisata.jenis_kuliner_id = jenis_kuliner.id');
        if ($id != null) {
            $this->db->where('wisata.id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getKul($id = null)
    {
        $this->db->from('jenis_kuliner');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function getWis($id = null)
    {
        $this->db->from('jenis_wisata');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function add($post)
    {
        $params['nama'] = $post['nama'];
        $params['deskripsi'] = $post['deskripsi'];
        $post['foto1'] = $this->_uploadImage($params['nama']);
        if ($post['foto1'] != null) {
            $params['foto1'] = $post['foto1'];
        }
        $params['fasilitas'] = $post['fasilitas'];
        $params['bintang'] = $post['bintang'];
        $params['kontak'] = $post['kontak'];
        $params['alamat'] = $post['alamat'];
        $params['maps'] = $post['maps'];
        $params['email'] = $post['email'];
        $params['web'] = $post['web'];
        $params['jenis_wisata_id'] = $post['jenis_wisata'];
        $params['jenis_kuliner_id'] = $post['jenis_kuliner'];
        $this->db->insert('wisata', $params);
    }

    private function _uploadImage($nama)
    {
        $config['upload_path']          = './upload/foto/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $nama;
        $config['overwrite']            = true;
        $config['max_size']             = 10024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        } else {
            return null;
        }
    }

    public function del($id)
    {
        $row = $this->get($id);
        foreach ($row->result() as $key => $data) {
            if ($data->id == $id) {
                if ($data->foto1 != 'default.jpg') {
                    unlink("./upload/foto/$data->foto1");
                }
            }
        }
        $this->db->where('id', $id);
        $this->db->delete('wisata');
    }

    public function edit($post)
    {
        $params['nama'] = $post['nama'];
        $params['deskripsi'] = $post['deskripsi'];
        $post['foto1'] = $this->_uploadImage($params['nama']);
        if ($post['foto1'] == null) {
            $params['foto1'] = $post['foto_lama'];
        } else {
            $params['foto1'] = $post['foto1'];
        }
        $params['fasilitas'] = $post['fasilitas'];
        $params['bintang'] = $post['bintang'];
        $params['kontak'] = $post['kontak'];
        $params['alamat'] = $post['alamat'];
        $params['maps'] = $post['maps'];
        $params['email'] = $post['email'];
        $params['web'] = $post['web'];
        $params['jenis_wisata_id'] = $post['jenis_wisata'];
        $params['jenis_kuliner_id'] = $post['jenis_kuliner'];
        $this->db->where('id', $post['id']);
        $this->db->update('wisata', $params);
    }

    public function user($id = null)
    {
        $this->db->from('pengguna');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function user_add($post)
    {
        $params['nama'] = $post['nama'];
        $params['username'] = $post['username'];
        $params['alamat'] = $post['alamat'];
        $params['password'] = $post['password'];
        $params['hp'] = $post['hp'];
        $post['foto'] = $this->_uploadImage($params['nama']);
        if ($post['foto'] != null) {
            $params['foto'] = $post['foto'];
        }
        $params['jk'] = $post['jk'];
        $params['id_status'] = $post['id_status'];
        $params['create_date'] = $post['create_date'];
        $params['update_date'] = $post['update_date'];
        $this->db->insert('pengguna', $params);
    }
    public function user_edit($post)
    {
        $params['nama'] = $post['nama'];
        $params['alamat'] = $post['alamat'];
        $params['hp'] = $post['hp'];
        $params['username'] = $post['username'];
        $post['foto'] = $this->_uploadImage($params['nama']);
        if ($post['foto'] == null) {
            $params['foto'] = $post['foto_lama'];
        } else {
            $params['foto'] = $post['foto'];
        }
        if (!empty($post['password'])) {
            $params['password'] = $post['password'];
        }
        $params['jk'] = $post['jk'];
        $params['id_status'] = $post['id_status'];
        $params['create_date'] = $post['create_date'];
        $params['update_date'] = $post['update_date'];
        $this->db->where('id', $post['id']);
        $this->db->update('pengguna', $params);
    }

    public function user_del($id)
    {
        $row = $this->user($id);
        foreach ($row->result() as $key => $data) {
            if ($data->id == $id) {
                if ($data->foto != 'default.jpg') {
                    unlink("./upload/foto/$data->foto");
                }
            }
        }
        $this->db->where('id', $id);
        $this->db->delete('pengguna');
    }

    public function keranjang($id)
    {
        $this->db->select('pesanan.*, wisata.nama as wisata_nama, wisata.foto1 as foto_wisata, pengguna.id as pengguna_id');
        $this->db->from('pesanan');
        $this->db->join('wisata', 'pesanan.id_wisata = wisata.id');
        $this->db->join('pengguna', 'pesanan.id_pengguna = pengguna.id');
        if ($id != null) {
            $this->db->where('pesanan.id_pengguna', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function ker_add($post)
    {
        $params['id_pengguna'] = $post['id_pengguna'];
        $params['id_wisata'] = $post['wisata_id'];
        $params['create_date'] = date('Y-m-d H:i:s');
        $params['update_date'] = date('Y-m-d H:i:s');
        $this->db->insert('pesanan', $params);
    }

    public function ker_del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pesanan');
    }

    public function testimoni($id = null)
    {
        $this->db->select('testimoni.*, profesi.nama as profesi');
        $this->db->from('testimoni');
        $this->db->join('profesi', 'testimoni.profesi_id = profesi.id');
        if ($id != null) {
            $this->db->where('wisata_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function profesi($id = null)
    {
        $this->db->from('profesi');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function tes_add($post)
    {
        $params['nama'] = $post['nama'];
        $params['email'] = $post['email'];
        $params['profesi_id'] = $post['profesi_id'];
        $params['wisata_id'] = $post['wisata_id'];
        $params['rating'] = $post['rating'];
        $params['komentar'] = $post['komentar'];

        $this->db->insert('testimoni', $params);
    }
}
