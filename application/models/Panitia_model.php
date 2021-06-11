<?php

class Panitia_model extends MY_Model
{

	public function getOneDataSiswa($noRegis){
		return $this->db->select('*')->from('siswa s')->join('tb_ortu o', 's.noRegis = o.noRegis')->where('s.noRegis', $noRegis)->get()->row_array();
	}

	public function getListSiswa($where, $limit, $start){
		return $this->db->get_where('siswa', $where, $limit, $start)->result_array();
	}

	public function getListPanitia($cond1, $cond2){
		return $this->db->from('pengguna p')->join('data_panitia dp', 'p.username = dp.username')->where($cond1)->or_where($cond2)->get()->result_array();
	}

	public function getOneDataPanitia($username){
		return $this->db->from('pengguna p')->join('data_panitia dp', 'p.username = dp.username')->where('p.username', $username)->get()->row_array();
	}

	public function cariSiswa(){
		$keyword = $this->input->post('keyword');
		return $this->db->from('siswa')->like('noRegis', $keyword)->or_like('nama', $keyword)->get()->result_array();
	}

	public function kodeProdi(){
		$data = $this->db->select_max('kode')->get('jurusan')->row_array();
		if (is_null($data['kode'])) {
			$kode = "P01";
		} else {
			$id = substr($data['kode'], 2);
			$nomor = (int)$id;
			$nomor += 1;
			$kode = "P" . str_pad($nomor, 2, "0", STR_PAD_LEFT);
		}
		return $kode;
	}

	// public function getMessage($username){
	// 	return $this->db->from('pesan')->where(['pengirim' => $username])->order_by('waktuKirim', 'DESC')->get();
	// }

}
