<?php
class M_tabel extends CI_Model{
    public function __construct()
	{
        parent::__construct();
        
	}
    public function updateTable($table,$data,$where)
	{
		$this->db->update($table, $data, $where);
    }
    public function createTable($table,$data)
	{
		$this->db->insert($table,$data);
		# code...
	}
	public function deleteTable($table,$id)
	{
		$this->db->delete($table, array('id' => $id ));
		# code...
	}
	
}