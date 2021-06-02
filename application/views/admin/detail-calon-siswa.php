	<div class="container-fluid bg-gray-200 mt-2">
		<div class="container"  style="padding-top: 5px;">
			<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
				<ol class="breadcrumb bg-transparent" style="padding-bottom: 10px;">
					<li class="breadcrumb-item"><a class="text-primary-2" href="<?= base_url('panitia'); ?>">Beranda</a></li>
					<?php if($this->uri->segment(4)): ?>
						<li class="breadcrumb-item"><a class="text-primary-2" href="<?= base_url('panitia/listCalonSiswa') ?>">Verifikasi Siswa</a></li>
					<?php else: ?>
						<li class="breadcrumb-item"><a class="text-primary-2" href="<?= base_url('panitia/listSiswaBaru') ?>">List Siswa</a></li>
					<?php endif; ?>
					<li class="breadcrumb-item	active" aria-current="page">Detail</li>
				</ol>
			</nav>	 
		</div>
	</div>	
	<!-- Begin Page Content -->
	<div class="container-fluid mt-4">
     	<!-- Page Heading -->
		<div class="container">
			<h1 class="h3 mb-4 text-dark">Detail</h1>
	 	</div>

		<div class="row">
			<!-- untuk foto -->
			<div class="col-md-3">
				<div class="card border-top-primary">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<img src="<?= base_url('assets/upload/' . $calonSiswa['pasFoto']) ?>" alt="pas foto" class="w-100 h-100">
							</div>
						</div>
						<!-- ijazah -->
						<div class="row mt-3">
							<div class="col-sm-7">
								<label for="fileIjazah" class="fw-bold">File Ijazah</label>
							</div>
							<div class="col-sm-5">
								<div class="row align-content-center">
									<div class="col-sm-3">
										<a href="<?= base_url('assets/upload/' . $calonSiswa['fileIjazah']) ?>" target="_blank" class="btn btn-primary" title="Lihat"><i class="bi bi-eye"></i></a>
									</div>
									<div class="col-sm-3">
										<a href="<?= base_url('assets/upload/' . $calonSiswa['fileIjazah']) ?>" download="<?= $calonSiswa['fileIjazah'] ?>" class="btn btn-warning ms-4" title="Download"><i class="bi bi-download"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- akte -->
						<div class="row mt-3">
							<div class="col-sm-7">
								<label for="fileAkte" class="fw-bold">File Akte</label>
							</div>
							<div class="col-sm-5">
								<div class="row align-content-center">
									<div class="col-sm-3">
										<a href="<?= base_url('assets/upload/' . $calonSiswa['fileAkte']) ?>" target="_blank" class="btn btn-primary" title="Lihat"><i class="bi bi-eye"></i></a>
									</div>
									<div class="col-sm-3">
										<a href="<?= base_url('assets/upload/' . $calonSiswa['fileAkte']) ?>" download="<?= $calonSiswa['fileAkte'] ?>" class="btn btn-warning ms-4" title="Download"><i class="bi bi-download"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- kk -->
						<div class="row mt-3">
							<div class="col-sm-7">
								<label for="fileKK" class="fw-bold">File KK</label>
							</div>
							<div class="col-sm-5">
								<div class="row align-content-center">
									<div class="col-sm-3">
										<a href="<?= base_url('assets/upload/' . $calonSiswa['fileKK']) ?>" target="_blank" class="btn btn-primary" title="Lihat"><i class="bi bi-eye"></i></a>
									</div>
									<div class="col-sm-3">
										<a href="<?= base_url('assets/upload/' . $calonSiswa['fileKK']) ?>" download="<?= $calonSiswa['fileKK'] ?>" class="btn btn-warning ms-4" title="Download"><i class="bi bi-download"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- file KIP PKH KIS SKTM -->
						<div class="row mt-3">
							<div class="col-sm-7">
								<label for="fileTambahan" class="fw-bold">File KIP/PKH/KPS/KIS</label>
							</div>
							<div class="col-sm-5">
							<?php if(!is_null($calonSiswa['fileTambahan'])): ?>
								<div class="row align-content-center">
									<div class="col-sm-3">
										<a href="<?= base_url('assets/upload/' . $calonSiswa['fileTambahan']) ?>" target="_blank" class="btn btn-primary" title="Lihat"><i class="bi bi-eye"></i></a>
									</div>
									<div class="col-sm-3">
										<a href="<?= base_url('assets/upload/' . $calonSiswa['fileTambahan']) ?>" download="<?= $calonSiswa['fileTambahan'] ?>" class="btn btn-warning ms-4" title="Download"><i class="bi bi-download"></i></a>
									</div>
								</div>
							<?php else: ?>
								<p class="fst-italic">File tidak tersedia</p>
							<?php endif; ?>
							</div>
						</div>
						<!-- File SKKB -->
						<div class="row mt-3">
							<div class="col-sm-7">
								<label for="fileSKKB" class="fw-bold">File SKKB</label>
							</div>
							<div class="col-sm-5">
							<?php if(!is_null($calonSiswa['fileSKKB'])): ?>
								<div class="row align-content-center">
									<div class="col-sm-3">
										<a href="<?= base_url('assets/upload/' . $calonSiswa['fileSKKB']) ?>" target="_blank" class="btn btn-primary" title="Lihat"><i class="bi bi-eye"></i></a>
									</div>
									<div class="col-sm-3">
										<a href="<?= base_url('assets/upload/' . $calonSiswa['fileSKKB']) ?>" download="<?= $calonSiswa['fileSKKB'] ?>" class="btn btn-warning ms-4" title="Download"><i class="bi bi-download"></i></a>
									</div>
								</div>
							<?php else: ?>
								<p class="fst-italic">File tidak tersedia</p>
							<?php endif; ?>
							</div>
						</div>
						<!-- File suket sehat -->
						<div class="row mt-3">
							<div class="col-sm-7">
								<label for="fileSuketSehat" class="fw-bold">File Surat Keterangan Sehat</label>
							</div>
							<div class="col-sm-5">
							<?php if(!is_null($calonSiswa['fileSuketSehat'])): ?>
								<div class="row align-content-center">
									<div class="col-sm-3">
										<a href="<?= base_url('assets/upload/' . $calonSiswa['fileSuketSehat']) ?>" target="_blank" class="btn btn-primary" title="Lihat"><i class="bi bi-eye"></i></a>
									</div>
									<div class="col-sm-3">
										<a href="<?= base_url('assets/upload/' . $calonSiswa['fileSuketSehat']) ?>" download="<?= $calonSiswa['fileSuketSehat'] ?>" class="btn btn-warning ms-4" title="Download"><i class="bi bi-download"></i></a>
									</div>
								</div>
							<?php else: ?>
								<p class="fst-italic">File tidak tersedia</p>
							<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- content informasi -->
			<div class="col-md ms-3">
				<div class="card border-top-primary">
					<div class="card-body">
						<nav>
							<div class="nav nav-tabs" id="nav-tab" role="tablist">
								<button class="nav-link active" id="nav-profil-tab" data-bs-toggle="pill" data-bs-target="#nav-profil" type="button" role="tab" aria-controls="nav-profil" aria-selected="true">Data Diri</button>

								<button class="nav-link" id="nav-asal-sekolah-tab" data-bs-toggle="pill" data-bs-target="#nav-sekolah" type="button" role="tab" aria-controls="nav-sekolah" aria-selected="false">Asal Sekolah</button>
								
								<button class="nav-link" id="nav-keluarga-tab" data-bs-toggle="pill" data-bs-target="#nav-keluarga" type="button" role="tab" aria-controls="nav-keluarga" aria-selected="false">Keluarga</button>
							</div>
						</nav>

						<div class="tab-content" id="nav-tabContent">
							<!-- tab data diri calon siswa -->
							<div class="tab-pane fade show active" id="nav-profil" role="tabpanel" aria-labelledby="nav-profil-tab">
								<div class="row mt-4">
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-5">
												<p class="fw-bold">No Registrasi</p>
											</div>
											<div class="col-sm-5">
												<p>: <?= $calonSiswa['noRegis'] ?></p>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<p class="fw-bold">Tanggal Registrasi</p>
											</div>
											<div class="col-sm-5">
												<p>: <?= date('d-m-Y', strtotime($calonSiswa['tglRegis'])) ?></p>
											</div>
										</div>
									</div>
								</div>

								<!-- jurusan -->
								<div class="row mt-4">
									<div class="row">
										<div class="col">
											<p class="card-title fs-6">Pilihan Kompetensi/Jurusan</p>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="row">
												<div class="col-sm-5">
													<p class="fw-bold">Jurusan</p>
												</div>
												<div class="col-sm-7">
													<p>: <?= $calonSiswa['jurusan'] ?></p>
												</div>
											</div>
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
										<div class="col-sm-6">
											<div class="row">
												<div class="col-sm-5">
													<p class="fw-bold">Nama Lengkap</p>
												</div>
												<div class="col-sm-5">
													<p>: <?= $calonSiswa['nama'] ?></p>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<p class="fw-bold">Jenis Kelamin</p>
												</div>
												<div class="col-sm-5">
													<p>: <?= ($calonSiswa['jnKelamin'] == 'L') ? 'Laki-laki' : 'Perempuan' ?></p>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<p class="fw-bold">NISN</p>
												</div>
												<div class="col-sm-5">
													<p>: <?= $calonSiswa['nisn'] ?></p>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<p class="fw-bold">Tempat Lahir</p>
												</div>
												<div class="col-sm-5">
													<p>: <?= $calonSiswa['tmLahir'] ?></p>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<p class="fw-bold">Tanggal Lahir</p>
												</div>
												<div class="col-sm-5">
													<p>: <?= date('d-M-Y', strtotime($calonSiswa['tgLahir'])) ?></p>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<p class="fw-bold">Agama</p>
												</div>
												<div class="col-sm-5">
													<p>: <?= $calonSiswa['agama'] ?></p>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<p class="fw-bold">No Telp/Rumah</p>
												</div>
												<div class="col-sm-5">
													<p>: <?= $calonSiswa['noTlp']?></p>
												</div>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="row">
												<div class="col-sm-5">
													<p class="fw-bold">Alamat</p>
												</div>
												<div class="col-sm-7">
													<p>: <?= $calonSiswa['alamat'] ?></p>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<p class="fw-bold">RT/RW</p>
												</div>
												<div class="col-sm-5">
													<p>: <?= $calonSiswa['rt'] . '/' . $calonSiswa['rw'] ?></p>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<p class="fw-bold">Kelurahan/desa</p>
												</div>
												<div class="col-sm-5">
													<p>: <?= $calonSiswa['desa']?></p>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<p class="fw-bold">Kode POS</p>
												</div>
												<div class="col-sm-5">
													<p>: <?= $calonSiswa['pos']?></p>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<p class="fw-bold">Kecamatan</p>
												</div>
												<div class="col-sm-5">
													<p>: <?= $calonSiswa['kecamatan']?></p>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<p class="fw-bold">Kabupaten</p>
												</div>
												<div class="col-sm-5">
													<p>: <?= $calonSiswa['kab']?></p>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-5">
													<p class="fw-bold">Provinsi</p>
												</div>
												<div class="col-sm-5">
													<p>: <?= $calonSiswa['prov']?></p>
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
									<div class="col-sm-7">
										<div class="row">
											<div class="col-sm-5">
												<p class="fw-bold">Asal SMP/MTs</p>
											</div>
											<div class="col-sm-5">
												<p>: <?= $calonSiswa['asalSMP'] ?></p>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<p class="fw-bold">Tahun Lulus SMP/MTs</p>
											</div>
											<div class="col-sm-5">
												<?php $tahun = (int)$calonSiswa['thnLulusSMP'] - 1; ?>
												<p>: <?= $tahun . '/' . $calonSiswa['thnLulusSMP'] ?></p>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<p class="fw-bold">Nomor Peserta UN</p>
											</div>
											<div class="col-sm-5">
												<p>: <?= $calonSiswa['noPesertaUn'] ?></p>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<p class="fw-bold">Alamat SMP/MTs</p>
											</div>
											<div class="col-sm-7">
												<p>: <?= $calonSiswa['alamatSmp'] ?></p>
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
											<p class="card-title fs-6">Identitas dan Alamat Orang Tua/Wali Calon Peserta Didik Baru</p>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-5">
												<p class="fw-bold">Nama Ayah</p>
											</div>
											<div class="col-sm-5">
												<p>: <?= $calonSiswa['namaAyah'] ?></p>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<p class="fw-bold">Nama Ibu</p>
											</div>
											<div class="col-sm-5">
												<p>: <?= $calonSiswa['namaIbu'] ?></p>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<p class="fw-bold">Nama Wali</p>
											</div>
											<div class="col-sm-5">
												<?php if(is_null($calonSiswa['namaWali'])): ?>
													<p>: <span>-</span></p>
												<?php else: ?>
													<p>: <?= $calonSiswa['namaWali'] ?></p>
												<?php endif; ?>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<p class="fw-bold">No. Telp/Rumah</p>
											</div>
											<div class="col-sm-5">
												<p>: <?= $calonSiswa['noTlpOrtu'] ?></p>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<p class="fw-bold">Alamat</p>
											</div>
											<div class="col-sm-7">
												<p>: <?= $calonSiswa['alamatOrtu'] ?></p>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<p class="fw-bold">RT/RW</p>
											</div>
											<div class="col-sm-5">
												<p>: <?= $calonSiswa['rtOrtu'] . '/' . $calonSiswa['rwOrtu'] ?></p>
											</div>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-5">
												<p class="fw-bold">Kelurahan/desa</p>
											</div>
											<div class="col-sm-5">
												<p>: <?= $calonSiswa['desaOrtu'] ?></p>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<p class="fw-bold">Kode POS</p>
											</div>
											<div class="col-sm-5">
												<p>: <?= $calonSiswa['posOrtu'] ?></p>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<p class="fw-bold">Kecamatan</p>
											</div>
											<div class="col-sm-5">
												<p>: <?= $calonSiswa['kecamatanOrtu'] ?></p>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<p class="fw-bold">Kabupaten</p>
											</div>
											<div class="col-sm-5">
												<p>: <?= $calonSiswa['kabOrtu'] ?></p>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<p class="fw-bold">Provinsi</p>
											</div>
											<div class="col-sm-5">
												<p>: <?= $calonSiswa['provOrtu'] ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php if($this->session->userdata('role') == 'panitia'): ?>
						<?php if($calonSiswa['statusApprove'] == 'bt'):  ?>
							<div class="card-footer">
								<div class="row">
									<div class="col">
										<p class="card-text fw-bold">Apakah anda menerima dan menyetujui pendaftaran ini?</p>
									</div>
									<div class="col">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary-2" data-bs-toggle="modal" data-bs-target="#modalKonfirmYa">
											<i class="bi bi-check-circle"></i> Ya
										</button>
										<button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#modalKonfirmTidak">
											<i class="bi bi-x-circle"></i> Tidak
										</button>
									</div>
								</div>
							</div>
						<?php endif;  ?>
					<?php endif; ?>
					<?php if($calonSiswa['statusApprove'] == 'n'):  ?>
						<div class="card-footer">
							<div class="row">
								<div class="col">
									<p class="card-text text-danger"><i class="bi bi-patch-exclamation-fill text-danger"></i> Dinyatakan tidak lolos tahap verifikasi berkas.</p>
								</div>
							</div>
						</div>
					<?php elseif($calonSiswa['statusApprove'] == 'y'):  ?>
						<div class="card-footer">
							<div class="row">
								<div class="col">
									<p class="card-text text-primary-2"><i class="bi bi-patch-check-fill text-primary-2"></i> Dinyatakan lolos tahap verifikasi berkas.</p>
								</div>
							</div>
						</div>
					<?php endif;  ?>
				</div>
			</div>
		</div>
	</div>
