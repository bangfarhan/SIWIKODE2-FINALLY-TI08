<?php
class M_wisata extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function jumlah_wisata($id_wisata)
	{
		$sql    = "SELECT * FROM wisata where jenis_wisata_id = $id_wisata";
		$query  = $this->db->query($sql);
		return $query->num_rows();
	}
	function data()
	{
		$sql    = "SELECT * FROM jenis_kuliner";
		$query  = $this->db->query($sql);
		$rows   = $query->result_array();
		return $rows;
	}
}
