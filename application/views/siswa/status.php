 <!-- buat nampung data alert -->
<?php if($this->session->flashdata('welcome')): ?>
	<div class="flash-data" data-flash="<?= $this->session->flashdata('welcome');?>"></div>
<?php unset($_SESSION['welcome']);
endif; ?>

<div class="container-fluid bg-gray-200 mt-2">
	<div class="container"  style="padding-top: 5px;">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent" style="padding-bottom: 10px;">
				<li class="breadcrumb-item"><a class="text-primary-2" href="<?= base_url('siswa'); ?>">Beranda</a></li>
				<li class="breadcrumb-item active" aria-current="page">Status</li>
			</ol>
		</nav>
	</div>
</div>

 <!-- Begin Page Content -->
 <div class="container-fluid mt-4">
	 <div class="container">
		<h1 class="h3 mb-4 text-dark">Status</h1>
	 </div>
	 <div class="card border-top-primary">
 		<div class="card-header">
 			<h5 class="card-title text-capitalize fw-600 text-start">status pendaftaran</h5>
		 </div>
		 <div class="card-body">
			<div class="status-box">
				<?php if(($calonSiswa['statusApprove'] == 'y') || ($calonSiswa['statusApprove'] == 'n') ): ?>
					<div class="row">
						<div class="col-md-6">
						   <div class="row">
							   <div class="col-sm-1">
								   <i class="bi bi-gear-fill text-primary-2 fa-2x"></i>
							   </div>
							   <div class="col-md-11">
								   <span class="card-text text-start text-primary-2 fw-bold">Sistem -
								   <?php
									   if (date('l', strtotime($calonSiswa['tglApprove'])) == 'Sunday') {
										   echo 'Minggu, '. date('j M Y', strtotime($calonSiswa['tglApprove']));
									   } elseif (date('l', strtotime($calonSiswa['tglApprove'])) == 'Monday') {
										   echo 'Senin, '. date('j M Y', strtotime($calonSiswa['tglApprove']));
									   } elseif (date('l', strtotime($calonSiswa['tglApprove'])) == 'Tuesday') {
										   echo 'Selasa, '. date('j M Y', strtotime($calonSiswa['tglApprove']));
									   } elseif (date('l', strtotime($calonSiswa['tglApprove'])) == 'Wednesday') {
										   echo 'Rabu, '. date('j M Y', strtotime($calonSiswa['tglApprove']));
									   } elseif (date('l', strtotime($calonSiswa['tglApprove'])) == 'Thursday') {
										   echo 'Kamis, '. date('j M Y', strtotime($calonSiswa['tglApprove']));
									   } elseif (date('l', strtotime($calonSiswa['tglApprove'])) == 'Friday') {
										   echo 'Jumat, '. date('j M Y', strtotime($calonSiswa['tglApprove']));
									   } elseif (date('l', strtotime($calonSiswa['tglApprove'])) == 'Saturday') {
										   echo 'Sabtu, '. date('j M Y', strtotime($calonSiswa['tglApprove']));
									   }
								   ?>
								   </span>
								   <?php if($calonSiswa['statusApprove'] == 'n'): ?>
										<p class="card-text">
											Maaf, Anda <span class="text-danger fw-bold">dinyatakan tidak lolos pada tahap seleksi berkas.</span> Tetapi jangan khawatir, <span class="fw-bold">Anda dapat mendaftarkan diri kembali</span> jika persyaratan yang ditentukan telah benar dan sesuai. <a href="<?= base_url('siswa/pesan/'.$calonSiswa['noRegis']); ?>">Untuk info lebih lanjut, silakan klik di sini.</a>
										</p>
									<?php elseif($calonSiswa['statusApprove'] == 'y'): ?>
										<p class="card-text">
											Selamat! Anda <span class="text-success-2 fw-bold">dinyatakan lolos pada tahap seleksi berkas.</span> Jangan lupa untuk membawa bukti pendaftaran Anda pada saat akan mendaftar ulang.
										</p>
									<?php endif; ?>
							   </div>
							</div>
						</div>
						<div class="col-md-6">
							<p class="card-text text-end"><?= date('H:i:s', strtotime($calonSiswa['tglApprove'])) .' WIB' ?></p>
						</div>
					</div>
				<?php endif; ?>
 				<div class="row mt-2">
					 <div class="col-md-6">
						<div class="row">
							<div class="col-sm-1">
								<i class="bi bi-gear-fill fa-2x <?= ($calonSiswa['tglApprove'])? '' : 'text-primary-2' ?>"></i>
							</div>
							<div class="col-md-11">
								<span class="card-text fw-600 text-start <?= ($calonSiswa['tglApprove'])? '' : 'text-primary-2' ?>">Sistem -
								<?php
									if (date('l', strtotime($calonSiswa['tglRegis'])) == 'Sunday') {
										echo 'Minggu, '. date('j M Y', strtotime($calonSiswa['tglRegis']));
									} elseif (date('l', strtotime($calonSiswa['tglRegis'])) == 'Monday') {
										echo 'Senin,'. date('j M Y', strtotime($calonSiswa['tglRegis']));
									} elseif (date('l', strtotime($calonSiswa['tglRegis'])) == 'Tuesday') {
										echo 'Selasa,'. date('j M Y', strtotime($calonSiswa['tglRegis']));
									} elseif (date('l', strtotime($calonSiswa['tglRegis'])) == 'Wednesday') {
										echo 'Rabu,'. date('j M Y', strtotime($calonSiswa['tglRegis']));
									} elseif (date('l', strtotime($calonSiswa['tglRegis'])) == 'Thursday') {
										echo 'Kamis,'. date('j M Y', strtotime($calonSiswa['tglRegis']));
									} elseif (date('l', strtotime($calonSiswa['tglRegis'])) == 'Friday') {
										echo 'Jumat,'. date('j M Y', strtotime($calonSiswa['tglRegis']));
									} elseif (date('l', strtotime($calonSiswa['tglRegis'])) == 'Saturday') {
										echo 'Sabtu,'. date('j M Y', strtotime($calonSiswa['tglRegis']));
									}
								?>
								</span>
								<p class="card-text">
									Data pendaftaran Anda telah tersimpan, saat ini Panitia PPDB sedang melakukan proses verifikasi berkas.
								</p>
							</div>
						 </div>
					 </div>
					 <div class="col-md-6">
					 	<p class="card-text text-end"><?= date('H:i:s', strtotime($calonSiswa['tglRegis'])) .' WIB' ?></p>
					 </div>
				</div>
				<?php if($calonSiswa['statusApprove'] == 'y'): ?>
					<div class="row mt-3 ps-3 justify-content-end">
						<div class="col-md-3 ps-4 ms-4 text-end">
							<a href="<?= base_url('siswa/unduh/')  . $calonSiswa['noRegis'] ?>" class="btn btn-md btn-primary-2"><i class="bi bi-download"></i> Unduh bukti pendaftaran</a>
						</div>
					</div>
				<?php endif; ?>
			</div>
		 </div>
	 </div>
	 <?php if($this->session->flashdata('welcome')): ?>
	 <!-- buat nampung data alert -->
	 <div class="flash-data" data-flash="<?= $this->session->flashdata('welcome');?>"></div>
	 <?php unset($_SESSION['welcome']);
	  endif; ?>
</div>
<!-- /.container-fluid -->
