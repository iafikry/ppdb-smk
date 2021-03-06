<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Panitia_model', 'panitia_model');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['jurusan'] = $this->panitia_model->getAllData('jurusan');
		$this->load->view('templates/index', $data);
		
	}

	public function auth(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required', [
			'required' => '{field} harus diisi'
		]);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', [
			'required' => '{field} harus diisi'
		]);
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			$this->_login();
		}
	}

	private function _login(){
		$username = $this->input->post('username', true);
		$password = $this->input->post('password');

		$pengguna = $this->db->get_where('pengguna', ['username' => $username])->row_array();
		if ($pengguna) {
			if ($pengguna['password'] == $password) {
				$dataUser = [
					'username' => $pengguna['username'],
					'role' => $pengguna['role']
				];
				$this->session->set_userdata($dataUser);
				
				if ($pengguna['role'] == 'siswa') {
					$cekDaftar = $this->db->get_where('siswa', ['username' => $pengguna['username']])->row_array();
					if ($cekDaftar) {
						if ($cekDaftar['kdJurusan']) {
							$this->session->set_flashdata('welcome', 'masuk');
							redirect('siswa/statusDaftar/' . $cekDaftar['noRegis']);
						} else {
							$this->session->set_flashdata('welcome', 'prodiHilang');
							redirect('siswa/ubahProfil/' . $cekDaftar['noRegis']);
						}
					} else {
						$this->session->set_flashdata('welcome', 'masuk');
						redirect('siswa/daftar');
					}
				} elseif($pengguna['role'] == 'panitia') {
					$this->session->set_flashdata('welcome', 'masuk');
					redirect('panitia');
				}elseif ($pengguna['role'] == 'kepsek') {
					$this->session->set_flashdata('welcome', 'masuk');
					redirect('panitia');
				}				
			} else {
				$this->session->set_flashdata('login', 'salahPassword');
				redirect('welcome/auth');
			}
		} else {
			$this->session->set_flashdata('login', 'userNotFound');
			redirect('welcome/auth');
		}
		
	}
	
	public function registrasi(){

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[15]|is_unique[pengguna.username]', [
			'required' => 'Field ini harus diisi',
			'min_length' => 'Minimal 5 karakter',
			'max_length' => 'Maksimal 15 karakter',
			'is_unique' => '{field} ini telah digunakan'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[6]|max_length[30]|matches[password2]', [
			'required' => '{field} harus diisi',
			'min_length' => '{field} harus minimal 6 karakter',
			'max_length' => '{field} maksimal 30 karakter',
			'matches' => '{field} tidak sama!',
		]);
		$this->form_validation->set_rules('password2', 'Password', 'trim|required', [
			'required' => '{field} harus diisi'
		]);
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('buat-akun');
		} else {
			$this->panitia_model->insertData('pengguna', [
				'username' => $this->input->post('username', true),
				'password' => $this->input->post('password1'),
				'role' => 'siswa'
			]);
			$this->session->set_flashdata('login', 'tersimpan');
			redirect('welcome/auth');
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');
		$this->session->unset_userdata('nama');
		// $this->session->set_flashdata('login', 'keluar');
		redirect('welcome/auth');
	}
}
