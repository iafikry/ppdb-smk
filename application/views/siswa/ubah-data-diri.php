<div class="container-fluid bg-gray-200">
	<div class="container"  style="padding-top: 5px;">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent" style="padding-bottom: 10px;">
				<li class="breadcrumb-item"><a class="text-success-2" href="<?= base_url('siswa'); ?>">Beranda</a></li>
				<li class="breadcrumb-item"><a class="text-success-2" href="<?= base_url('siswa/profil/'. $this->session->userdata('username') .'/'. $calonSiswa['noRegis']) ?>">Profil</a></li>
				<li class="breadcrumb-item active" aria-current="page">Ubah Profil</li>
			</ol>
		</nav>
	</div>
</div>
<!-- Begin Page Content -->
<div class="container-fluid mt-4">
    <!-- Page Heading -->
	<div class="container">
		<h1 class="h3 mb-4 text-dark">Ubah Profil</h1>
	</div>
	<div class="card shadow-sm border-top-success">
		<div class="card-body">
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<button class="nav-link active" id="nav-profil-tab" data-bs-toggle="pill" data-bs-target="#nav-profil" type="button" role="tab" aria-controls="nav-profil" aria-selected="true">
						Data Diri
					</button>
					<button class="nav-link" id="nav-asal-sekolah-tab" data-bs-toggle="pill" data-bs-target="#nav-sekolah" type="button" role="tab" aria-controls="nav-sekolah" aria-selected="false">
						Asal Sekolah
					</button>
					<button class="nav-link" id="nav-keluarga-tab" data-bs-toggle="pill" data-bs-target="#nav-keluarga" type="button" role="tab" aria-controls="nav-keluarga" aria-selected="false">
						Keluarga
					</button>
				</div>
			</nav>

			<div class="tab-content" id="nav-tabContent">
				<!-- tab data diri calon siswa -->
				<div class="tab-pane fade show active" id="nav-profil" role="tabpanel" aria-labelledby="nav-profil-tab">
				<form action="" method="POST" enctype="multipart/form-data">
					<!-- hidden file lama -->
					<input type="hidden" name="pasFotoLama" id="pasFotoLama" value="<?= $calonSiswa['pasFoto'] ?>">
					<input type="hidden" name="fileIjazahLama" id="fileIjazahLama" value="<?= $calonSiswa['fileIjazah'] ?>">
					<input type="hidden" name="fileAkteLama" id="fileAkteLama" value="<?= $calonSiswa['fileAkte'] ?>">
					<input type="hidden" name="fileKKLama" id="fileKKLama" value="<?= $calonSiswa['fileKK'] ?>">
					<input type="hidden" name="fileTambahanLama" id="fileTambahanLama" value="<?= $calonSiswa['fileTambahan'] ?>">
					<input type="hidden" name="fileSKKBLama" id="fileSKKBLama" value="<?= $calonSiswa['fileSKKB'] ?>">
					<input type="hidden" name="fileSuketSehatLama" id="fileSuketSehatLama" value="<?= $calonSiswa['fileSuketSehat'] ?>">
					<div class="row mt-4">
						<div class="col-md-6">
							<div class="row mb-1">
								<label for="noRegis" class="col-form-label col-sm-4 fw-bold">Nomor Registrasi</label>
								<div class="col-sm-5">
									<input type="text" name="noRegis" id="noRegis" class="form-control-plaintext" value="<?= $calonSiswa['noRegis'] ?>" eadonly>
								</div>
							</div>
						</div>
					</div>

					<!-- USERNAME HIDDEN -->
					<input type="hidden" name="username" id="username" class="form-control-plaintext" value="<?= $calonSiswa['username'] ?>" readonly>

					<!-- jurusan -->
					<div class="row mt-4">
						<div class="row">
							<div class="col">
								<p class="card-title fs-6">Pilihan Kompetensi/Jurusan</p>
							</div>
						</div>
						<div class="row mb-4 ps-5">
							<label class="col-md-1 col-form-label fw-bold">Jurusan<span class="text-danger">*</span> </label>
							<div class="col-sm-9 ps-5">
								<div class="row">
									<?php if($jurusan->num_rows() > 0): ?>
										<?php foreach($jurusan->result_array() as $jr): ?>
											<div class="col-md-6">
												<div class="form-check">
													<input class="form-check-input <?= (form_error('jurusan')) ? 'is-invalid' : '' ?>" type="radio" name="jurusan" value="<?= $jr['nama'] ?>" <?= ($calonSiswa['jurusan'] == $jr['nama']) ? 'checked' : ''  ?>>
													<label class="form-check-label"><?= $jr['nama'] ?></label>
												</div>
											</div>
										<?php endforeach; ?>
									<?php endif; ?>
								</div>
								<?= form_error('jurusan', '<div class="text-danger form-text">', '</div>') ?>
							</div>
						</div>
					</div>

					<!-- data diri calon siswa-->
					<div class="row mt-4">
						<div class="row">
							<div class="col">
								<p class="card-title fs-6">Identitas Calon Siswa</p>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6 ps-5">
								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label fw-bold" for="nama">Nama Lengkap<span class="text-danger">*</span></label>
									<div class="col-sm-7">
										<input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" autocomplete="off" value="<?= $calonSiswa['nama'] ?>">
										<?= form_error('nama', '<div class="invalid-feedback">', '</div>') ?>
										<div class="form-text">Nama harus sesuai dengan di kartu identitas</div>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label fw-bold" for="jnKelamin">Jenis Kelamin<span class="text-danger">*</span></label>
									<div class="col-sm-7 align-self-end">
										<div class="form-check form-check-inline">
											<input class="form-check-input <?= (form_error('jnKelamin')) ? 'is-invalid' : '' ?>" type="radio" name="jnKelamin" value="L" <?= ($calonSiswa['jnKelamin'] == 'L') ? 'checked' : '' ?>>
											<label class="form-check-label">Laki-laki</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input <?= (form_error('jnKelamin')) ? 'is-invalid' : '' ?>" type="radio" name="jnKelamin" value="P" <?= ($calonSiswa['jnKelamin'] == 'P') ? 'checked' : '' ?>>
											<label class="form-check-label">Perempuan</label>
										</div>
										<?= form_error('jnKelamin', '<div class="invalid-feedback">', '</div>') ?>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label fw-bold" for="nisn">NISN<span class="text-danger">*</span></label>
									<div class="col-sm-7">
										<input type="text" class="form-control <?= (form_error('nisn')) ? 'is-invalid' : '' ?>" name="nisn" id="nisn" autocomplete="off" value="<?= $calonSiswa['nisn'] ?>">
										<?= form_error('nisn', '<div class="invalid-feedback">', '</div>') ?>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label fw-bold" for="tmLahir">Tempat Lahir<span class="text-danger">*</span></label>
									<div class="col-sm-7">
										<input type="text" class="form-control <?= (form_error('tmLahir')) ? 'is-invalid' : '' ?>" name="tmLahir" id="tmLahir" autocomplete="off"value="<?= $calonSiswa['tmLahir'] ?>">
										<?= form_error('tmLahir', '<div class="invalid-feedback">', '</div>') ?>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label fw-bold" for="tgLahir">Tanggal Lahir<span class="text-danger">*</span></label>
									<div class="col-sm-7">
										<input type="date" class="form-control <?= (form_error('tgLahir')) ? 'is-invalid' : '' ?>" name="tgLahir" id="tgLahir" max="2006-12-31"  placeholder="dd/mm/yyyy" value="<?= $calonSiswa['tgLahir'] ?>">
										<div class="form-text">Format: bulan/tanggal/tahun</div>
										<?= form_error('tgLahir', '<div class="invalid-feedback">', '</div>') ?>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label fw-bold" for="agama">Agama<span class="text-danger">*</span></label>
									<div class="col-sm-7">
										<select class="form-select <?= (form_error('agama')) ? 'is-invalid' : '' ?>" name="agama" id="agama">
											<option value="islam" <?= ($calonSiswa['agama'] == 'islam') ? 'selected' : '' ?>>Islam</option>
											<option value="protestan"  <?= ($calonSiswa['agama'] == 'protestan') ? 'selected' : '' ?>>Protestan</option>
											<option value="katolik" <?= ($calonSiswa['agama'] == 'katolik') ? 'selected' : '' ?>>Katolik</option>
											<option value="hindu" <?= ($calonSiswa['agama'] == 'hindu') ? 'selected' : '' ?>>Hindu</option>
											<option value="budha" <?= ($calonSiswa['agama'] == 'budha') ? 'selected' : '' ?>>Budha</option>
											<option value="khong hu chu" <?= ($calonSiswa['agama'] == 'khong hu chu') ? 'selected' : '' ?>>Khong Hu Chu</option>
											<option value="lainnya"<?= ($calonSiswa['agama'] == 'lainnya') ? 'selected' : '' ?>>Lainnya</option>
										</select>
										<?= form_error('agama', '<div class="invalid-feedback">', '</div>') ?>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label fw-bold" for="alamat">Alamat<span class="text-danger">*</span></label>
									<div class="col-sm-7">
										<textarea class="form-control <?= (form_error('alamat')) ? 'is-invalid' : '' ?>" name="alamat" id="alamat" cols="10" rows="5">
											<?= $calonSiswa['alamat'] ?>
										</textarea>
										<?= form_error('alamat', '<div class="invalid-feedback">', '</div>') ?>
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label fw-bold">RT/RW<span class="text-danger">*</span> </label>
									<div class="col-sm-7">
										<div class="row">
											<div class="col-sm-3">
												<input type="text" class="form-control <?= (form_error('rt')) ? 'is-invalid' : '' ?>" id="rt" name="rt" autocomplete="off" placeholder="RT" value="<?= $calonSiswa['rt'] ?>">
											</div>
											<div class="col-sm-1 align-self-center">
												<span>/</span>
											</div>
											<div class="col-sm-3">
												<input type="text" class="form-control <?= (form_error('rw')) ? 'is-invalid' : '' ?>" id="rw" name="rw" autocomplete="off" placeholder="RW" value="<?= $calonSiswa['rw'] ?>">
											</div>
										</div>
										<div class="row">
											<div class="col">
												<?= form_error('rt', '<div class="invalid-feedback">', '</div>') ?>
												<?= form_error('rw', '<div class="invalid-feedback">', '</div>') ?>
											</div>
										</div>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label fw-bold" for="desa">Kelurahan/Desa<span class="text-danger">*</span></label>
									<div class="col-sm-7">
										<input type="text" class="form-control <?= (form_error('desa')) ? 'is-invalid' : '' ?>" name="desa" id="desa" autocomplete="off" value="<?= $calonSiswa['desa'] ?>">
										<?= form_error('desa', '<div class="invalid-feedback">', '</div>') ?>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label fw-bold" for="pos">Kode Pos<span class="text-danger">*</span></label>
									<div class="col-sm-7">
										<input type="text" class="form-control <?= (form_error('pos')) ? 'is-invalid' : '' ?>" name="pos" id="pos" autocomplete="off" value="<?= $calonSiswa['pos'] ?>">
										<?= form_error('pos', '<div class="invalid-feedback">', '</div>') ?>
									</div>
								</div>

								<div class="mb-3 row">
									<label for="kecamatan" class="col-sm-3 col-form-label fw-bold">Kecamatan<span class="text-danger">*</span></label>
									<div class="col-sm-7">
										<input type="text" class="form-control <?= (form_error('kecamatan')) ? 'is-invalid' : '' ?>" name="kecamatan" id="kecamatan" autocomplete="off" value="<?= $calonSiswa['kecamatan'] ?>">
										<?= form_error('kecamatan', '<div class="invalid-feedback">', '</div>') ?>
									</div>
								</div>

								<div class="mb-3 row">
									<label for="kab" class="col-sm-3 col-form-label fw-bold">Kabupaten<span class="text-danger">*</span></label>
									<div class="col-sm-7">
										<input type="text" class="form-control <?= (form_error('kab')) ? 'is-invalid' : '' ?>" name="kab" id="kab" autocomplete="off" value="<?= $calonSiswa['kab'] ?>">
										<?= form_error('kab', '<div class="invalid-feedback">', '</div>') ?>
									</div>
								</div>

								<div class="mb-3 row">
									<label for="prov" class="col-sm-3 col-form-label fw-bold">Provinsi<span class="text-danger">*</span></label>
									<div class="col-sm-7">
										<input type="text" class="form-control <?= (form_error('prov')) ? 'is-invalid' : '' ?>" name="prov" id="prov" autocomplete="off" value="<?= $calonSiswa['prov'] ?>">
										<?= form_error('prov', '<div class="invalid-feedback">', '</div>') ?>
									</div>
								</div>

								<div class="mb-3 row">
									<label for="noTlp" class="col-sm-3 col-form-label fw-bold">No. Telp Tumah/HP<span class="text-danger">*</span></label>
									<div class="col-sm-7">
										<input type="text" class="form-control <?= (form_error('noTlp')) ? 'is-invalid' : '' ?>" name="noTlp" id="noTlp" autocomplete="off" value="<?= $calonSiswa['noTlp'] ?>">
										<?= form_error('noTlp', '<div class="invalid-feedback">', '</div>') ?>
										<div class="form-text">Contoh: 081234567890</div>
									</div>
								</div>

								<div class="mb-3 row">
									<div class="col-sm-3"></div>
									<div class="col-sm-7">
										<p><span class="text-danger fw-bold">*</span>Wajib diisi</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row mb-4 ps-5 ">
							<label class="col-md-1 col-form-label text-wrap fw-bold align-self-center">Pas Foto<span class="text-danger">*</span> </label>
							<div class="col-sm-5 ps-5 align-self-center">
								<?php 
								if(isset($errorPasFoto)){
									echo $errorPasFoto;
								} ?>
								<?php if($calonSiswa['pasFoto']):  ?>
										<div class="fw-bold">
											<i class="bi bi-info-circle text-primary"></i> Abaikan Field Ini Jika Tidak Akan Mengganti Foto
										</div>
								<?php endif;  ?>
								<input type="file" name="pasFoto" id="pasFoto" class="form-control <?= (form_error('pasFoto')) ? 'is-invalid' : '' ?>">
								<?= form_error('pasFoto', '<div class="invalid-feedback">', '</div>') ?>
								<div class="form-text">Maksimal ukuran 2 MB dan format file JPG/JPEG/PNG, Background Merah</div>
							</div>
							<div class="col-sm-2 align-self-center">
								<div class="row">
									<div class="col-2">
										<?php 
										if(!is_null($calonSiswa['pasFoto'])): ?>
											<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalPasFoto" title="Lihat File">
												<i class="bi bi-eye"></i>
											</button>
										<?php endif; ?>	
									</div>
									<div class="col ms-3">
										<?php 
										if(!is_null($calonSiswa['pasFoto'])): ?>
											<a href="<?= base_url('assets/upload/' . $calonSiswa['pasFoto']) ?>" class="btn btn-warning" download="<?= $calonSiswa['pasFoto']?>" title="Download File"><i class="bi bi-download"></i></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>

						<div class="row mb-4 ps-5">
							<label class="col-md-1 text-wrap col-form-label fw-bold align-self-center">Ijazah<span class="text-danger">*</span> </label>
							<div class="col-sm-5 ps-5 align-self-center">
								<?php  
								if(isset($errorFileIjazah)){
									echo $errorFileIjazah;
								} ?>
								<?php if($calonSiswa['fileIjazah']): ?>
									<div class="fw-bold">
										<i class="bi bi-info-circle text-primary"></i> Abaikan Field Ini Jika Tidak Akan Mengganti File
									</div>
								<?php else: ?>
									<div class="fst-italic">
										Anda belum mengunggah file ini
									</div>
								<?php endif; ?>
								<input type="file" name="fileIjazah" id="fileIjazah" class="form-control <?= (form_error('fileIjazah')) ? 'is-invalid' : '' ?>">
								<?= form_error('fileIjazah', '<div class="invalid-feedback">', '</div>') ?>
								<div class="form-text">Maksimal ukuran 2 MB dan format file PDF</div>
							</div>
							<div class="col-sm-2 align-self-center">
								<div class="row">
									<div class="col-2">
										<?php if($calonSiswa['fileIjazah']): ?>
											<a href="<?= base_url('assets/upload/' . $calonSiswa['fileIjazah']) ?>" target="_blank" class="btn btn-success text-wrap" title="Lihat File"><i class="bi bi-eye"></i></a>
										<?php endif; ?>	
									</div>
									<div class="col ms-3">
										<?php if(!is_null($calonSiswa['fileIjazah'])): ?>
											<a href="<?= base_url('assets/upload/' . $calonSiswa['fileIjazah']) ?>" class="btn btn-warning" download="<?= $calonSiswa['fileIjazah']?>" title="Download File"><i class="bi bi-download"></i></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>

						<div class="row mb-4 ps-5">
							<label class="col-md-1 col-form-label fw-bold align-self-center">Akte<span class="text-danger">*</span> </label>
							<div class="col-sm-5 ps-5 align-self-center">
								<?php  
								if(isset($errorFileAkte)){
									echo $errorFileAkte;
								} ?>
								<?php if($calonSiswa['fileAkte']): ?>
									<div class="fw-bold">
										<i class="bi bi-info-circle text-primary"></i> Abaikan Field Ini Jika Tidak Akan Mengganti File
									</div>
								<?php else: ?>
									<div class="fst-italic">
										Anda belum mengunggah file ini
									</div>
								<?php endif; ?>
								<input type="file" name="fileAkte" id="fileAkte" class="form-control <?= (form_error('fileAkte')) ? 'is-invalid' : '' ?>">
								<?= form_error('fileAkte', '<div class="invalid-feedback">', '</div>') ?>
								<div class="form-text">Maksimal ukuran 2 MB dan format file PDF</div>
							</div>
							<div class="col-sm-2 align-self-center">
								<div class="row">
									<div class="col-2">
										<?php if($calonSiswa['fileAkte']): ?>
											<a href="<?= base_url('assets/upload/' . $calonSiswa['fileAkte']) ?>" target="_blank" class="btn btn-success text-wrap" title="Lihat File"><i class="bi bi-eye"></i></a>
										<?php endif; ?>		
									</div>
									<div class="col ms-3">
										<?php if(!is_null($calonSiswa['fileAkte'])): ?>
											<a href="<?= base_url('assets/upload/' . $calonSiswa['fileAkte']) ?>" class="btn btn-warning" download="<?= $calonSiswa['fileAkte']?>" title="Download File"><i class="bi bi-download"></i></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>

						<div class="row mb-4 ps-5">
							<label class="col-md-1 text-wrap col-form-label fw-bold align-self-center">Kartu Keluarga<span class="text-danger">*</span> </label>
							<div class="col-sm-5 ps-5 align-self-center">
								<?php  
								if(isset($errorFileKK)){
									echo $errorFileKK;
								} ?>
								<?php if($calonSiswa['fileKK']): ?>
									<div class="fw-bold">
										<i class="bi bi-info-circle text-primary"></i> Abaikan field ini jika tidak akan mengganti file
									</div>
								<?php else: ?>
									<div class="fst-italic">
										Anda belum mengunggah file ini
									</div>
								<?php endif; ?>
								<input type="file" name="fileKK" id="fileKK" class="form-control <?= (form_error('fileKK')) ? 'is-invalid' : '' ?>">
								<?= form_error('fileKK', '<div class="invalid-feedback">', '</div>') ?>
								<div class="form-text">Maksimal ukuran 2 MB dan format file PDF</div>
							</div>
							<div class="col-sm-2 align-self-center">
								<div class="row">
									<div class="col-2">
										<?php if($calonSiswa['fileKK']): ?>
											<a href="<?= base_url('assets/upload/' . $calonSiswa['fileKK']) ?>" target="_blank" class="btn btn-success text-wrap" title="Lihat File"><i class="bi bi-eye"></i></a>
										<?php endif; ?>	
									</div>
									<div class="col ms-3">
										<?php if(!is_null($calonSiswa['fileKK'])): ?>
											<a href="<?= base_url('assets/upload/' . $calonSiswa['fileKK']) ?>" class="btn btn-warning" download="<?= $calonSiswa['fileKK']?>" title="Download File"><i class="bi bi-download"></i></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>

						<div class="row mb-4 ps-5">
							<label class="col-md-1 col-form-label text-wrap fw-bold align-self-center">KIP / PKH / KPS / KIS / SKTM</label>
							<div class="col-sm-5 ps-5 align-self-center">
								<?php  
								if(isset($errorFileTambahan)){
									echo $errorFileTambahan;
								} ?>
								<?php if($calonSiswa['fileTambahan']): ?>
									<div class="fw-bold">
										<i class="bi bi-info-circle text-primary"></i> Abaikan field ini jika tidak akan mengganti file
									</div>
								<?php else: ?>
									<div class="fst-italic">
										Anda belum mengunggah file ini
									</div>
								<?php endif; ?>
								<input type="file" name="fileTambahan" id="fileTambahan" class="form-control">
								<div class="form-text">Maksimal ukuran 2 MB dan format file PDF</div>
							</div>
							<div class="col-sm-2 align-self-center">
								<div class="row">
									<div class="col-2">
										<?php if($calonSiswa['fileTambahan']): ?>
											<a href="<?= base_url('assets/upload/' . $calonSiswa['fileTambahan']) ?>" target="_blank" class="btn btn-success text-wrap" title="Lihat File"><i class="bi bi-eye"></i></a>
										<?php endif; ?>		
									</div>
									<div class="col ms-3">
										<?php if($calonSiswa['fileTambahan']): ?>
											<a href="<?= base_url('assets/upload/' . $calonSiswa['fileTambahan']) ?>" class="btn btn-warning" download="<?= $calonSiswa['fileTambahan']?>" title="Download File"><i class="bi bi-download"></i></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>

						<div class="row mb-4 ps-5">
							<label class="col-md-1 col-form-label fw-bold align-self-center">SKKB</label>
							<div class="col-sm-5 ps-5 align-self-center">
								<?php  
								if(isset($errorFileSKKB)){
									echo $errorFileSKKB;
								} ?>
								<?php if($calonSiswa['fileSKKB']): ?>
									<div class="fw-bold">
										<i class="bi bi-info-circle text-primary"></i> Abaikan field ini jika tidak akan mengganti file
									</div>
								<?php else: ?>
									<div class="fst-italic">
										Anda belum mengunggah file ini
									</div>
								<?php endif; ?>
								<input type="file" name="fileSKKB" id="fileSKKB" class="form-control">
								<div class="form-text">Maksimal ukuran 2 MB dan format file PDF</div>
							</div>
							<div class="col-sm-2 align-self-center">
								<div class="row">
									<div class="col-2">
										<?php if($calonSiswa['fileSKKB']): ?>
											<a href="<?= base_url('assets/upload/' . $calonSiswa['fileSKKB']) ?>" target="_blank" class="btn btn-success text-wrap" title="Lihat File"><i class="bi bi-eye"></i></a>
										<?php endif; ?>		
									</div>
									<div class="col ms-3">
										<?php if($calonSiswa['fileSKKB']): ?>
											<a href="<?= base_url('assets/upload/' . $calonSiswa['fileSKKB']) ?>" class="btn btn-warning" download="<?= $calonSiswa['fileSKKB']?>" title="Download File"><i class="bi bi-download"></i></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>

						<div class="row mb-4 ps-5">
							<label class="col-md-1 col-form-label align-self-center fw-bold">Suket Sehat</label>
							<div class="col-sm-5 ps-5 align-self-center">
								<?php  
								if(isset($errorFileSuketSehat)){
									echo $errorFileSuketSehat;
								} ?>
								<?php if($calonSiswa['fileSuketSehat']): ?>
									<div class="fw-bold">
										<i class="bi bi-info-circle text-primary"></i> Abaikan field ini jika tidak akan mengganti file
									</div>
								<?php else: ?>
									<div class="fst-italic">
										Anda belum mengunggah file ini
									</div>
								<?php endif; ?>
								<input type="file" name="fileSuketSehat" id="fileSuketSehat" class="form-control">
								<div class="form-text">Maksimal ukuran 2 MB dan format file PDF</div>
							</div>
							<div class="col-sm-2 align-self-center">
								<div class="row">
									<div class="col-2">
										<?php if($calonSiswa['fileSuketSehat']): ?>
											<a href="<?= base_url('assets/upload/' . $calonSiswa['fileSuketSehat']) ?>" target="_blank" class="btn btn-success text-wrap" title="Lihat File"><i class="bi bi-eye"></i></a>
										<?php endif; ?>	
									</div>
									<div class="col ms-3">
										<?php if($calonSiswa['fileSuketSehat']): ?>
											<a href="<?= base_url('assets/upload/' . $calonSiswa['fileSuketSehat']) ?>" class="btn btn-warning" download="<?= $calonSiswa['fileSuketSehat']?>" title="Download File"><i class="bi bi-download"></i></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
								
				<!-- Data asal sekolah siswa -->
				<div class="tab-pane fade" id="nav-sekolah" role="tabpanel" aria-labelledby="nav-asal-sekolah-tab">
					<div class="row mt-4">
						<div class="row">
							<div class="col">
								<p class="card-title fs-6">Asal Sekolah Pendaftar/Calon Peserta Didik</p>
							</div>
						</div>

						<div class="col-sm-7 ps-5">
							<div class="mb-3 row">
								<label for="asalSMP" class="col-sm-3 col-form-label fw-bold">Asal SMP<span class="text-danger">*</span></label>
								<div class="col-sm-7">
									<input type="text" class="form-control <?= (form_error('asalSMP')) ? 'is-invalid' : '' ?>" name="asalSMP" id="asalSMP" autocomplete="off" value="<?= $calonSiswa['asalSMP'] ?>">
									<?= form_error('asalSMP', '<div class="invalid-feedback">', '</div>') ?>
								</div>
							</div>

							<div class="mb-3 row">
								<label for="thnLulusSMP" class="col-sm-3 col-form-label fw-bold">Tahun Lulus SMP<span class="text-danger">*</span></label>
								<div class="col-sm-7">
									<input type="text" class="form-control <?= (form_error('thnLulusSMP')) ? 'is-invalid' : '' ?>" name="thnLulusSMP" id="thnLulusSMP" autocomplete="off" value="<?= $calonSiswa['thnLulusSMP'] ?>">
									<?= form_error('thnLulusSMP', '<div class="invalid-feedback">', '</div>') ?>
									<div class="form-text">Jika lulus tahun ajaran 2019/2020, berarti hanya tulis 2020-nya saja</div>
								</div>
							</div>

							<div class="mb-3 row">
								<label for="noPesertaUn" class="col-sm-3 col-form-label fw-bold">No. Peserta UN<span class="text-danger">*</span></label>
								<div class="col-sm-7">
									<input type="text" class="form-control <?= (form_error('noPesertaUn')) ? 'is-invalid' : '' ?>" name="noPesertaUn" id="noPesertaUn" autocomplete="off" value="<?= $calonSiswa['noPesertaUn'] ?>">
									<?= form_error('noPesertaUn', '<div class="invalid-feedback">', '</div>') ?>
								</div>
							</div>

							<div class="mb-3 row">
								<label for="alamatSmp" class="col-sm-3 col-form-label fw-bold">Alamat SMP/MTs<span class="text-danger">*</span></label>
								<div class="col-sm-7">
									<textarea class="form-control <?= (form_error('alamatSmp')) ? 'is-invalid' : '' ?>" name="alamatSmp" id="alamatSmp" cols="10" rows="5">
										<?= $calonSiswa['alamatSmp'] ?>
									</textarea>
									<?= form_error('alamatSmp', '<div class="invalid-feedback">', '</div>') ?>
								</div>
							</div>	
									
							<div class="mb-3 row">
								<div class="col-sm-3"></div>
								<div class="col-sm-7">
									<p><span class="text-danger fw-bold">*</span>Wajib diisi</p>
								</div>
							</div>
						</div>
					</div>
				</div>
						
				<!-- tab keluarga -->
				<div class="tab-pane fade" id="nav-keluarga" role="tabpanel" aria-labelledby="nav-keluarga-tab">
					<div class="row mt-4">
						<div class="row">
							<div class="col">
								<p class="card-title fs-6">Identitas dan Alamat Orang Tua/Wali Calon Peserta Didik</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6 ps-5">
							<div class="mb-3 row">
								<label for="namaAyah" class="col-sm-3 col-form-label fw-bold">Nama Ayah<span class="text-danger">*</span> </label>
								<div class="col-sm-7">
									<input type="text" name="namaAyah" id="namaAyah" class="form-control <?= (form_error('namaAyah')) ? 'is-invalid' : '' ?>" autocomplete="off" value="<?= $calonSiswa['namaAyah'] ?>">
									<?= form_error('namaAyah', '<div class="invalid-feedback">', '</div>') ?> 
								</div>
							</div>

							<div class="mb-3 row">
								<label for="namaIbu" class="col-sm-3 col-form-label fw-bold">Nama Ibu<span class="text-danger">*</span></label>
								<div class="col-sm-7">
									<input type="text" name="namaIbu" id="namaIbu" class="form-control <?= (form_error('namaIbu')) ? 'is-invalid' : '' ?>" autocomplete="off" value="<?= $calonSiswa['namaIbu'] ?>">
									<?= form_error('namaIbu', '<div class="invalid-feedback">', '</div>') ?> 
								</div>
							</div>

							<div class="mb-3 row">
								<label for="namaWali" class="col-sm-3 col-form-label fw-bold">Nama Wali (kalau ada)</label>
								<div class="col-sm-7">
									<input type="text" name="namaWali" id="namaWali" class="form-control" autocomplete="off" value="<?= $calonSiswa['namaWali'] ?>"> 
								</div>
							</div>

							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label fw-bold" for="alamat">Alamat<span class="text-danger">*</span></label>
								<div class="col-sm-7">
									<textarea class="form-control <?= (form_error('alamatOrtu')) ? 'is-invalid' : '' ?>" name="alamatOrtu" id="alamatOrtu" cols="10" rows="5">
										<?= $calonSiswa['alamatOrtu'] ?>
									</textarea>
									<?= form_error('alamatOrtu', '<div class="invalid-feedback">', '</div>') ?>
								</div>
							</div>

							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label fw-bold">RT/RW<span class="text-danger">*</span></label>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-3">
											<input type="text" class="form-control <?= (form_error('rtOrtu')) ? 'is-invalid' : '' ?>" id="rtOrtu" name="rtOrtu" autocomplete="off" placeholder="RT" value="<?= $calonSiswa['rtOrtu'] ?>">
										</div>
										<div class="col-sm-1 align-self-center">
											<span>/</span>
										</div>
										<div class="col-sm-3">
											<input type="text" class="form-control <?= (form_error('rwOrtu')) ? 'is-invalid' : '' ?>" id="rwOrtu" name="rwOrtu" autocomplete="off" placeholder="RW" value="<?= $calonSiswa['rwOrtu'] ?>">
										</div>
									</div>
									<div class="row">
										<div class="col">
											<?= form_error('rtOrtu', '<div class="invalid-feedback">', '</div>') ?>
											<?= form_error('rwOrtu', '<div class="invalid-feedback">', '</div>') ?>
										</div>
									</div>
								</div>
							</div>														
						</div>

						<div class="col-sm-6">
							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label fw-bold" for="desaOrtu">Kelurahan/Desa<span class="text-danger">*</span></label>
								<div class="col-sm-7">
									<input type="text" class="form-control <?= (form_error('desaOrtu')) ? 'is-invalid' : '' ?>" name="desaOrtu" id="desaOrtu" autocomplete="off" value="<?= $calonSiswa['desaOrtu'] ?>">
									<?= form_error('desaOrtu', '<div class="invalid-feedback">', '</div>') ?>
								</div>
							</div>

							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label fw-bold" for="posOrtu">Kode Pos<span class="text-danger">*</span></label>
								<div class="col-sm-7">
									<input type="text" class="form-control <?= (form_error('posOrtu')) ? 'is-invalid' : '' ?>" name="posOrtu" id="posOrtu" autocomplete="off" value="<?= $calonSiswa['posOrtu'] ?>">
									<?= form_error('posOrtu', '<div class="invalid-feedback">', '</div>') ?>
								</div>
							</div>

							<div class="mb-3 row">
								<label for="kecamatanOrtu" class="col-sm-3 col-form-label fw-bold">Kecamatan<span class="text-danger">*</span></label>
								<div class="col-sm-7">
									<input type="text" class="form-control <?= (form_error('kecamatanOrtu')) ? 'is-invalid' : '' ?>" name="kecamatanOrtu" id="kecamatanOrtu" autocomplete="off" value="<?= $calonSiswa['kecamatanOrtu'] ?>">
									<?= form_error('kecamatanOrtu', '<div class="invalid-feedback">', '</div>') ?>
								</div>
							</div>

							<div class="mb-3 row">
								<label for="kabOrtu" class="col-sm-3 col-form-label fw-bold">Kabupaten<span class="text-danger">*</span></label>
								<div class="col-sm-7">
									<input type="text" class="form-control <?= (form_error('kabOrtu')) ? 'is-invalid' : '' ?>" name="kabOrtu" id="kabOrtu" autocomplete="off" value="<?= $calonSiswa['kabOrtu'] ?>">
									<?= form_error('kabOrtu', '<div class="invalid-feedback">', '</div>') ?>
								</div>
							</div>

							<div class="mb-3 row">
								<label for="provOrtu" class="col-sm-3 col-form-label fw-bold">Provinsi<span class="text-danger">*</span></label>
								<div class="col-sm-7">
									<input type="text" class="form-control <?= (form_error('provOrtu')) ? 'is-invalid' : '' ?>" name="provOrtu" id="provOrtu" autocomplete="off" value="<?= $calonSiswa['provOrtu'] ?>">
									<?= form_error('provOrtu', '<div class="invalid-feedback">', '</div>') ?>
								</div>
							</div>

							<div class="mb-3 row">
								<label for="noTlpOrtu" class="col-sm-3 col-form-label fw-bold">No. Telp Rumah/HP<span class="text-danger">*</span></label>
								<div class="col-sm-7">
									<input type="text" class="form-control <?= (form_error('noTlpOrtu')) ? 'is-invalid' : '' ?>" name="noTlpOrtu" id="noTlpOrtu" autocomplete="off" value="<?= $calonSiswa['noTlpOrtu'] ?>">
									<?= form_error('noTlpOrtu', '<div class="invalid-feeback">', '</div>') ?>
									<div class="form-text">Contoh: 081234567890</div>
								</div>
							</div>

							<div class="mb-3 row">
								<div class="col-sm-3"></div>
								<div class="col-sm-8">
									<button type="submit" class="btn mt-3 btn-success ps-4 pe-4"><i class="bi bi-save"></i> Simpan</button>
									<p class="mt-2"><span class="text-danger fw-bold">*</span>Wajib diisi</p>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

<!-- modal pas foto -->
<div class="modal fade" id="modalPasFoto" tabindex="-1" aria-labelledby="modalPAsFotoLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content bg-transparent" style="border: none;">
			<div class="modal-header" style="border-bottom: none;">
				<!-- <h5 class="modal-title" id="modalPAsFotoLabel">Pas Foto</h5> -->
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body align-self-center">
				<img src="<?= base_url('assets/upload/' . $calonSiswa['pasFoto'] ) ?>" alt="pas foto" width="400px" height="500px">
			</div>
		</div>
	</div>
</div>
