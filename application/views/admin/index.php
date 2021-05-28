<!-- Begin Page Content -->
<div class="container-fluid mt-4">
     <!-- Page Heading -->
	 <div class="card shadow-sm">
		 <div class="card-header">
			 <h5 class="text-capitalize fw-bold text-center">formulir pendaftaran calon peserta didik baru tahun pelajaran <?= date('Y') ?> - <?= date('Y', strtotime("+ 1 year"))?></h5>
		 </div>
	 	<div class="card-body">

			<form action="" method="POST" enctype="multipart/form-data">
				<div class="container ps-5 pe-5">
					<div class="row mb-3">
						<label for="noRegis" class="col-form-label col-sm-2 fw-bold">Nomor Registrasi</label>
						<div class="col-sm-5">
							<input type="text" name="noRegis" id="noRegis" class="form-control-plaintext" value="<?= $noRegis ?>" readonly>
						</div>
					</div>
					<div class="row mb-3">
						<label for="username" class="col-form-label col-sm-2 fw-bold">Username</label>
						<div class="col-sm-5">
							<input type="text" name="username" id="username" class="form-control-plaintext" value="<?= $genUName ?>" readonly>
						</div>
					</div>
					<div class="row mb-3">
						<label for="tglRegis" class="col-form-label col-sm-2 fw-bold">Tanggal Registrasi</label>
						<div class="col-sm-5">
							<input type="text" value="<?= date('d-m-Y'); ?>" name="buatNampilAja" id="buatNampilAja" class="form-control-plaintext" readonly>
							<input type="hidden" value="<?= date('Y-m-d'); ?>" name="tglRegis" id="tglRegis" class="form-control-plaintext" readonly>
						</div>
					</div>
					<!-- TA -->
					<input type="hidden" name="TA" id="TA" value="<?= date('Y'); ?>">
				</div>

				<p class="card-title fs-6 mt-4">Pilihan Kompetensi/Jurusan</p>
				<hr class="sidebar-divider">
				<div class="container ps-5 pe-5">
					<div class="mb-3 row">
						<label class="col-sm-2 col-form-label fw-bold">Jurusan<span class="text-danger">*</span> </label>
						<div class="col-sm-5">
							<div class="row">
								<?php if($jurusan->num_rows() > 0): ?>
									<?php foreach($jurusan->result_array() as $jr): ?>
											<div class="col-md-6">
												<div class="form-check">
													<input class="form-check-input <?= (form_error('jurusan')) ? 'is-invalid' : '' ?>" type="radio" name="jurusan" value="<?= $jr['nama'] ?>" <?= set_radio('jurusan', $jr['nama']) ?>>
													<label class="form-check-label">
														<?= $jr['nama'] ?>
													</label>
												</div>
											</div>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>
							<?= form_error('jurusan', '<div class="text-danger form-text">', '</div>') ?>
						</div>
					</div>

					<div class="mb-3 row">
						<div class="col-sm-2"></div>
						<div class="col-sm-5">
							<p><span class="text-danger fw-bold">*</span>Wajib diisi</p>
						</div>
					</div>
				</div>
				
				<p class="card-title fs-6 mt-4"> Identitas Pendaftar/Calon Peserta Didik Baru</p>
				<hr class="sidebar-divider">
				<div class="container ps-5 pe-5">
					<div class="mb-3 row">
						<label class="col-sm-2 col-form-label fw-bold" for="nama">Nama Lengkap<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" autocomplete="off" value="<?= set_value('nama') ?>">
							<?= form_error('nama', '<div class="invalid-feedback">', '</div>') ?>
							<div class="form-text">Nama harus sesuai dengan di kartu identitas</div>
						</div>
					</div>

					<div class="mb-3 row">
						<label class="col-sm-2 col-form-label fw-bold" for="jnKelamin">Jenis Kelamin<span class="text-danger">*</span></label>
						<div class="col-sm-5 align-self-center">
							<div class="form-check form-check-inline">
								<input class="form-check-input <?= (form_error('jnKelamin')) ? 'is-invalid' : '' ?>" type="radio" name="jnKelamin" value="L" <?= set_radio('jnKelamin', 'L') ?>>
								<label class="form-check-label">Laki-laki</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input <?= (form_error('jnKelamin')) ? 'is-invalid' : '' ?>" type="radio" name="jnKelamin" value="P" <?= set_radio('jnKelamin', 'P') ?>>
								<label class="form-check-label">Perempuan</label>
							</div>
							<?= form_error('jnKelamin', '<div class="invalid-feedback">', '</div>') ?>
						</div>
					</div>

					<div class="mb-3 row">
						<label class="col-sm-2 col-form-label fw-bold" for="nisn">NISN<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" class="form-control <?= (form_error('nisn')) ? 'is-invalid' : '' ?>" name="nisn" id="nisn" autocomplete="off" value="<?= set_value('nisn') ?>">
							<?= form_error('nisn', '<div class="invalid-feedback">', '</div>') ?>
						</div>
					</div>

					<div class="mb-3 row">
						<label class="col-sm-2 col-form-label fw-bold" for="tmLahir">Tempat Lahir<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" class="form-control <?= (form_error('tmLahir')) ? 'is-invalid' : '' ?>" name="tmLahir" id="tmLahir" autocomplete="off" value="<?= set_value('tmLahir') ?>">
							<?= form_error('tmLahir', '<div class="invalid-feedback">', '</div>') ?>
						</div>
					</div>

					<div class="mb-3 row">
						<label class="col-sm-2 col-form-label fw-bold" for="tgLahir">Tanggal Lahir<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="date" class="form-control <?= (form_error('tgLahir')) ? 'is-invalid' : '' ?>" name="tgLahir" id="tgLahir" max="2006-12-31"  placeholder="dd/mm/yyyy" value="<?= set_value('tgLahir') ?>">
							<div class="form-text">format: bulan/tanggal/tahun</div>
							<?= form_error('tgLahir', '<div class="invalid-feedback">', '</div>') ?>
						</div>
					</div>

					<div class="mb-3 row">
						<label class="col-sm-2 col-form-label fw-bold" for="agama">Agama<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<select class="form-select <?= (form_error('agama')) ? 'is-invalid' : '' ?>" name="agama" id="agama">
								<option selected>--pilih--</option>
								<option value="islam" <?= set_select('agama','islam') ?>>Islam</option>
								<option value="protestan" <?= set_select('agama', 'protestan') ?>>Protestan</option>
								<option value="katolik" <?= set_select('agama', 'katolik') ?>>Katolik</option>
								<option value="hindu" <?= set_select('agama', 'hindu') ?>>Hindu</option>
								<option value="budha" <?= set_select('agama', 'budha') ?>>Budha</option>
								<option value="khong hu chu" <?= set_select('agama', 'khong hu chu') ?>>Khong Hu Chu</option>
								<option value="lainnya" <?= set_select('agama', 'lainnya') ?>>Lainnya</option>
							</select>
							<?= form_error('agama', '<div class="invalid-feedback">', '</div>') ?>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="pasFoto" class="col-sm-2 col-form-label fw-bold">Upload Pas Foto<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<?php 
							 if(isset($errorPasFoto)){
								echo $errorPasFoto;
							} ?>
							<input type="file" name="pasFoto" id="pasFoto" class="form-control <?= (form_error('pasFoto')) ? 'is-invalid' : '' ?>" value="<?= set_value('pasFoto') ?>">
							<?= form_error('pasFoto', '<div class="invalid-feedback">', '</div>') ?>
							<div class="form-text">Maksimal ukuran 2 MB dan format file JPG/JPEG/PNG, Background Merah</div>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="fileIjazah" class="col-sm-2 col-form-label fw-bold">Upload Ijazah<span class="text-danger">*</span></label>
						<div class="col-sm-5">
						<?php  if(isset($errorFileIjazah)){
								echo $errorFileIjazah;
							} ?>
							<input type="file" name="fileIjazah" id="fileIjazah" class="form-control <?= (form_error('fileIjazah')) ? 'is-invalid' : '' ?>" value="<?= set_value('fileIjazah') ?>">
							<?= form_error('fileIjazah', '<div class="invalid-feedback">', '</div>') ?>
							<div class="form-text">Maksimal ukuran 2 MB dan format file PDF</div>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="fileAkte" class="col-sm-2 col-form-label fw-bold">Upload Akte<span class="text-danger">*</span></label>
						<div class="col-sm-5">
						<?php  if(isset($errorFileAkte)){
								echo $errorFileAkte;
							} ?>
							<input type="file" name="fileAkte" id="fileAkte" class="form-control <?= (form_error('fileAkte')) ? 'is-invalid' : '' ?>" value="<?= set_value('fileAkte') ?>">
							<?= form_error('fileAkte', '<div class="invalid-feedback">', '</div>') ?>
							<div class="form-text">Maksimal ukuran 2 MB dan format file PDF</div>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="fileKK" class="col-sm-2 col-form-label fw-bold">Upload Kartu Keluarga (KK)<span class="text-danger">*</span></label>
						<div class="col-sm-5">
						<?php  if(isset($errorFileKK)){
								echo $errorFileKK;
							} ?>
							<input type="file" name="fileKK" id="fileKK" class="form-control <?= (form_error('fileKK')) ? 'is-invalid' : '' ?>" value="<?= set_value('fileKK') ?>">
							<?= form_error('fileKK', '<div class="invalid-feedback">', '</div>') ?>
							<div class="form-text">Maksimal ukuran 2 MB dan format file PDF</div>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="fileTambahan" class="col-sm-2 col-form-label fw-bold">Upload KIP / PKH / KPS / KIS / SKTM</label>
						<div class="col-sm-5">
							<input type="file" name="fileTambahan" id="fileTambahan" class="form-control">
							<div class="form-text">Maksimal ukuran 2 MB dan format file PDF</div>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="fileSKKB" class="col-sm-2 col-form-label fw-bold">Upload SKKB</label>
						<div class="col-sm-5">
							<input type="file" name="fileSKKB" id="fileSKKB" class="form-control">
							<div class="form-text">Maksimal ukuran 2 MB dan format file PDF</div>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="fileSuketSehat" class="col-sm-2 col-form-label fw-bold">Upload Surat Keterangan Sehat</label>
						<div class="col-sm-5">
							<input type="file" name="fileSuketSehat" id="fileSuketSehat" class="form-control">
							<div class="form-text">Maksimal ukuran 2 MB dan format file PDF</div>
						</div>
					</div>

					<div class="mb-3 row">
						<div class="col-sm-2"></div>
						<div class="col-sm-5">
							<p><span class="text-danger fw-bold">*</span>Wajib diisi</p>
						</div>
					</div>
				</div>

				<p class="card-title fs-6 mt-4">Alamat Pendaftar/Calon Peserta Didik</p>
				<hr class="sidebar-divider">
				<div class="container ps-5 pe-5">
					<div class="mb-3 row">
						<label class="col-sm-2 col-form-label fw-bold" for="alamat">Alamat<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<textarea class="form-control <?= (form_error('alamat')) ? 'is-invalid' : '' ?>" name="alamat" id="alamat" cols="10" rows="5">
								<?= set_value('alamat') ?>
							</textarea>
							<?= form_error('alamat', '<div class="invalid-feedback">', '</div>') ?>
						</div>
						<div class="col">
							<div class="row">
								<label class="col-sm-2 col-form-label fw-bold" for="rt">RT<span class="text-danger">*</span></label>
									<div class="col-sm-2">
										<input type="text" class="form-control <?= (form_error('rt')) ? 'is-invalid' : '' ?>" id="rt" name="rt" autocomplete="off" value="<?= set_value('rt') ?>">
										<?= form_error('rt', '<div class="invalid-feedback">', '</div>') ?>
									</div>
								<label class="col-sm-2 col-form-label fw-bold" for="rw">RW<span class="text-danger">*</span></label>
									<div class="col-sm-2">
										<input type="text" class="form-control <?= (form_error('rw')) ? 'is-invalid' : '' ?>" id="rw" name="rw" autocomplete="off" value="<?= set_value('rw') ?>">
										<?= form_error('rw', '<div class="invalid-feedback">', '</div>') ?>
									</div>								
							</div>
						</div>
					</div>

					<div class="mb-3 row">
						<label class="col-sm-2 col-form-label fw-bold" for="desa">Kelurahan/Desa<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" class="form-control <?= (form_error('desa')) ? 'is-invalid' : '' ?>" name="desa" id="desa" autocomplete="off" value="<?= set_value('desa') ?>">
							<?= form_error('desa', '<div class="invalid-feedback">', '</div>') ?>
						</div>
						<label class="col-sm-2 col-form-label fw-bold" for="pos">Kode Pos<span class="text-danger">*</span></label>
						<div class="col-sm-2">
							<input type="text" class="form-control <?= (form_error('pos')) ? 'is-invalid' : '' ?>" name="pos" id="pos" autocomplete="off" value="<?= set_value('pos') ?>">
							<?= form_error('pos', '<div class="invalid-feedback">', '</div>') ?>
						</div>
					</div>
					
					<div class="mb-3 row">
						<label for="kecamatan" class="col-sm-2 col-form-label fw-bold">Kecamatan<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" class="form-control <?= (form_error('kecamatan')) ? 'is-invalid' : '' ?>" name="kecamatan" id="kecamatan" autocomplete="off" value="<?= set_value('kecamatan') ?>">
							<?= form_error('kecamatan', '<div class="invalid-feedback">', '</div>') ?>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="kab" class="col-sm-2 col-form-label fw-bold">Kabupaten<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" class="form-control <?= (form_error('kab')) ? 'is-invalid' : '' ?>" name="kab" id="kab" autocomplete="off" value="<?= set_value('kab') ?>">
							<?= form_error('kab', '<div class="invalid-feedback">', '</div>') ?>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="prov" class="col-sm-2 col-form-label fw-bold">Provinsi<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" class="form-control <?= (form_error('prov')) ? 'is-invalid' : '' ?>" name="prov" id="prov" autocomplete="off" value="<?= set_value('prov') ?>">
							<?= form_error('prov', '<div class="invalid-feedback">', '</div>') ?>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="noTlp" class="col-sm-2 col-form-label fw-bold">No. Telp Tumah/HP<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" class="form-control <?= (form_error('noTlp')) ? 'is-invalid' : '' ?>" name="noTlp" id="noTlp" autocomplete="off" value="<?= set_value('noTlp') ?>">
							<?= form_error('noTlp', '<div class="invalid-feedback">', '</div>') ?>
							<div class="form-text">Contoh: 081234567890</div>
						</div>
					</div>

					<div class="mb-3 row">
						<div class="col-sm-2"></div>
						<div class="col-sm-5">
							<p><span class="text-danger fw-bold">*</span>Wajib diisi</p>
						</div>
					</div>
				</div>

				<p class="card-title fs-6 mt-4">Asal Sekolah Pendaftar/Calon Peserta Didik Baru</p>
				<hr class="sidebar-divider">
				<div class="container ps-5 pe-5">
					<div class="mb-3 row">
						<label for="asalSMP" class="col-sm-2 col-form-label fw-bold">Asal SMP<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" class="form-control <?= (form_error('asalSMP')) ? 'is-invalid' : '' ?>" name="asalSMP" id="asalSMP" autocomplete="off" value="<?= set_value('asalSMP') ?>">
							<?= form_error('asalSMP', '<div class="invalid-feedback">', '</div>') ?>
						</div>
					</div>
					
					<div class="mb-3 row">
						<label for="thnLulusSMP" class="col-sm-2 col-form-label fw-bold">Tahun Lulus SMP<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" class="form-control <?= (form_error('thnLulusSMP')) ? 'is-invalid' : '' ?>" name="thnLulusSMP" id="thnLulusSMP" autocomplete="off" value="<?= set_value('thnLulusSMP') ?>">
							<?= form_error('thnLulusSMP', '<div class="invalid-feedback">', '</div>') ?>
							<div class="form-text">Jika lulus tahun ajaran 2019/2020, berarti hanya tulis 2020-nya saja</div>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="noPesertaUn" class="col-sm-2 col-form-label fw-bold">No. Peserta UN<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" class="form-control <?= (form_error('noPesertaUn')) ? 'is-invalid' : '' ?>" name="noPesertaUn" id="noPesertaUn" autocomplete="off" value="<?= set_value('noPesertaUn') ?>">
							<?= form_error('noPesertaUn', '<div class="invalid-feedback">', '</div>') ?>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="alamatSmp" class="col-sm-2 col-form-label fw-bold">Alamat SMP/MTs<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<textarea class="form-control <?= (form_error('alamatSmp')) ? 'is-invalid' : '' ?>" name="alamatSmp" id="alamatSmp" cols="10" rows="5"><?= set_value('alamatSmp') ?></textarea>
							<?= form_error('alamatSmp', '<div class="invalid-feedback">', '</div>') ?>
						</div>
					</div>

					<div class="mb-3 row">
						<div class="col-sm-2"></div>
						<div class="col-sm-5">
							<p><span class="text-danger fw-bold">*</span>Wajib diisi</p>
						</div>
					</div>
				</div>
				
				<p class="card-title fs-6 mt-4">Identitas Dan Alamat Orang Tua/Wali Calon Peserta Didik</p>
				<hr class="sidebar-divider">
				<div class="container ps-5 pe-5">
					<div class="mb-3 row">
						<label for="namaAyah" class="col-sm-2 col-form-label fw-bold">Nama Ayah<span class="text-danger">*</span> </label>
						<div class="col-sm-5">
							<input type="text" name="namaAyah" id="namaAyah" class="form-control <?= (form_error('namaAyah')) ? 'is-invalid' : '' ?>" autocomplete="off" value="<?= set_value('namaAyah') ?>">
							<?= form_error('namaAyah', '<div class="invalid-feedback">', '</div>') ?> 
						</div>
					</div>
					<div class="mb-3 row">
						<label for="namaIbu" class="col-sm-2 col-form-label fw-bold">Nama Ibu<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" name="namaIbu" id="namaIbu" class="form-control <?= (form_error('namaIbu')) ? 'is-invalid' : '' ?>" autocomplete="off" value="<?= set_value('namaIbu') ?>">
							<?= form_error('namaIbu', '<div class="invalid-feedback">', '</div>') ?> 
						</div>
					</div>
					<div class="mb-3 row">
						<label for="namaWali" class="col-sm-2 col-form-label fw-bold">Nama Wali (kalau ada)</label>
						<div class="col-sm-5">
							<input type="text" name="namaWali" id="namaWali" class="form-control" autocomplete="off"> 
						</div>
					</div>

					<div class="mb-3 row">
						<label class="col-sm-2 col-form-label fw-bold" for="alamat">Alamat<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<textarea class="form-control <?= (form_error('alamatOrtu')) ? 'is-invalid' : '' ?>" name="alamatOrtu" id="alamatOrtu" cols="10" rows="5">
								<?= set_value('alamatOrtu') ?>
							</textarea>
							<?= form_error('alamatOrtu', '<div class="invalid-feedback">', '</div>') ?>
						</div>
						<div class="col">
							<div class="row">
								<label class="col-sm-2 col-form-label fw-bold" for="rtOrtu">RT<span class="text-danger">*</span></label>
									<div class="col-sm-2">
										<input type="text" class="form-control <?= (form_error('rtOrtu')) ? 'is-invalid' : '' ?>" id="rtOrtu" name="rtOrtu" autocomplete="off" value="<?= set_value('rtOrtu') ?>">
										<?= form_error('rtOrtu', '<div class="invalid-feedback">', '</div>') ?>
									</div>
								<label class="col-sm-2 col-form-label fw-bold" for="rwOrtu">RW<span class="text-danger">*</span></label>
									<div class="col-sm-2">
										<input type="text" class="form-control <?= (form_error('rwOrtu')) ? 'is-invalid' : '' ?>" id="rwOrtu" name="rwOrtu" autocomplete="off" value="<?= set_value('rwOrtu') ?>">
										<?= form_error('rwOrtu', '<div class="invalid-feedback">', '</div>') ?>
									</div>								
							</div>
						</div>
					</div>

					<div class="mb-3 row">
						<label class="col-sm-2 col-form-label fw-bold" for="desaOrtu">Kelurahan/Desa<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" class="form-control <?= (form_error('desaOrtu')) ? 'is-invalid' : '' ?>" name="desaOrtu" id="desaOrtu" autocomplete="off" value="<?= set_value('desaOrtu') ?>">
							<?= form_error('desaOrtu', '<div class="invalid-feedback">', '</div>') ?>
						</div>
						<label class="col-sm-1 col-form-label fw-bold" for="posOrtu">Kode Pos<span class="text-danger">*</span></label>
						<div class="col-sm-2">
							<input type="text" class="form-control <?= (form_error('posOrtu')) ? 'is-invalid' : '' ?>" name="posOrtu" id="posOrtu" autocomplete="off" value="<?= set_value('posOrtu') ?>">
							<?= form_error('posOrtu', '<div class="invalid-feedback">', '</div>') ?>
						</div>
					</div>
					
					<div class="mb-3 row">
						<label for="kecamatanOrtu" class="col-sm-2 col-form-label fw-bold">Kecamatan<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" class="form-control <?= (form_error('kecamatanOrtu')) ? 'is-invalid' : '' ?>" name="kecamatanOrtu" id="kecamatanOrtu" autocomplete="off" value="<?= set_value('kecamatanOrtu') ?>">
							<?= form_error('kecamatanOrtu', '<div class="invalid-feedback">', '</div>') ?>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="kabOrtu" class="col-sm-2 col-form-label fw-bold">Kabupaten<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" class="form-control <?= (form_error('kabOrtu')) ? 'is-invalid' : '' ?>" name="kabOrtu" id="kabOrtu" autocomplete="off" value="<?= set_value('kabOrtu') ?>">
							<?= form_error('kabOrtu', '<div class="invalid-feedback">', '</div>') ?>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="provOrtu" class="col-sm-2 col-form-label fw-bold">Provinsi<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" class="form-control <?= (form_error('provOrtu')) ? 'is-invalid' : '' ?>" name="provOrtu" id="provOrtu" autocomplete="off" value="<?= set_value('provOrtu') ?>">
							<?= form_error('provOrtu', '<div class="invalid-feedback">', '</div>') ?>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="noTlpOrtu" class="col-sm-2 col-form-label fw-bold">No. Telp Rumah/HP<span class="text-danger">*</span></label>
						<div class="col-sm-5">
							<input type="text" class="form-control <?= (form_error('noTlpOrtu')) ? 'is-invalid' : '' ?>" name="noTlpOrtu" id="noTlpOrtu" autocomplete="off" value="<?= set_value('noTlpOrtu') ?>">
							<?= form_error('noTlpOrtu', '<div class="invalid-feeback">', '</div>') ?>
							<div class="form-text">Contoh: 081234567890</div>
						</div>
					</div>
				</div>

				<div class="container ps-5 pe-5">
					<div class="mb-3 row">
						<div class="col-sm-2"></div>
						<div class="col-sm-7">
							<div class="form-check">
								<input type="checkbox" class="form-check-input <?= (form_error('checkOrtu')) ? 'is-invalid' : '' ?>" id="checkOrtu" name="checkOrtu" value="y">
								<label class="form-check-label" for="checkOrtu">Telah diketahui oleh Orang Tua/Wali Calon Peserta Didik Baru<span class="text-danger">*</span></label>
								<?= form_error('checkOrtu', '<div class="invalid-feedback">', '</div>') ?>
								<div class="form-text">Pastikan Orang Tua/Wali Anda telah mengetahui dan menyetujui saat akan mendaftar</div>
							</div>
						</div>
					</div>
					
					<div class="mb-3 row">
						<div class="col-sm-2"></div>
						<div class="col-sm-5">
							<button type="submit" class="btn mt-3 btn-success ps-4 pe-4">Daftar</button>
							<p class="mt-2"><span class="text-danger fw-bold">*</span>Wajib diisi</p>
						</div>
					</div>
				</div>
			</form>

		 </div>
	 </div>

</div>
<!-- /.container-fluid -->
