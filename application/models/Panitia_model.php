<?php

class Panitia_model extends MY_Model
{

	public function getOneDataSiswa($noRegis){
		return $this->db->select('*')->from('siswa s')->join('tb_ortu o', 's.noRegis = o.noRegis')->where('s.noRegis', $noRegis)->get()->row_array();
	}

	public function getListSiswa($where, $limit, $start){
		return $this->db->get_where('siswa', $where, $limit, $start)->result_array();
	}

	// public function getMessage($username){
	// 	return $this->db->from('pesan')->where(['pengirim' => $username])->order_by('waktuKirim', 'DESC')->get();
	// }

}
