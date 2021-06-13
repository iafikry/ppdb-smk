<div class="container-fluid bg-gray-200 mt-2">
	<div class="container" style="padding-top: 5px">
		<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent" style="padding-bottom: 10px">
				<li class="breadcrumb-item">
					<a class="text-primary-2" href="<?= base_url('panitia') ?>">Beranda</a>
				</li>
				<li class="breadcrumb-item">
					<a class="text-primary-2" href="<?= base_url('panitia/prodi') ?>">Program Studi</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">
					Ubah Program Studi
				</li>
			</ol>
		</nav>
	</div>
</div>
<!-- Begin Page Content -->
<div class="container-fluid mt-4">
	<div class="container">
		<h1 class="h3 mb-4 text-dark">Ubah Program Studi</h1>
	</div>

	<div class="card border-top-primary">
		<div class="card-body">
			<form action="" method="post">
				<di class="row g-3 align-items-center">
					<div class="col-2">
						<label for="kode" class="form-label text-capitalize">kode Program Studi</label>
					</div>
					<div class="col-auto">
						<input type="text" autocomplete="off" readonly name="kode" id="kode" class="form-control-plaintext fw-bold" value="<?= $prodi['kode']; ?>">
					</div>
				</di>
				<div class="row g-3">
					<div class="col">
						<label for="nama" class="form-label text-capitalize">program studi</label>
						<input type="text" autocomplete="off" class="form-control <?= form_error(('nama')) ? 'is-invalid' : '' ?>" name="nama" id="nama" value="<?= $prodi['jurusan'] ?>">
						<?= form_error('nama', '<div class="invalid-feedback"><i class="bi bi-exclamation-circle"></i> ', '</div>') ?>
					</div>
					<div class="col">
						<label for="kuota" class="form-label text-capitalize">kuota siswa</label>
						<input type="text" autocomplete="off" class="form-control <?= form_error(('kuota')) ? 'is-invalid' : '' ?>" name="kuota" id="kuota" value="<?= $prodi['kuota'] ?>">
						<?= form_error('kuota', '<div class="invalid-feedback"><i class="bi bi-exclamation-circle"></i> ', '</div>') ?>
					</div>
				</div>
				<button type="submit" class="btn btn-primary-2 mt-4">Simpan</button>
			</form>
		</div>
	</div>
</div>
