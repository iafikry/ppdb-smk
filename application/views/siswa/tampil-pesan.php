<div class="container-fluid bg-gray-200 mt-4">
	<div class="container"  style="padding-top: 5px;">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent" style="padding-bottom: 10px;">
				<li class="breadcrumb-item"><a class="text-success-2" href="<?= base_url('siswa'); ?>">Beranda</a></li>
				<li class="breadcrumb-item"><a class="text-success-2" href="<?= base_url('siswa/pesan/' . $cekUser['noRegis']) ?>">Pesan</a></li>
				<li class="breadcrumb-item active" aria-current="page">Detail</li>
			</ol>
		</nav>
	</div>
</div>
<!-- Begin Page Content -->
 <div class="container-fluid mt-4">
	 <div class="container">
		<h1 class="h3 mb-4 text-dark">Detail</h1>
	</div>
	 <div class="row justify-content-center">
		 <div class="col-md-7">
			 <div class="card shadow-sm border-top-success">
				 <div class="card-header" style="background-color: #fff !important;">
					 <h5 class="card-title">Pemberitahuan tentang status pendaftaran</h5>
					 <div class="row justify-content-between">
						 <div class="col-md-5">
							 <div class="card-text">From: <?= $pesan['pengirim'] ?></div>
						 </div>
						 <div class="col-md-5">
							 <div class="card-text float-end"><?= date('H:i:s d/m/Y', strtotime($pesan['waktuKirim'])) ?></div>
						 </div>
					 </div>
				 </div>
				 <div class="card-body">
					 <div class="card-text">
						 <?= $pesan['message'] ?>
						 <br>
						 <?php if($pesan['statusApprove'] == 'n'): ?>
							Apakah anda ingin mendaftarkan ulang diri anda?
							<form action="" method="post">
								<input type="hidden" name="noRegis" value="<?= $pesan['noRegis'] ?>">
								<div class="row mt-2 justify-content-start">
									<div class="col-sm-1">
										<button type="submit" class="btn btn-success">Ya!</button>
									</div>
									<div class="col-sm-1">
										<a href="<?= base_url('siswa/statusDaftar/'. $pesan['noRegis']) ?>" class="btn btn-md btn-danger">Tidak</a>
									</div>
								</div>
							</form>
						 <?php endif; ?>
					 </div>
				 </div>
			 </div>
		 </div>
	 </div>
 </div>
