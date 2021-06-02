<div class="container-fluid bg-gray-200 mt-2">
	<div class="container"  style="padding-top: 5px;">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent" style="padding-bottom: 10px;">
				<li class="breadcrumb-item"><a class="text-primary-2" href="<?= base_url('siswa'); ?>">Beranda</a></li>
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

	<div class="card border-top-primary">
		<div class="card-header">
			<h5 class="card-title"><i class="bi bi-shield-lock"></i> Password</h5>
		</div>
		<div class="card-body">
			<form action="" method="post">
				<div class="row g-3">
					<div class="col">
						<label for="passLama" class="form-label text-capitalize">password sekarang</label>
						<input type="password" autocomplete="off" name="passLama" id="passLama" class="form-control <?= form_error(('passLama')) ? 'is-invalid' : '' ?>">
						<?= form_error('passLama', '<div class="invalid-feedback"><i class="bi bi-exclamation-circle"></i> ', '</div>') ?>
					</div>
					<div class="col">
						<label for="passBaru" class="form-label text-capitalize">password baru</label>
						<input type="password" autocomplete="off" class="form-control <?= form_error(('passBaru')) ? 'is-invalid' : '' ?>" name="passBaru" id="passBaru">
						<?= form_error('passBaru', '<div class="invalid-feedback"><i class="bi bi-exclamation-circle"></i> ', '</div>') ?>
					</div>
					<div class="col">
						<label for="passBaru2" class="form-label text-capitalize">konfirmasi password baru</label>
						<input type="password" autocomplete="off" class="form-control <?= form_error(('passBaru')) ? 'is-invalid' : '' ?>" name="passBaru2" id="passBaru2">
						<?= form_error('passBaru2', '<div class="invalid-feedback"><i class="bi bi-exclamation-circle"></i> ', '</div>') ?>
					</div>
				</div>
				<button type="submit" class="btn btn-primary-2 mt-4">Simpan</button>
			</form>
		</div>
	</div>
 </div>
