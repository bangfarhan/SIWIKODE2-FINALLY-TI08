<?php
class M_wisata extends CI_Model{
    public function __construct()
	{
        parent::__construct();
        
	}
    public function jumlah_wisata($id_wisata)
    {
        $sql    = "SELECT * FROM jenis_kuliner where id_jenis_wisata = $id_wisata";
        $query  = $this->db->query($sql);
        return $query->num_rows();
    }
    function data_wisata($id_wisata)
	{
		$sql    = "SELECT * FROM jenis_kuliner where id_jenis_wisata = $id_wisata";
		$query  = $this->db->query($sql);
		$rows   = $query-> result_array();
		return $rows;
	}
	
}