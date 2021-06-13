<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panitia extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Panitia_model', 'panitia_model');
		$this->load->library('form_validation');	
		// cek session
		if ( is_null($this->session->userdata('role'))) {
			$this->session->set_flashdata('login', 'dilarang');
			redirect('welcome/logout');
		}elseif (!$this->session->userdata('role')) {
			$this->session->set_flashdata('login', 'dilarang');
			redirect('welcome/logout');
		}elseif ($this->session->userdata('role') == 'siswa') {
			$this->session->set_flashdata('login', 'dilarang');
			redirect('welcome/logout');
		}elseif (($this->session->userdata('role') != 'panitia') && ($this->session->userdata('role') != 'kepsek')) {
			$this->session->set_flashdata('login', 'dilarang');
			redirect('welcome/logout');
		}
	}

	public function index(){
		$data['judul'] = 'Beranda | PPDB';
		$data['siswaBelumApprove'] = $this->db->get_where('siswa', ['statusApprove' => 'bt']);
		$data['alert'] = $this->db->get_where('siswa', ['statusApprove' => 'bt'])->num_rows();
		$data['totalSiswaDaftar'] = $this->panitia_model->getAllData('siswa');
		$data['totalSiswaApprove'] = $this->db->get_where('siswa', ['statusApprove' => 'y']);
		$data['totalSiswaTdkApprove'] = $this->db->get_where('siswa', ['statusApprove' => 'n']);
		$data['totalSiswaL'] = $this->db->get_where('siswa', ['jnKelamin' => 'L', 'statusApprove' => 'y']);
		$data['totalSiswaP'] = $this->db->get_where('siswa', ['jnKelamin' => 'P', 'statusApprove' => 'y']);
		$data['siswaPerProdi'] = $this->panitia_model->siswaPerProdi();
		$data['prodi'] = $this->panitia_model->getAllData('jurusan');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/top-bar', $data);
		$this->load->view('admin/beranda', $data);
		$this->load->view('templates/footer');
	}
	
	public function listCalonSiswa(){

		$data['judul'] = 'List | PPDB';
		// $data['alert'] = $this->db->get_where('siswa', ['statusApprove' => 'bt'])->num_rows();
		$data['alert'] = $this->panitia_model->getNumRows('siswa', ['statusApprove' => 'bt']);
		// load library pagination
		$this->load->library('pagination');
		
		// set config
		$config['base_url'] = 'http://localhost/ppdb-smk/panitia/listCalonSiswa';
		$config['total_rows'] = $this->db->get_where('siswa', ['statusApprove' => 'bt'])->num_rows();
		$config['per_page'] = 15;
		$config['num_links'] = 3;		
		// styling
		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li">';

		$config['attributes'] = array('class' => 'page-link');
		
		
		$this->pagination->initialize($config);

		
		$data['start'] = $this->uri->segment(3);
		// $data['calonSiswa'] = $this->panitia_model->getListSiswaToApprove($limit = $config['per_page'], $data['start']);
		$data['calonSiswa'] = $this->panitia_model->getListSiswa(['statusApprove' => 'bt'], $config['per_page'], $data['start']);
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/top-bar', $data);
		$this->load->view('admin/list-konfirmasi', $data);
		$this->load->view('templates/footer');
	}

	public function cariSiswa(){
		$data['judul'] = 'List | PPDB';
		$data['alert'] = $this->panitia_model->getNumRows('siswa', ['statusApprove' => 'bt']);
		$data['calonSiswa'] = $this->panitia_model->cariSiswa();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/top-bar', $data);
		$this->load->view('admin/pencarian-siswa', $data);
		$this->load->view('templates/footer');
	}

	public function listSiswaBaru(){
		$data['judul'] = 'List Siswa | PPDB';
		$data['alert'] = $this->db->get_where('siswa', ['statusApprove' => 'bt'])->num_rows();
		// load library pagination
		$this->load->library('pagination');
		
		// set config
		$config['base_url'] = 'http://localhost/ppdb-smk/panitia/listSiswaBaru';
		$config['total_rows'] = $this->db->get_where('siswa', ['statusApprove' => 'y'])->num_rows();
		$config['per_page'] = 15;
		$config['num_links'] = 3;		
		// styling
		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li">';

		$config['attributes'] = array('class' => 'page-link');
		
		
		$this->pagination->initialize($config);

		
		$data['start'] = $this->uri->segment(3);
		// $data['list'] = $this->db->get_where('siswa', ['statusApprove' => 'y'], $config['per_page'], $data['start'])->result_array();
		$data['list'] = $this->panitia_model->getListSiswa(['statusApprove' => 'y'], $config['per_page'], $data['start']);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/top-bar', $data);
		$this->load->view('admin/list-siswa', $data);
		$this->load->view('templates/footer');
	}

	public function detail($noRegis){
		$data['judul'] = 'Detail | PPDB';
		$data['alert'] = $this->db->get_where('siswa', ['statusApprove' => 'bt'])->num_rows();
		$data['jurusan'] = $this->panitia_model->getAllData('jurusan');
		$data['calonSiswa'] = $this->panitia_model->getOneDataSiswa($noRegis);
		if (is_null($data['calonSiswa']['kdJurusan'])) {
			$data['kuotaSiswa'] = 0;
		} else {
			$data['kuotaSiswa'] = $this->panitia_model->getNumRows('siswa', ['kdJurusan' => $data['calonSiswa']['kdJurusan'], 'statusApprove' => 'y']);
		}
		// var_dump($data['kuotaSiswa']); die;
		// var_dump($data['calonSiswa']); die;
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/top-bar', $data);
		$this->load->view('admin/detail-calon-siswa', $data);
		$this->load->view('templates/footer');
	}

	public function konfirm(){
		$pengirim = $this->session->userdata('username');
		$penerima = $this->input->post('penerima');
		if ($_POST['message'] == '') {
			$message = null;
		} else {
			$message = $this->input->post('message', true);
		}
		date_default_timezone_set("Asia/Jakarta");  //untuk mengambil waktu Jakarta
		$waktuKirim = date('Y-m-d H:i:s');
		$word = $this->input->post('word');
		//var_dump($pengirim) . ' ' . var_dump($penerima) . ' '. var_dump($message) . ' ' . var_dump($waktuKirim) . ' ' . var_dump($word); die;  
		$approved = $this->db->get_where('data_panitia', ['username' => $this->session->userdata('username')])->row_array();
		$this->panitia_model->updateData('siswa', $data = [
				'statusApprove' => $word, 
				'tglApprove' => $waktuKirim,
				'approvedBy' => $approved['nip']
		], $where = ['username' => $penerima]);
			
		$this->panitia_model->insertData('pesan', $data = [
			'id' => '',
			'noRegis' => $this->input->post('noRegis'),
			'pengirim' => $pengirim,
			'waktuKirim' => $waktuKirim,
			'message' => $message,
			'statusApprove' => $word,
			'statusBaca' => 'n'
		]);
		redirect('panitia/listCalonSiswa');
	}

	public function cekPassword($str, $username){
		$dataUser = $this->panitia_model->getDataById('pengguna', ['username' => $username]);
		$password = $this->input->post('passLama'); //ambil password lama pada form pengaturan
		if ($password == '') {
			$this->form_validation->set_message('cekPassword', '{field} harus diisi!');
			return false;
		}elseif ($dataUser['password'] == $password) {
			return true;
		} elseif($dataUser['password'] != $password) {
			$this->form_validation->set_message('cekPassword', 'Password tidak sama!');
			return false;
		}
	}

	public function ubahPassword($username){
		$data['judul'] = 'Password | PPDB';
		$data['alert'] = $this->panitia_model->getNumRows('siswa', ['statusApprove' => 'bt']);

		$this->form_validation->set_rules('passLama', 'Field Password', 'callback_cekPassword['.$username.']');
		$this->form_validation->set_rules('passBaru', 'Password Baru', 'trim|required|min_length[6]|max_length[30]|matches[passBaru2]', [
			'required' => '{field} harus diisi!',
			'min_length' => 'Minimal 6 karakter',
			'max_length' => 'Maksimal 30 karakter',
			'matches' => 'Password tidak sama!' 
		]);
		$this->form_validation->set_rules('passBaru2', 'Password Baru', 'trim|required', [
			'required' => '{field} harus diisi!',
		]);
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/top-bar', $data);
			$this->load->view('admin/ubah-password');
			$this->load->view('templates/footer');
		} else {
			$this->panitia_model->updateData('pengguna', [
				'password' => $this->input->post('passBaru')
			], ['username' => $username]);
			$this->session->set_flashdata('welcome', 'update');
			redirect('panitia');
		}
	}

	public function manajemenAdmin(){
		$data['judul'] = 'Pengaturan | PPDB';
		$data['alert'] = $this->panitia_model->getNumRows('siswa', ['statusApprove' => 'bt']);
		$data['pengguna'] = $this->panitia_model->getListPanitia(['role' => 'panitia'], ['role' => 'kepsek']);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/top-bar', $data);
		$this->load->view('admin/manajemen', $data);
		$this->load->view('templates/footer');	
	}

	// ! masukan data diri pada saat baru masuk ke sistem sebagai admin pertama kali
	public function dataDiri($username){
		$this->form_validation->set_rules('nip', 'Field NIP', 'trim|required|is_unique[data_panitia.nip]', [
			'required' => '{field} harus diisi!',
			'is_unique' => 'NIP ini sudah terdaftar'
		]);
		$this->form_validation->set_rules('nama', 'Field Nama', 'trim|required', [
			'required' => '{field} harus diisi!'
		]);

		
		if ($this->form_validation->run() == FALSE) {
			$this->settings($username);
		} else {
			$this->panitia_model->insertData('data_panitia', [
					'username' => $this->input->post('username'),
					'nip' => $this->input->post('nip'),
					'panitia' => $this->input->post('nama'),
				]);
			$this->session->set_flashdata('welcome', 'tersimpan');
			redirect('panitia');
		}
	}

	// *ini dipake pas mau edit data diri (nama)
	public function settings($username){
		$data['judul'] = 'Pengaturan | PPDB';
		$data['alert'] = $this->panitia_model->getNumRows('siswa', ['statusApprove' => 'bt']);
		$data['pengguna'] = $this->panitia_model->getDataById('pengguna', ['username' => $username]);
		$data['dataPanitia'] = $this->panitia_model->getDataById('data_panitia', ['username' => $username]);

		$this->form_validation->set_rules('nip', 'Field NIP', 'trim|required', [
			'required' => '{field} harus diisi!',
			'is_unique' => 'NIP ini sudah terdaftar'
		]);
		$this->form_validation->set_rules('nama', 'Field Nama', 'trim|required', [
			'required' => '{field} harus diisi!'
		]);
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/top-bar', $data);
			$this->load->view('admin/settings', $data);
			$this->load->view('templates/footer');	
		} else {
			$this->panitia_model->updateData('data_panitia', [
				'panitia' => $this->input->post('nama')
			], ['nip' => $this->input->post('nip')]);
			$this->session->set_flashdata('welcome', 'update');
			redirect('panitia');
		}
	}

	// ! cuma super admin yang bisa edit data, kalo admin biasa cuma liat data aja (tanpa password) tanpa bisa edit data
	public function detailPanitia($username){
		$data['judul'] = 'Detail | PPDB';
		$data['alert'] = $this->panitia_model->getNumRows('siswa', ['statusApprove' => 'bt']);
		$data['pengguna'] = $this->panitia_model->getOneDataPanitia($username);

		$this->form_validation->set_rules('nama', 'Field Nama', 'trim|required', [
			'required' => '{field} harus diisi!'
		]);

		$this->form_validation->set_rules('password', 'Password Baru', 'trim|required|min_length[6]|max_length[30]', [
			'required' => '{field} harus diisi!',
			'min_length' => 'Minimal 6 karakter',
			'max_length' => 'Maksimal 30 karakter'
		]);
		
		$this->form_validation->set_rules('role', 'Role', 'trim|required', [
			'required' => 'Field {field} harus diisi!'
		]);
						
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/top-bar', $data);
			$this->load->view('admin/detail-panitia', $data);
			$this->load->view('templates/footer');
		} else {
			
			// ** ubah nama aja */
			$this->panitia_model->updateData('data_panitia', [
				'panitia' => $this->input->post('nama')
			], ['username' => $username]);

			//** ubah password dan role */
			$this->panitia_model->updateData('pengguna', [
				'password' => $this->input->post('password'),
				'role' => $this->input->post('role')
			], ['username' => $username]);

			$this->session->set_flashdata('welcome', 'tersimpan');
			redirect('panitia');
		}
	}

	public function tambahPanitia(){
		$data['judul'] = 'Panitia | PPDB';
		$data['alert'] = $this->panitia_model->getNumRows('siswa', ['statusApprove' => 'bt']);

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[15]|is_unique[pengguna.username]', [
			'required' => '{field} harus diisi!',
			'min_length' => '{field} minimal berisikan 5 karakter',
			'max_length' => '{field} minimal berisikan 15 karakter',
			'is_unique' => '{field} ini sudah digunakan'
		]);

		$this->form_validation->set_rules('nip', 'NIP', 'trim|required|is_unique[data_panitia.nip]', [
			'required' => '{field} harus diisi',
			'is_unique' => '{field} ini sudah terdaftar'
		]);
		
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
			'required' => '{field} harus diisi'
		]);

		$this->form_validation->set_rules('role', 'Role', 'trim|required', [
			'required' => '{field} harus diisi'
		]);

		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[30]|matches[password2]', [
			'required' => '{field} harus diisi',
			'min_length' => '{field} harus minimal 6 karakter',
			'max_length' => '{field} maksimal 30 karakter',
			'matches' => '{field} tidak sama!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'trim|required', [
			'required' => '{field} harus diisi'
		]);
		
				
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/top-bar', $data);
			$this->load->view('admin/tambah-panitia');
			$this->load->view('templates/footer');
		} else {
			$this->panitia_model->insertData('pengguna', [
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'role' => $this->input->post('role'),
			]);

			$this->panitia_model->insertData('data_panitia', [
				'nip' => $this->input->post('nip'),
				'username' => $this->input->post('username'),
				'panitia' => $this->input->post('nama')
			]);
			$this->session->set_flashdata('welcome', 'tersimpan');
			redirect('panitia/manajemenAdmin');
		}	
	}

	public function guide(){
		$data['judul'] = 'Panduan | PPDB';
		$data['alert'] = $this->panitia_model->getNumRows('siswa', ['statusApprove' => 'bt']);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/top-bar', $data);
		$this->load->view('templates/panduan');
		$this->load->view('templates/footer');
	}

	public function hapusPanitia($username){
		if ($username == 'user00') {
			$this->session->set_flashdata('welcome', 'dilarang');
			redirect('panitia/manajemenAdmin');
		} else {
			$this->panitia_model->deleteData('pengguna', ['username' => $username]);
			$this->session->set_flashdata('welcome', 'hapus');
			redirect('panitia/manajemenAdmin');
		}		
	}

	public function ListTdkLolosVerifikasi(){
		if ($this->session->userdata('role') != 'kepsek') {
			redirect('panitia');
		}else{
			$data['judul'] = 'List | PPDB';
		// $data['alert'] = $this->db->get_where('siswa', ['statusApprove' => 'bt'])->num_rows();
		$data['alert'] = $this->panitia_model->getNumRows('siswa', ['statusApprove' => 'bt']);
		// load library pagination
		$this->load->library('pagination');
		
		// set config
		$config['base_url'] = 'http://localhost/ppdb-smk/panitia/listTdkLolosVerifikasi';
		$config['total_rows'] = $this->db->get_where('siswa', ['statusApprove' => 'n'])->num_rows();
		$config['per_page'] = 1;
		$config['num_links'] = 3;		
		// styling
		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li">';

		$config['attributes'] = array('class' => 'page-link');
		
		
		$this->pagination->initialize($config);

		
		$data['start'] = $this->uri->segment(3);
		$data['calonSiswa'] = $this->panitia_model->getListSiswa(['statusApprove' => 'n'], $config['per_page'], $data['start']);
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/top-bar', $data);
		$this->load->view('admin/list-konfirmasi', $data);
		$this->load->view('templates/footer');
		}
	}

	public function prodi(){
		$data['judul'] = 'Prodi | PPDB';
		$data['alert']	= $this->panitia_model->getNumRows('siswa', ['statusApprove' => 'bt']);
		$data['jurusan'] = $this->panitia_model->getAllData('jurusan');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/top-bar', $data);
		$this->load->view('admin/prodi');
		$this->load->view('templates/footer');
	}

	public function tambahProdi(){
		$data['kode'] = $this->panitia_model->kodeProdi();
		$data['judul'] = 'Prodi | PPDB';
		$data['alert'] = $this->panitia_model->getNumRows('siswa', ['statusApprove' => 'bt']);
		$this->form_validation->set_rules('nama', 'Field ini', 'trim|required', [
			'required' => '{field} tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('kuota', 'Field ini', 'trim|required|numeric|integer|greater_than[0]', [
			'required' => '{field} tidak boleh kosong!',
			'greater_than' => 'Tidak boleh kurang/sama dengan 0',
			'numeric' => 'Yang Anda masukan bukan angka',
			'integer' => 'Tidak boleh pecahan'
		]);
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/top-bar', $data);
			$this->load->view('admin/tambah-prodi', $data);
			$this->load->view('templates/footer');
		} else {
			$this->panitia_model->insertData('jurusan', [
				'kode' => $this->input->post('kode'),
				'jurusan' => $this->input->post('nama'),
				'kuota' => $this->input->post('kuota')
			]);
			$this->session->set_flashdata('msg', 'tersimpan');
			redirect('panitia/prodi');
		}
		
	}

	public function ubahProdi($kode){
		$data['judul'] = 'Prodi | PPDB';
		$data['prodi'] = $this->panitia_model->getDataById('jurusan', ['kode' => $kode]);
		$data['alert'] = $this->panitia_model->getNumRows('siswa', ['statusApprove' => 'bt']);
		$this->form_validation->set_rules('nama', 'Field ini', 'trim|required', [
			'required' => '{field} tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('kuota', 'Field ini', 'trim|required|numeric|integer|greater_than[0]', [
			'required' => '{field} tidak boleh kosong!',
			'greater_than' => 'Tidak boleh kurang/sama dengan 0',
			'numeric' => 'Yang Anda masukan bukan angka',
			'integer' => 'Tidak boleh pecahan'
		]);
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/top-bar', $data);
			$this->load->view('admin/ubah-prodi', $data);
			$this->load->view('templates/footer');
		} else {
			$this->panitia_model->updateData('jurusan', [
				'jurusan' => $this->input->post('nama'),
				'kuota' => $this->input->post('kuota')
			], ['kode' => $kode]);
			$this->session->set_flashdata('msg', 'update');
			redirect('panitia/prodi');
		}
	}

	public function unduhSuratLulus($noRegis){
		// Create an instance of the class:
		$mpdf = new \Mpdf\Mpdf(['format' => 'A4']);
		$data['siswa'] = $this->panitia_model->getOneDataSiswa($noRegis);
		$data['kepsek'] = $this->db->get_where('data_panitia', ['username' => 'kepsek'])->row_array();
		$laman = $this->load->view('admin/surat-lulus', $data, true);
		// Write some HTML code:
		$mpdf->WriteHTML($laman);
		// Output a PDF file directly to the browser
		$mpdf->Output('surat_lulus_'.$data['siswa']['noRegis'].'_'.$data['siswa']['nama'].'.pdf', 'D');
	}

	// public function pesan($username){
	// 	$data['judul'] = 'Pesan | PPDB';
	// 	$data['siswa'] = $this->panitia_model->getAllData('siswa');
	// 	$data['siswaBelumApprove'] = $this->db->get_where('siswa', ['statusApprove' => 'bt']);
	// 	$data['pesan'] = $this->panitia_model->getMessage($username);
	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/sidebar', $data);
	// 	$this->load->view('templates/top-bar', $data);
	// 	$this->load->view('admin/pesan-admin', $data);
	// 	$this->load->view('templates/footer');
	// }
}
