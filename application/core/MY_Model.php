<?php

class MY_Model extends CI_Model
{
	public function getAllData($table){
		return $this->db->get($table);
	}

	public function getDataById($table, $where){
		return $this->db->get_where($table, $where)->row_array();
	}

	public function getNumRows($table, $where){
		return $this->db->get_where($table, $where)->num_rows();
	}

	public function insertData($table, $data){
		$this->db->insert($table, $data);
	}

	public function updateData($table, $data, $where){
		$this->db->update($table, $data, $where);
	}

	public function deleteData($table, $where){
		$this->db->delete($table, $where);
	}
}
