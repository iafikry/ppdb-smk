 <!-- Begin Page Content -->
 <?php if($this->session->flashdata('welcome')): ?>
	 <!-- buat nampung data alert -->
	 <div class="flash-data" data-flash="<?= $this->session->flashdata('welcome');?>"></div>
<?php unset($_SESSION['welcome']); endif; ?>
<div class="container-fluid mt-4">
	<div class="jumbotron border">
		<h1 class="display-4">Selamat datang!</h1>
		<p class="lead">Selamat datang di Sistem PPDB SMK IPTEK Sanggabuana Karawang Tahun Ajaran <?= date('Y') .'/'. date('Y', strtotime('+ 1 years')) ?> </p>
		<hr class="my-4">
		<p>Silakan klik tombol di bawah ini untuk info lebih lanjut mengenai sistem	</p>
		<a class="btn btn-primary-2" href="<?= base_url('siswa/guide') ?>" role="button">Pelajari lebih lanjut</a>
	</div>
	<div class="alert alert-success text-dark">
		<h5 class="fw-bold mb-4 text-capitalize fs-4 text-center">informasi Pendaftaran</h5>
		<ol>
			<li>
				Periode pendaftaran <strong>Gelombang 1</strong> dimulai pada tanggal <strong>12 Maret 2021 - 10 April 2021</strong>
			</li>
			<li>
				Periode pendaftaran <strong>Gelombang 2</strong> dimulai pada tanggal <strong>25 Mei 2021 - 31 Mei 2021</strong>
			</li>
			<li>
				<span class="fw-bold">Persyaratan Berkas:</span>
				<ol style="list-style-type: lower-alpha;">
					<li>Scan Pas Foto background merah ukuran 3x4 dan ukuran 4x6 (Format JPG/JPEG/PNG)<sup class="text-danger">*</sup></li>
					<li>Scan Ijazah/Surat Keterangan Lulus (Format PDF)<sup class="text-danger">*</sup></li>
					<li>Scan Akte (Format PDF)<sup class="text-danger">*</sup></li>
					<li>Scan Kartu Keluarga (Format PDF)<sup class="text-danger">*</sup></li>
					<li>Scan KIP/PKH/KPS/KIS/SKTM (Jika ada)</li>
					<li>Scan SKKB (Jika ada)</li>
					<li>Scan Surat Keterangan Sehat (Jika ada)</li>
				</ol>
			</li>
		</ol>
		<h6 class="text-uppercase ms-3 fw-bold">hubungi kami</h6>
			<ul class="list-unstyled ms-3">
				<li class="mb-1"><i class="bi bi-phone"></i> &nbsp; 0857-1410-0012 (Angga)</li>
				<li class="mb-1"><i class="bi bi-phone"></i> &nbsp; 0856-9370-0017 (Tia Andriani)</li>
				<li class="mb-1"><i class="bi bi-phone"></i> &nbsp; 0856-1068-0824 (Harry Priatna)</li>
 			</ul>
		<p class="mt-2"><span class="text-danger">*</span>Wajib ada.</p>
	</div>
</div>
