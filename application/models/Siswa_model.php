<?php

class Siswa_model extends MY_Model
{
	public function noRegistrasi(){
		$data = $this->db->select_max('noRegis')->get('siswa')->row_array();
		if (is_null($data['noRegis'])) {
			$noRegistrasi = '021916001';
		} else {
			$id = substr($data['noRegis'], 6);
			$nomor = (int)$id;
			$nomor += 1;
			$noRegistrasi = '021916' . str_pad($nomor, 3, "0", STR_PAD_LEFT);
		}
		return $noRegistrasi;
	}

	public function getOneDataSiswa($noRegis){
		return $this->db->select('*')->from('siswa s')->join('tb_ortu o', 's.noRegis = o.noRegis')->where('s.noRegis', $noRegis)->get()->row_array();
	}

	public function getMessage($noRegis){
		return $this->db->from('pesan')->where(['noRegis' => $noRegis])->order_by('waktuKirim', 'DESC')->get()->result_array();
	}

}
