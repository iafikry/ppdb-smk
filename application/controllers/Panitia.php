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
		}elseif (($this->session->userdata('role') != 'panitia')) {
			$this->session->set_flashdata('login', 'dilarang');
			redirect('welcome/logout');
		}elseif ($this->session->userdata('role') == 'siswa') {
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
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/top-bar', $data);
		$this->load->view('admin/beranda', $data);
		$this->load->view('templates/footer');
	}
	
	public function listCalonSiswa(){

		$data['judul'] = 'List | PPDB';
		$data['alert'] = $this->db->get_where('siswa', ['statusApprove' => 'bt'])->num_rows();
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
		$data['calonSiswa'] = $this->panitia_model->getListSiswaToApprove($limit = $config['per_page'], $data['start']);
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/top-bar', $data);
		$this->load->view('admin/list-konfirmasi', $data);
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
		$data['list'] = $this->db->get_where('siswa', ['statusApprove' => 'y'], $config['per_page'], $data['start'])->result_array();
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

		$this->panitia_model->updateData('siswa', $data = [
			'statusApprove' => $word, 
			'tglApprove' => $waktuKirim], 
			$where = ['username' => $penerima]);
			
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
