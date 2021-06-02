<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Siswa_model', 'siswa_model');
		$this->load->library('form_validation');

		// cek session
		if ( is_null($this->session->userdata('role'))) {
			$this->session->set_flashdata('login', 'dilarang');
			redirect('welcome/logout');
		}elseif (!$this->session->userdata('role')) {
			$this->session->set_flashdata('login', 'dilarang');
			redirect('welcome/logout');
		}elseif ($this->session->userdata('role') != 'siswa') {
			$this->session->set_flashdata('login', 'dilarang');
			redirect('welcome/logout');
		}
		
	}

	public function index(){
		$data['judul'] = 'Pesan | PPDB';
		$data['cekUser'] = $this->siswa_model->getDataById('siswa', ['username' => $this->session->userdata('username')]);
		if (is_null($data['cekUser'])) {
			$data['alert'] = 0;
		} else {
			$data['alert'] = $this->db->get_where('pesan', ['noRegis' => $data['cekUser']['noRegis'], 'statusBaca' => 'n'])->num_rows();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/top-bar');
		$this->load->view('siswa/beranda-siswa', $data);
		$this->load->view('templates/footer');
	}

	public function daftar(){
		$data['cekUser'] = $this->siswa_model->getDataById('siswa', ['username' => $this->session->userdata('username')]);
		// var_dump($data['cekUser']); die;
		if (is_null($data['cekUser'])) {
			$data['alert'] = 0;
		} else {
			$data['alert'] = $this->db->get_where('pesan', ['noRegis' => $data['cekUser']['noRegis'], 'statusBaca' => 'n'])->num_rows();
		}
		// $data['alert'] = $this->db->get_where('pesan', ['noRegis' => $data['cekUser']['noRegis'], 'statusBaca' => 'n']);
		
		if ($data['cekUser']) {
			redirect('siswa/statusDaftar/' . $data['cekUser']['noRegis']);

		} else {
			$data['judul'] = 'PPDB';
			$data['jurusan'] = $this->siswa_model->getAllData('jurusan');
			$data['noRegis'] = $this->siswa_model->noRegistrasi();
			
			$this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('jnKelamin', 'Jenis Kelamin', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('nisn', 'NISN', 'trim|required|numeric', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisi oleh angka'
			]);
			$this->form_validation->set_rules('tmLahir', 'Tempat Lahir', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('tgLahir', 'Tangal Lahir', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('agama', 'Agama', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
	
			// file
			$this->form_validation->set_rules('pasFoto', 'Pas Foto', 'callback_cekFoto');
			$this->form_validation->set_rules('fileIjazah', 'Ijazah', 'callback_cekFileIjazah');
			$this->form_validation->set_rules('fileAkte', 'Akte', 'callback_cekFileAkte');
			$this->form_validation->set_rules('fileKK', 'KK', 'callback_cekFileKK');
			$this->form_validation->set_rules('fileTambahan', '', 'callback_cekFileTambahan');
			$this->form_validation->set_rules('fileSKKB', '', 'callback_cekFileSKKB');
			$this->form_validation->set_rules('fileSuketSehat', '', 'callback_cekFileSuketSehat');
	
	
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('rt', 'RT', 'trim|required|numeric|max_length[3]', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisikan oleh angka',
				'max_length' => 'Maksimal 3 digit'
			]);
			$this->form_validation->set_rules('rw', 'RW', 'trim|required|numeric|max_length[3]', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisikan oleh angka',
				'max_length' => 'Maksimal 3 digit'
			]);
			$this->form_validation->set_rules('desa', 'Desa', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('pos', 'Kode Pos', 'trim|numeric|max_length[5]|required', [
				'numeric' => 'Field ini hanya bisa diisi oleh angka',
				'required' => 'Field ini harus diisi',
				'max_length' => 'Maksimal 5 digit'
			]);
			$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('kab', 'Kabupaten', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('prov', 'Provinsi', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('noTlp', 'No Telp', 'trim|required|numeric|max_length[13]', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisi oleh angka',
				'max_length' => 'Maksimal 13 digit'
			]);
			$this->form_validation->set_rules('asalSMP', 'Asal SMP', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('thnLulusSMP', 'Tahun Lulus SMP', 'trim|required|numeric|max_length[4]', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisikan oleh angka',
				'max_length' => 'Maksimal 4 digit angka'
			]);
			$this->form_validation->set_rules('noPesertaUn', 'No Peserta UN', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('alamatSmp', 'Alamat SMP', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
	
			// data ortu
			$this->form_validation->set_rules('namaAyah', 'Nama Ayah', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('namaIbu', 'Nama Ibu', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('alamatOrtu', 'Alamat', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('rtOrtu', 'RT', 'trim|required|numeric|max_length[3]', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisikan oleh angka',
				'max_length' => 'Maksimal 3 digit'
			]);
			$this->form_validation->set_rules('rwOrtu', 'RW', 'trim|required|numeric|max_length[3]', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisikan oleh angka',
				'max_length' => 'Maksimal 3 digit'
			]);
			$this->form_validation->set_rules('desaOrtu', 'Desa', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('posOrtu', 'Kode POS', 'trim|required|numeric|max_length[5]', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisikan oleh angka',
				'max_length' => 'Maksimal 5 digit'
			]);
			$this->form_validation->set_rules('kecamatanOrtu', 'Kecamatan', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('kabOrtu', 'Kabupaten', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('provOrtu', 'Provinsi', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('noTlpOrtu', 'No Telp', 'trim|required|numeric|max_length[13]', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisi oleh angka',
				'max_length' => 'Maksimal 13 digit'
			]);
			$this->form_validation->set_rules('checkOrtu', 'Check', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
	
	
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/top-bar');
				$this->load->view('siswa/daftar', $data);
				$this->load->view('templates/footer');
	
			} else {
				$config['upload_path']          = './assets/upload/';
				$config['file_ext_tolower']		= true;
				$config['allowed_types']        = 'jpg|png|jpeg|pdf';
				$config['max_size']             = 2048; //2048 KB = 2 MB
				$config['max_filename']			= 100;
				$config['encrypt_name']			= true;
	
				$this->load->library('upload', $config);
	
				if ($this->upload->do_upload('pasFoto'))
				{
					//upload foto
					$dataPasFoto =  $this->upload->data();
					$uploadPasFoto =$dataPasFoto['file_name'];
					// var_dump($uploadPasFoto); die;
				}
				else
				{
					$data['errorPasFoto'] = $this->upload->display_errors('<p class="text-danger">', '</p>');
					$this->load->view('templates/header', $data);
					$this->load->view('templates/sidebar', $data);
					$this->load->view('templates/top-bar');
					$this->load->view('siswa/daftar', $data);
					$this->load->view('templates/footer');
				 }
	
	
				//file ijazah
				if ($this->upload->do_upload('fileIjazah')) {
					$dataFileIjazah = $this->upload->data();
					$uploadFileIjazah = $dataFileIjazah['file_name'];
					//var_dump($uploadFileIjazah); die;
				} else {
					$data['errorFileIjazah'] = $this->upload->display_errors();
					$this->load->view('templates/header', $data);
					$this->load->view('templates/sidebar', $data);
					$this->load->view('templates/top-bar');
					$this->load->view('siswa/daftar', $data);
					$this->load->view('templates/footer');
				}	
		
	
				//file akte
				if ($this->upload->do_upload('fileAkte')) {
					$dataFileAkte = $this->upload->data();
					$uploadFileAkte = $dataFileAkte['file_name'];
					// var_dump($uploadFileAkte);
				} else {
					$data['errorFileAkte'] = $this->upload->display_errors();
					$this->load->view('templates/header', $data);
					$this->load->view('templates/sidebar', $data);
					$this->load->view('templates/top-bar');
					$this->load->view('siswa/daftar', $data);
					$this->load->view('templates/footer');
				}
	
				//file kk
				if ($this->upload->do_upload('fileKK')) {
					$dataFileKK = $this->upload->data();
					$uploadFileKK = $dataFileKK['file_name'];
					// var_dump($uploadFileKK); die;
				} else {
					$data['errorFileKK'] = $this->upload->display_errors();
					$this->load->view('templates/header', $data);
					$this->load->view('templates/sidebar', $data);
					$this->load->view('templates/top-bar');
					$this->load->view('siswa/daftar', $data);
					$this->load->view('templates/footer');
				}
	
				//file tambahan
				if ($_FILES['fileTambahan']['error'] === 4) {
					$uploadFileTambahan = null;
				} else {
					if ($this->upload->do_upload('fileTambahan')) {
						$dataFileTambahan = $this->upload->data();
						$uploadFileTambahan = $dataFileTambahan['file_name'];
						// var_dump($uploadFileKK); die;
					} else {
						$data['errorFileTambahan'] = $this->upload->display_errors();
						$this->load->view('templates/header', $data);
						$this->load->view('templates/sidebar', $data);
						$this->load->view('templates/top-bar');
						$this->load->view('siswa/daftar', $data);
						$this->load->view('templates/footer');
					}
				}
				
				//file SKKB
				if ($_FILES['fileSKKB']['error'] === 4) {
					$uploadFileSKKB = null;
				} else {
					if ($this->upload->do_upload('fileSKKB')) {
						$dataFileSKKB = $this->upload->data();
						$uploadFileSKKB = $dataFileSKKB['file_name'];
						// var_dump($uploadFileKK); die;
					} else {
						$data['errorFileSKKB'] = $this->upload->display_errors();
						$this->load->view('templates/header', $data);
						$this->load->view('templates/sidebar', $data);
						$this->load->view('templates/top-bar');
						$this->load->view('siswa/daftar', $data);
						$this->load->view('templates/footer');
					}
				}
	
				//file Suket sehat
				if ($_FILES['fileSuketSehat']['error'] === 4) {
					$uploadFileSuketSehat = null;
				} else {
					if ($this->upload->do_upload('fileSuketSehat')) {
						$dataFileSuketSehat = $this->upload->data();
						$uploadFileSuketSehat = $dataFileSuketSehat['file_name'];
						// var_dump($uploadFileKK); die;
					} else {
						$data['errorFileSuketSehat'] = $this->upload->display_errors();
						$this->load->view('templates/header', $data);
						$this->load->view('templates/sidebar', $data);
						$this->load->view('templates/top-bar');
						$this->load->view('siswa/daftar', $data);
						$this->load->view('templates/footer');
					}
				}

				date_default_timezone_set("Asia/Jakarta");  //untuk mengambil waktu Jakarta
				$tglRegis = date('Y-m-d H:i:s');
	
				//insert data siswa
				$this->siswa_model->insertData('siswa', $data = [
					'noRegis' => $this->input->post('noRegis', true),
					'tglRegis' => $tglRegis,
					'TA' => $this->input->post('TA'),
					'username' => $this->input->post('username', true),
					'jurusan' => $this->input->post('jurusan'),
					'nama' => $this->input->post('nama', true),
					'jnKelamin' => $this->input->post('jnKelamin', true),
					'nisn' => $this->input->post('nisn', true),
					'tmLahir' => $this->input->post('tmLahir', true),
					'tgLahir' => $this->input->post('tgLahir', true),
					'agama' => $this->input->post('agama', true),
					'alamat' => $this->input->post('alamat', true),
					'rt' => $this->input->post('rt', true),
					'rw' => $this->input->post('rw', true),
					'desa' => $this->input->post('desa', true),
					'pos' => $this->input->post('pos', true),
					'kecamatan' => $this->input->post('kecamatan', true),
					'kab' => $this->input->post('kab', true),
					'prov' => $this->input->post('prov', true),
					'noTlp' => $this->input->post('noTlp', true),
					'asalSMP' => $this->input->post('asalSMP', true),
					'thnLulusSMP' => $this->input->post('thnLulusSMP', true),
					'noPesertaUn' => $this->input->post('noPesertaUn', true),
					'alamatSmp' => $this->input->post('alamatSmp', true),
					'alamatSmp' => $this->input->post('alamatSmp', true),
					'pasFoto' => $uploadPasFoto,
					'fileIjazah' => $uploadFileIjazah,
					'fileAkte' => $uploadFileAkte,
					'fileKK' => $uploadFileKK,
					'fileTambahan' => $uploadFileTambahan,
					'fileSKKB' => $uploadFileSKKB,
					'fileSuketSehat' => $uploadFileSuketSehat,
					'checkOrtu' => $this->input->post('checkOrtu', true),
					'statusApprove' => 'bt',
					'tglApprove' => null
				]);
	
				if ($_POST['namaWali'] === '') {
					$wali = null;
				} else {
					$wali = $this->input->post('namaWali', true);
				}
	
				//insert data orang tua siswa
				$this->siswa_model->insertData('tb_ortu', $data = [
					'id' => '',
					'noRegis' => $this->input->post('noRegis', true),
					'namaAyah' => $this->input->post('namaAyah', true),
					'namaIbu' => $this->input->post('namaIbu', true),
					'namaWali' => $wali,
					'alamatOrtu' => $this->input->post('alamatOrtu', true),
					'rtOrtu' => $this->input->post('rtOrtu', true),
					'rwOrtu' => $this->input->post('rwOrtu', true),
					'desaOrtu' => $this->input->post('desaOrtu', true),
					'posOrtu' => $this->input->post('posOrtu', true),
					'kecamatanOrtu' => $this->input->post('kecamatanOrtu', true),
					'kabOrtu' => $this->input->post('kabOrtu', true),
					'provOrtu' => $this->input->post('provOrtu', true),
					'noTlpOrtu' => $this->input->post('noTlpOrtu', true)
				]);
	
				$noRegis = $this->input->post('noRegis');
				$this->session->set_flashdata('welcome', 'tersimpan');
				redirect('siswa/statusDaftar/' . $noRegis);
			}

		}
	}

	public function cekFoto($str, $noRegis){
		$allowed_mime_type = ['image/png','image/jpg','image/jpeg'];
		$mime = get_mime_by_extension($_FILES['pasFoto']['name']);
		$cekBerkas = $this->siswa_model->getDataById('siswa', ['noRegis' => $noRegis]);
		// var_dump($cekBerkas); die;
		if ($_FILES['pasFoto']['error'] === 4) {
			//jika tidak ada gambar baru yang di-upload, cek apakah di database ada gambar lama atau tidak
			if (isset($cekBerkas['pasFoto'])) {
				return true;
			} else {
				$this->form_validation->set_message('cekFoto', 'Anda belum memilih file');
				return false;
			}
		} else {
			if (in_array($mime, $allowed_mime_type)) {
				//jika file lebih dari 2 MB, 2 MB in base 2048000, 2MB in KB = 2048 
				if ($_FILES['pasFoto']['size'] > 2048000) {
					$this->form_validation->set_message('cekFoto', 'File lebih dari 2 MB');
					return false;
				} else {
					return true;
				}
			}else{
				$this->form_validation->set_message('cekFoto', 'Maaf yang anda unggah bukan gambar');
				return false;
			}
		}
	}

	public function cekFileIjazah($str, $noRegis){
		$allowed_mime_type = ['application/pdf'];
		$mime = get_mime_by_extension($_FILES['fileIjazah']['name']);
		$cekBerkas = $this->siswa_model->getDataById('siswa', ['noRegis' => $noRegis]);
		if ($_FILES['fileIjazah']['error'] === 4) {
			//jika tidak ada gambar baru yang di-upload, cek apakah di database ada gambar lama atau tidak
			if (isset($cekBerkas['fileIjazah'])) {
				return true;
			} else {
				$this->form_validation->set_message('cekFileIjazah', 'Anda belum memilih file');
				return false;
			}
		} else {
			if (in_array($mime, $allowed_mime_type)) {
				if ($_FILES['fileIjazah']['size'] > 2048000) {
					$this->form_validation->set_message('cekFileIjazah', 'File lebih dari 2 MB');
					return false;
				} else {
					return true;
				}
			} else {
				$this->form_validation->set_message('cekFileIjazah', 'Maaf yang anda unggah bukan file PDF');
				return false;
			}
		}
	}

	public function cekFileAkte($str, $noRegis){
		$allowed_mime_type = ['application/pdf'];
		$mime = get_mime_by_extension($_FILES['fileAkte']['name']);
		$cekBerkas = $this->siswa_model->getDataById('siswa', ['noRegis' => $noRegis]);
		if ($_FILES['fileAkte']['error'] === 4) {
			//jika tidak ada gambar baru yang di-upload, cek apakah di database ada gambar lama atau tidak
			if (isset($cekBerkas['fileAkte'])) {
				return true;
			} else {
				$this->form_validation->set_message('cekFileAkte', 'Anda belum memilih file');
				return false;
			}
		} else {
			if (in_array($mime, $allowed_mime_type)) {
				if ($_FILES['fileAkte']['size'] > 2048000) {
					$this->form_validation->set_message('cekFileAkte', 'File lebih dari 2 MB');
					return false;
				} else {
					return true;
				}
			} else {
				$this->form_validation->set_message('cekFileAkte', 'Maaf yang anda unggah bukan file PDF');
				return false;
			}
		}
	}

	public function cekFileKK($str, $noRegis){
		$allowed_mime_type = ['application/pdf'];
		$mime = get_mime_by_extension($_FILES['fileKK']['name']);
		$cekBerkas = $this->siswa_model->getDataById('siswa', ['noRegis' => $noRegis]);
		if ($_FILES['fileKK']['error'] === 4) {
			//jika tidak ada gambar baru yang di-upload, cek apakah di database ada gambar lama atau tidak
			if (isset($cekBerkas['fileKK'])) {
				return true;
			} else {
				$this->form_validation->set_message('cekFileKK', 'Anda belum memilih file');
				return false;
			}
		} else {
			if (in_array($mime, $allowed_mime_type)) {
				if ($_FILES['fileKK']['size'] > 2048000) {
					$this->form_validation->set_message('cekFileKK', 'File lebih dari 2 MB');
					return false;
				} else {
					return true;
				}
			} else {
				$this->form_validation->set_message('cekFileKK', 'Maaf yang anda unggah bukan file PDF');
				return false;
			}
		}
	}

	public function cekFileTambahan($str, $noRegis){
		$allowed_mime_type = ['application/pdf'];
		$mime = get_mime_by_extension($_FILES['fileTambahan']['name']);
		$cekBerkas = $this->siswa_model->getDataById('siswa', ['noRegis' => $noRegis]);
		if ($_FILES['fileTambahan']['error'] === 4) {
			//jika tidak ada gambar baru yang di-upload, cek apakah di database ada gambar lama atau tidak
			if (isset($cekBerkas['fileTambahan'])) {
				return true;
			} else {
				return true;
			}
		} else {
			if (in_array($mime, $allowed_mime_type)) {
				if ($_FILES['fileTambahan']['size'] > 2048000) {
					$this->form_validation->set_message('cekFileTambahan', 'File lebih dari 2 MB');
					return false;
				} else {
					return true;
				}
			} else {
				$this->form_validation->set_message('cekFileTambahan', 'Maaf yang anda unggah bukan file PDF');
				return false;
			}
		}
	}

	public function cekFileSKKB($str, $noRegis){
		$allowed_mime_type = ['application/pdf'];
		$mime = get_mime_by_extension($_FILES['fileSKKB']['name']);
		$cekBerkas = $this->siswa_model->getDataById('siswa', ['noRegis' => $noRegis]);
		if ($_FILES['fileSKKB']['error'] === 4) {
			//jika tidak ada gambar baru yang di-upload, cek apakah di database ada gambar lama atau tidak
			if (isset($cekBerkas['fileSKKB'])) {
				return true;
			} else {
				return true;
			}
		} else {
			if (in_array($mime, $allowed_mime_type)) {
				if ($_FILES['fileSKKB']['size'] > 2048000) {
					$this->form_validation->set_message('cekFileSKKB', 'File lebih dari 2 MB');
					return false;
				} else {
					return true;
				}
			} else {
				$this->form_validation->set_message('cekFileSKKB', 'Maaf yang anda unggah bukan file PDF');
				return false;
			}
		}
	}
	
	public function cekFileSuketSehat($str, $noRegis){
		$allowed_mime_type = ['application/pdf'];
		$mime = get_mime_by_extension($_FILES['fileSuketSehat']['name']);
		$cekBerkas = $this->siswa_model->getDataById('siswa', ['noRegis' => $noRegis]);
		if ($_FILES['fileSuketSehat']['error'] === 4) {
			//jika tidak ada gambar baru yang di-upload, cek apakah di database ada gambar lama atau tidak
			if (isset($cekBerkas['fileSuketSehat'])) {
				return true;
			} else {
				return true;
			}
		} else {
			if (in_array($mime, $allowed_mime_type)) {
				if ($_FILES['fileSuketSehat']['size'] > 2048000) {
					$this->form_validation->set_message('cekFileSuketSehat', 'File lebih dari 2 MB');
					return false;
				} else {
					return true;
				}
			} else {
				$this->form_validation->set_message('cekFileSuketSehat', 'Maaf yang anda unggah bukan file PDF');
				return false;
			}
		}
	}

	public function profil($username, $noRegis){
		$data['cekUser'] = $this->siswa_model->getDataById('siswa', ['username' => $username]);
		$data['alert'] = $this->db->get_where('pesan', ['noRegis' => $noRegis, 'statusBaca' => 'n'])->num_rows();
		if ($data['cekUser']) {
			$data['judul'] = 'Profil | PPDB';
			$data['jurusan'] = $this->siswa_model->getAllData('jurusan');
			$data['calonSiswa'] = $this->siswa_model->getOneDataSiswa($noRegis);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/top-bar');
			$this->load->view('siswa/profil', $data);
			$this->load->view('templates/footer');
		} else {
			redirect('siswa/daftar');
		}
	}

	public function ubahProfil($noRegis){
		$data['judul'] = 'Profil | PPDB';
		$data['jurusan'] = $this->siswa_model->getAllData('jurusan');
		$data['calonSiswa'] = $this->siswa_model->getOneDataSiswa($noRegis);
		$data['cekUser'] = $this->siswa_model->getDataById('siswa', ['username' => $this->session->userdata('username')]);
		$data['alert'] = $this->db->get_where('pesan', ['noRegis' => $noRegis, 'statusBaca' => 'n'])->num_rows();

		$this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('jnKelamin', 'Jenis Kelamin', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('nisn', 'NISN', 'trim|required|numeric', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisi oleh angka'
			]);
			$this->form_validation->set_rules('tmLahir', 'Tempat Lahir', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('tgLahir', 'Tangal Lahir', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('agama', 'Agama', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
	
			// file
			$this->form_validation->set_rules('pasFoto', 'Pas Foto', 'callback_cekFoto['.$noRegis.']');
			$this->form_validation->set_rules('fileIjazah', 'Ijazah', 'callback_cekFileIjazah['.$noRegis.']');
			$this->form_validation->set_rules('fileAkte', 'Akte', 'callback_cekFileAkte['.$noRegis.']');
			$this->form_validation->set_rules('fileKK', 'KK', 'callback_cekFileKK['.$noRegis.']');
			$this->form_validation->set_rules('fileTambahan', '', 'callback_cekFileTambahan['.$noRegis.']');
			$this->form_validation->set_rules('fileSKKB', '', 'callback_cekFileSKKB['.$noRegis.']');
			$this->form_validation->set_rules('fileSuketSehat', '', 'callback_cekFileSuketSehat['.$noRegis.']');
	
	
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('rt', 'RT', 'trim|required|numeric|max_length[3]', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisikan oleh angka',
				'max_length' => 'Maksimal 3 digit'
			]);
			$this->form_validation->set_rules('rw', 'RW', 'trim|required|numeric|max_length[3]', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisikan oleh angka',
				'max_length' => 'Maksimal 3 digit'
			]);
			$this->form_validation->set_rules('desa', 'Desa', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('pos', 'Kode Pos', 'trim|numeric|max_length[5]|required', [
				'numeric' => 'Field ini hanya bisa diisi oleh angka',
				'required' => 'Field ini harus diisi',
				'max_length' => 'Maksimal 5 digit'
			]);
			$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('kab', 'Kabupaten', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('prov', 'Provinsi', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('noTlp', 'No Telp', 'trim|required|numeric|max_length[13]', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisi oleh angka',
				'max_length' => 'Maksimal 13 digit'
			]);
			$this->form_validation->set_rules('asalSMP', 'Asal SMP', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('thnLulusSMP', 'Tahun Lulus SMP', 'trim|required|numeric|max_length[4]', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisikan oleh angka',
				'max_length' => 'Maksimal 4 digit angka'
			]);
			$this->form_validation->set_rules('noPesertaUn', 'No Peserta UN', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('alamatSmp', 'Alamat SMP', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
	
			// data ortu
			$this->form_validation->set_rules('namaAyah', 'Nama Ayah', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('namaIbu', 'Nama Ibu', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('alamatOrtu', 'Alamat', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('rtOrtu', 'RT', 'trim|required|numeric|max_length[3]', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisikan oleh angka',
				'max_length' => 'Maksimal 3 digit'
			]);
			$this->form_validation->set_rules('rwOrtu', 'RW', 'trim|required|numeric|max_length[3]', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisikan oleh angka',
				'max_length' => 'Maksimal 3 digit'
			]);
			$this->form_validation->set_rules('desaOrtu', 'Desa', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('posOrtu', 'Kode POS', 'trim|required|numeric|max_length[5]', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisikan oleh angka',
				'max_length' => 'Maksimal 5 digit'
			]);
			$this->form_validation->set_rules('kecamatanOrtu', 'Kecamatan', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('kabOrtu', 'Kabupaten', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('provOrtu', 'Provinsi', 'trim|required', [
				'required' => 'Field ini harus diisi'
			]);
			$this->form_validation->set_rules('noTlpOrtu', 'No Telp', 'trim|required|numeric|max_length[13]', [
				'required' => 'Field ini harus diisi',
				'numeric' => 'Field ini hanya bisa diisi oleh angka',
				'max_length' => 'Maksimal 13 digit'
			]);

		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/top-bar', $data);
			$this->load->view('siswa/ubah-data-diri', $data);
			$this->load->view('templates/footer');
		} else {
			// var_dump($_POST); die;
				$config['upload_path']          = './assets/upload/';
				$config['file_ext_tolower']		= true;
				$config['allowed_types']        = 'jpg|png|jpeg|pdf';
				$config['max_size']             = 2048; //2048 KB = 2 MB
				$config['max_filename']			= 100;
				$config['encrypt_name']			= true;
				$this->load->library('upload', $config);

				//cek apakah user mengupload file baru
				if ($_FILES['pasFoto']['error'] == 4) {
					$uploadPasFoto = $this->input->post('pasFotoLama');
				} else {
					if ($this->upload->do_upload('pasFoto'))
					{
						//upload foto
						$dataPasFoto =  $this->upload->data();
						$uploadPasFoto =$dataPasFoto['file_name'];
						// var_dump($uploadPasFoto); die;
						$link = base_url();
						unlink('./assets/upload/'.$this->input->post('pasFotoLama'));
					}
					else
					{
						$data['errorPasFoto'] = $this->upload->display_errors('<p class="text-danger">', '</p>');
						$this->load->view('templates/header', $data);
						$this->load->view('templates/sidebar', $data);
						$this->load->view('templates/top-bar', $data);
						$this->load->view('siswa/ubah-data-diri', $data);
						$this->load->view('templates/footer');
					 }
				}
					
				//file ijazah
				// cek apakah user upload file baru
				if ($_FILES['fileIjazah']['error'] == 4) {
					$uploadFileIjazah = $this->input->post('fileIjazahLama');
				} else {
					if ($this->upload->do_upload('fileIjazah')) {
						$dataFileIjazah = $this->upload->data();
						$uploadFileIjazah = $dataFileIjazah['file_name'];
						unlink('./assets/upload/'. $this->input->post('fileIjazahLama'));
						//var_dump($uploadFileIjazah); die;
					} else {
						$data['errorFileIjazah'] = $this->upload->display_errors();
						$this->load->view('templates/header', $data);
						$this->load->view('templates/sidebar', $data);
						$this->load->view('templates/top-bar', $data);
						$this->load->view('siswa/ubah-data-diri', $data);
						$this->load->view('templates/footer');
					}	
				}
				
				//file akte
				// cek apakah user upload file baru
				if ($_FILES['fileAkte']['error'] == 4) {
					$uploadFileAkte = $this->input->post('fileAkteLama');
				} else {
					if ($this->upload->do_upload('fileAkte')) {
						$dataFileAkte = $this->upload->data();
						$uploadFileAkte = $dataFileAkte['file_name'];
						unlink('./assets/upload/'. $this->input->post('fileAkteLama'));
						// var_dump($uploadFileAkte);
					} else {
						$data['errorFileAkte'] = $this->upload->display_errors();
						$this->load->view('templates/header', $data);
						$this->load->view('templates/sidebar', $data);
						$this->load->view('templates/top-bar', $data);
						$this->load->view('siswa/ubah-data-diri', $data);
						$this->load->view('templates/footer');
					}
				}
					
				//file kk
				// cek apakah user upload file baru
				if ($_FILES['fileKK']['error'] == 4) {
					$uploadFileKK = $this->input->post('fileKKLama');
				} else {
					if ($this->upload->do_upload('fileKK')) {
						$dataFileKK = $this->upload->data();
						$uploadFileKK = $dataFileKK['file_name'];
						unlink('./assets/upload/'. $this->input->post('fileKKLama'));
						// var_dump($uploadFileKK); die;
					} else {
						$data['errorFileKK'] = $this->upload->display_errors();
						$this->load->view('templates/header', $data);
						$this->load->view('templates/sidebar', $data);
						$this->load->view('templates/top-bar', $data);
						$this->load->view('siswa/ubah-data-diri', $data);
						$this->load->view('templates/footer');
					}
				}
					
				//file tambahan
				// cek apakah user upload file baru
				if ($_FILES['fileTambahan']['error'] === 4) {
					if ( ($_POST['fileTambahanLama'] == null) || ($_POST['fileTambahanLama'] === '') ) {
						$uploadFileTambahan = null;
					} else {
						$uploadFileTambahan = $this->input->post('fileTambahanLama');
					}
				} else {
					if ($this->upload->do_upload('fileTambahan')) {
						$dataFileTambahan = $this->upload->data();
						$uploadFileTambahan = $dataFileTambahan['file_name'];
						// var_dump($uploadFileKK); die;
						unlink('./assets/upload/'. $this->input->post('fileTambahanLama'));
					} else {
						$data['errorFileTambahan'] = $this->upload->display_errors();
						$this->load->view('templates/header', $data);
						$this->load->view('templates/sidebar', $data);
						$this->load->view('templates/top-bar', $data);
						$this->load->view('siswa/ubah-data-diri', $data);
						$this->load->view('templates/footer');
					}
				}
				
				//file SKKB
				// cek apakah user upload file baru
				if ($_FILES['fileSKKB']['error'] === 4) {
					if ( ($_POST['fileSKKBLama'] == null) || ($_POST['fileSKKBLama'] === '') ) {
						$uploadFileSKKB = null;
					} else {
						$uploadFileSKKB = $this->input->post('fileSKKBLama');
					}
				} else {
					if ($this->upload->do_upload('fileSKKB')) {
						$dataFileSKKB = $this->upload->data();
						$uploadFileSKKB = $dataFileSKKB['file_name'];
						unlink('./assets/upload/'. $this->input->post('fileSKKBLama'));
						// var_dump($uploadFileKK); die;
					} else {
						$data['errorFileSKKB'] = $this->upload->display_errors();
						$this->load->view('templates/header', $data);
						$this->load->view('templates/sidebar', $data);
						$this->load->view('templates/top-bar', $data);
						$this->load->view('siswa/ubah-data-diri', $data);
						$this->load->view('templates/footer');
					}
				}
	
				//file Suket sehat
				// cek apakah user upload file baru
				if ($_FILES['fileSuketSehat']['error'] === 4) {
					if ( ($_POST['fileSuketSehatLama'] == null) || ($_POST['fileSuketSehatLama'] === '') ) {
						$uploadFileSuketSehat = null;
					} else {
						$uploadFileSuketSehat = $this->input->post('fileSuketSehatLama');
					}
				} else {
					if ($this->upload->do_upload('fileSuketSehat')) {
						$dataFileSuketSehat = $this->upload->data();
						$uploadFileSuketSehat = $dataFileSuketSehat['file_name'];
						unlink('./assets/upload/'. $this->input->post('fileSuketSehatLama'));
						// var_dump($uploadFileKK); die;
					} else {
						$data['errorFileSuketSehat'] = $this->upload->display_errors();
						$this->load->view('templates/header', $data);
						$this->load->view('templates/sidebar', $data);
						$this->load->view('templates/top-bar', $data);
						$this->load->view('siswa/ubah-data-diri', $data);
						$this->load->view('templates/footer');
					}
				}
	
				//update data siswa
				$this->siswa_model->updateData('siswa', $data = [
					'username' => $this->input->post('username', true),
					'jurusan' => $this->input->post('jurusan'),
					'nama' => $this->input->post('nama', true),
					'jnKelamin' => $this->input->post('jnKelamin', true),
					'nisn' => $this->input->post('nisn', true),
					'tmLahir' => $this->input->post('tmLahir', true),
					'tgLahir' => $this->input->post('tgLahir', true),
					'agama' => $this->input->post('agama', true),
					'alamat' => $this->input->post('alamat', true),
					'rt' => $this->input->post('rt', true),
					'rw' => $this->input->post('rw', true),
					'desa' => $this->input->post('desa', true),
					'pos' => $this->input->post('pos', true),
					'kecamatan' => $this->input->post('kecamatan', true),
					'kab' => $this->input->post('kab', true),
					'prov' => $this->input->post('prov', true),
					'noTlp' => $this->input->post('noTlp', true),
					'asalSMP' => $this->input->post('asalSMP', true),
					'thnLulusSMP' => $this->input->post('thnLulusSMP', true),
					'noPesertaUn' => $this->input->post('noPesertaUn', true),
					'alamatSmp' => $this->input->post('alamatSmp', true),
					'pasFoto' => $uploadPasFoto,
					'fileIjazah' => $uploadFileIjazah,
					'fileAkte' => $uploadFileAkte,
					'fileKK' => $uploadFileKK,
					'fileTambahan' => $uploadFileTambahan,
					'fileSKKB' => $uploadFileSKKB,
					'fileSuketSehat' => $uploadFileSuketSehat
				], $where = ['noRegis' => $noRegis]);
	
				if ($_POST['namaWali'] === '') {
					$wali = null;
				} else {
					$wali = $this->input->post('namaWali', true);
				}
	
				//update data orang tua siswa
				$this->siswa_model->updateData('tb_ortu', $data = [
					'namaAyah' => $this->input->post('namaAyah', true),
					'namaIbu' => $this->input->post('namaIbu', true),
					'namaWali' => $wali,
					'alamatOrtu' => $this->input->post('alamatOrtu', true),
					'rtOrtu' => $this->input->post('rtOrtu', true),
					'rwOrtu' => $this->input->post('rwOrtu', true),
					'desaOrtu' => $this->input->post('desaOrtu', true),
					'posOrtu' => $this->input->post('posOrtu', true),
					'kecamatanOrtu' => $this->input->post('kecamatanOrtu', true),
					'kabOrtu' => $this->input->post('kabOrtu', true),
					'provOrtu' => $this->input->post('provOrtu', true),
					'noTlpOrtu' => $this->input->post('noTlpOrtu', true)
				], $where = ['noRegis' => $noRegis]);
				$this->session->set_flashdata('msg', 'update');
				redirect('siswa/profil/' . $this->session->userdata('username') . '/' . $noRegis);
		}
		
	}

	public function statusDaftar($noRegis){
		$data['judul'] = 'Status | PPDB';
		$data['alert'] = $this->db->get_where('pesan', ['noRegis' => $noRegis, 'statusBaca' => 'n'])->num_rows();
		$data['calonSiswa'] = $this->siswa_model->getDataById('siswa', ['noRegis' => $noRegis]);
		$data['cekUser'] = $this->siswa_model->getDataById('siswa', ['username' => $this->session->userdata('username')]);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/top-bar', $data);
		$this->load->view('siswa/status', $data);
		$this->load->view('templates/footer');
	}
	
	public function pesan($noRegis){
		$data['judul'] = 'Pesan | PPDB';
		$data['cekUser'] = $this->siswa_model->getDataById('siswa', ['username' => $this->session->userdata('username')]);
		$data['pesan'] = $this->siswa_model->getMessage($noRegis);
		$data['alert'] = $this->db->get_where('pesan', ['noRegis' => $noRegis, 'statusBaca' => 'n'])->num_rows();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/top-bar', $data);
		$this->load->view('siswa/pesan', $data);
		$this->load->view('templates/footer');
	}

	public function tampilPesan($noRegis, $id){
		$data['pesan'] = $this->siswa_model->getDataById('pesan', ['noRegis' => $noRegis, 'id' => $id]);
		$this->siswa_model->updateData('pesan', [
			'statusBaca' => 'y'
		], ['id' => $id]);
		$data['judul'] = 'Pesan | PPDB';
		$data['cekUser'] = $this->siswa_model->getDataById('siswa', ['username' => $this->session->userdata('username')]);
		$data['alert'] = $this->db->get_where('pesan', ['noRegis' => $noRegis, 'statusBaca' => 'n'])->num_rows();

		$this->form_validation->set_rules('noRegis', 'No Regis', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/top-bar', $data);
			$this->load->view('siswa/tampil-pesan', $data);
			$this->load->view('templates/footer');
		} else {
			$id = $this->input->post('noRegis');
			$this->_deleteData($id);
		}
	}

	private function _deleteData($noRegis){
		$user = $this->siswa_model->getOneDataSiswa($noRegis);
		if ($user['statusApprove'] == 'y') {
			redirect('siswa/statusDaftar/'.$user['noRegis']);
		} elseif($user['statusApprove'] == 'bt') {
			redirect('siswa/statusDaftar/'.$user['noRegis']);
		} elseif($user['statusApprove'] == 'n'){
			//hapus foto dan file lainnya
			unlink('./assets/upload/'.$user['pasFoto']);
			unlink('./assets/upload/'.$user['fileIjazah']);
			unlink('./assets/upload/'.$user['fileKK']);
			unlink('./assets/upload/'.$user['fileAkte']);
			if ($user['fileTambahan']) {
				unlink('./assets/upload/'.$user['fileTambahan']);
			}
			if ($user['fileSKKB']) {
				unlink('./assets/upload/'.$user['fileSKKB']);
			}
			if ($user['fileSuketSehat']) {
				unlink('./assets/upload/'.$user['fileSuketSehat']);
			}
			$this->siswa_model->deleteData('siswa', ['noRegis' => $user['noRegis']]);
			$this->session->set_flashdata('welcome', 'daftarUlang');
			redirect('siswa/daftar');
		}
	}

	public function unduh($noRegis){
		// Create an instance of the class:
		$mpdf = new \Mpdf\Mpdf(['format' => 'A4']);

		// $data['siswa'] = $this->siswa_model->getOneDataSiswa($noRegis);
		// $this->load->view('siswa/bukti-daftar', $data);
		$siswa = $this->siswa_model->getOneDataSiswa($noRegis);
		$laman = $this->load->view('siswa/bukti-daftar', ['siswa' => $siswa], TRUE);
		
		// Write some HTML code:
		$mpdf->WriteHTML($laman);

		// Output a PDF file directly to the browser
		$mpdf->Output('bukti_daftar_'.$siswa['nama'].'.pdf', 'D');
	}

	public function bacaSemuaPesan($noRegis){
		$data['judul'] = 'Pesan | PPDB';
		$this->siswa_model->updateData('pesan', ['statusBaca' => 'y'], ['noRegis' => $noRegis]);
		$data['cekUser'] = $this->siswa_model->getDataById('siswa', ['username' => $this->session->userdata('username')]);
		$data['pesan'] = $this->siswa_model->getMessage($noRegis);
		$data['alert'] = $this->db->get_where('pesan', ['noRegis' => $noRegis, 'statusBaca' => 'n'])->num_rows();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/top-bar', $data);
		$this->load->view('siswa/pesan', $data);
		$this->load->view('templates/footer');
	}
	
	public function pesanBelumDibaca($noRegis){
		$data['judul'] = 'Pesan | PPDB';
		$data['cekUser'] = $this->siswa_model->getDataById('siswa', ['username' => $this->session->userdata('username')]);
		$data['pesan'] = $this->db->from('pesan')->where(['noRegis' => $noRegis, 'statusBaca' => 'n'])->order_by('waktuKirim', 'DESC')->get()->result_array();
		$data['alert'] = $this->db->get_where('pesan', ['noRegis' => $noRegis, 'statusBaca' => 'n'])->num_rows();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/top-bar', $data);
		$this->load->view('siswa/pesan', $data);
		$this->load->view('templates/footer');
	}

	public function cekPassword($str, $username){
		$dataUser = $this->siswa_model->getDataById('pengguna', ['username' => $username]);
		$password = $this->input->post('passLama'); //ambil password lama pada form pengaturan
		if ($password == '') {
			$this->form_validation->set_message('cekPassword', 'Password harus diisi!');
			return false;
		}elseif ($dataUser['password'] == $password) {
			return true;
		} else {
			$this->form_validation->set_message('cekPassword', 'Password tidak sama!');
			return false;
		}
	}

	public function settings($username){
		$data['judul'] = 'Pengaturan | PPDB';
		$data['cekUser'] = $this->siswa_model->getDataById('siswa', ['username' => $username]);
		if($data['cekUser']){
			$data['alert'] = $this->siswa_model->getNumRows('pesan', ['noRegis' => $data['cekUser']['noRegis']]);
		} else {
			$data['alert'] = 0;
		}
		
		$this->form_validation->set_rules('passLama', 'Password Lama', 'callback_cekPassword['.$username.']');
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
			$this->load->view('siswa/settings');
			$this->load->view('templates/footer');
		} else {
			$this->siswa_model->updateData('pengguna', [
				'password' => $this->input->post('passBaru')
			], ['username' => $username]);
			$this->session->set_flashdata('welcome', 'update');
			redirect('siswa/statusDaftar/' . $data['cekUser']['noRegis']);
		}
	}

}
