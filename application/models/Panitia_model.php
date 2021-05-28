<?php

class Panitia_model extends MY_Model
{
	public function getListSiswaToApprove($limit, $start){
		return $this->db->from('siswa')->where('statusApprove', 'bt')->limit($limit, $start)->get()->result_array();
	}

	public function getOneDataSiswa($noRegis){
		return $this->db->select('*')->from('siswa s')->join('tb_ortu o', 's.noRegis = o.noRegis')->where('s.noRegis', $noRegis)->get()->row_array();
	}

	// public function getSiswaOnLimit($limit, $start){
	// 	return $this->db->get('siswa', $limit, $start)->result_array();
	// }
	// public function getMessage($username){
	// 	return $this->db->from('pesan')->where(['pengirim' => $username])->order_by('waktuKirim', 'DESC')->get();
	// }

}
