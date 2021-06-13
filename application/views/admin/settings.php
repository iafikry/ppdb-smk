<div class="container-fluid bg-gray-200 mt-2">
	<div class="container"  style="padding-top: 5px;">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent" style="padding-bottom: 10px;">
				<li class="breadcrumb-item"><a class="text-primary-2" href="<?= base_url('panitia'); ?>">Beranda</a></li>
				<li class="breadcrumb-item active" aria-current="page">Pengaturan</li>
			</ol>
		</nav>
	</div>
</div>
<!-- Begin Page Content -->
 <div class="container-fluid mt-4">
	 <div class="container">
		 <h1 class="h3 mb-4 text-dark">Pengaturan</h1>
	 </div>
	
	<div class="row justify-content-center mb-5">
		<div class="col-7">
			<div class="card border-top-primary">
				<div class="card-header">
					<h5 class="card-title"><i class="bi bi-person-fill"></i> Data Diri</h5>
				</div>
				<div class="card-body">
					<?php if($dataPanitia): ?>
						<!-- <p>ini form update data</p> -->
						<form id="fUpdate" action="" method="post">
							<input type="hidden" name="username" id="username" readonly value="<?= $pengguna['username']; ?>">
							<div class="mb-3">
								<label for="nip" class="form-label">NIP</label>
								<input type="text" class="form-control <?= (form_error('nip')) ? 'is-invalid' : '' ?>" id="nip" name="nip" autocomplete="off" value="<?= $dataPanitia['nip']; ?>" readonly>
								<?= form_error('nip', '<div class="invalid-feedback"><i class="bi bi-exclamation-circle"></i> ', '</div>') ?>
							</div>
							<div class="mb-3">
								<label for="nama" class="form-label">Nama</label>
								<input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" autocomplete="off" value="<?= $dataPanitia['panitia']; ?>">
								<?= form_error('nama', '<div class="invalid-feedback"><i class="bi bi-exclamation-circle"></i> ', '</div>') ?>
							</div>
							<button type="submit" form="fUpdate" value="fUpdate" name="btnFormUpdate" class="btn btn-primary-2 mt-4">Simpan</button>
						</form>
					<?php else: ?>
						<!-- <p>ini form tambah data</p> -->
						<form id="fTambah" action="<?= base_url('panitia/dataDiri/' . $this->session->userdata('username')) ?>" method="post">
							<input type="hidden" name="username" id="username" readonly value="<?= $pengguna['username']; ?>">
							<div class="mb-3">
								<label for="nip" class="form-label">NIP</label>
								<input type="text" class="form-control <?= (form_error('nip')) ? 'is-invalid' : '' ?>" id="nip" name="nip" autocomplete="off" value="<?= set_value('nip') ?>">
								<?= form_error('nip', '<div class="invalid-feedback"><i class="bi bi-exclamation-circle"></i> ', '</div>') ?>
							</div>
							<div class="mb-3">
								<label for="nama" class="form-label">Nama</label>
								<input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" autocomplete="off" value="<?= set_value('nama') ?>">
								<?= form_error('nama', '<div class="invalid-feedback"><i class="bi bi-exclamation-circle"></i> ', '</div>') ?>
							</div>
							<button type="submit" form="fTambah" class="btn btn-primary-2 mt-4">Simpan</button>
						</form>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
 </div>