<!-- /.container-fluid -->


<!-- Modal Konfirmasi YA -->
<div class="modal fade" id="modalKonfirmYa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKonfirmYaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="border:none;"> 
        <h5 class="modal-title" id="modalKonfirmYaLabel">Tulis Pesan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="fpesan" action="<?= base_url('panitia/konfirm') ?>" method="post">
			<div class="mb-3">
				<input type="hidden" name="noRegis" id="noRegis" value="<?= $calonSiswa['noRegis'] ?>">
				<input type="hidden" name="penerima" id="penerima" value="<?= $calonSiswa['username'] ?>">
				<input type="hidden" name="word" id="word" value="y">
				<textarea class="form-control" id="message" name="message" rows="3" required placeholder="Tulis pesan kepada Calon Siswa"></textarea>
			</div>
		</form>
      </div>
      <div class="modal-footer" style="border: none;">
        <button type="submit" form="fpesan" class="btn btn-primary"><i class="bi bi-symmetry-horizontal"></i>&nbsp;Kirim!</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Konfirmasi TIDAK -->
<div class="modal fade" id="modalKonfirmTidak" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKonfirmTidakLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="border:none;"> 
        <h5 class="modal-title" id="modalKonfirmTidakLabel">Tulis Pesan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="fpesanTidak" action="<?= base_url('panitia/konfirm') ?>" method="post">
			<div class="mb-3">
				<input type="hidden" name="noRegis" id="noRegis" value="<?= $calonSiswa['noRegis'] ?>">
				<input type="hidden" name="penerima" id="penerima" value="<?= $calonSiswa['username'] ?>">
				<input type="hidden" name="word" id="word" value="n">
				<textarea class="form-control" id="message" name="message" rows="3" required placeholder="Jelaskan alasan mengapa Calon Siswa tesebut tidak lolos tahap verifikasi berkas..."></textarea>
			</div>
		</form>
      </div>
      <div class="modal-footer" style="border: none;">
        <button type="submit" form="fpesanTidak" class="btn btn-primary"><i class="bi bi-symmetry-horizontal"></i>&nbsp;Kirim!</button>
      </div>
    </div>
  </div>
</div>

