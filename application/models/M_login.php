<?php
class M_login extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	function getUser($username, $password)
	{
		$sql    = "SELECT * FROM pengguna  WHERE username = '$username' and password='$password' ";
		$query  = $this->db->query($sql);
		$rows   = $query->row_array();
		return $rows;
	}
	/* function get($id = null)
	{
		$sql    = "SELECT * FROM pengguna  WHERE id = '$id' ";
		$query  = $this->db->query($sql);
		$rows   = $query->row_array();
		return $rows;
	} */

	public function get($id = null)
	{
		$this->db->from('pengguna');
		if ($id != null) {
			$this->db->where('id', $id);
		}
		$query = $this->db->get();
		return $query;
	}
}
