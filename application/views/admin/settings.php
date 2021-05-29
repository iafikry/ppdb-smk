<div class="container-fluid bg-gray-200 mt-4">
	<div class="container"  style="padding-top: 5px;">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent" style="padding-bottom: 10px;">
				<li class="breadcrumb-item"><a class="text-success-2" href="<?= base_url('panitia'); ?>">Beranda</a></li>
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
			<div class="card shadow-sm border-top-success">
				<div class="card-header">
					<h5 class="card-title"><i class="bi bi-person-fill"></i> Data Diri</h5>
				</div>
				<div class="card-body">
					<form action="" method="post">
						<input type="hidden" name="username" id="username" value="<?= $pengguna['username']; ?>">
						<div class="mb-3">
							<label for="nip" class="form-label">NIP</label>
							<input type="text" class="form-control" id="nip" name="nip" autocomplete="off">
						</div>
						<div class="mb-3">
							<label for="nama" class="form-label">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
						</div>
						<div class="mb-3">
							<label for="passLama" class="form-label">Password Lama</label>
							<input type="text" class="form-control" id="passLama" name="passLama" autocomplete="off">
						</div>
						<div class="mb-3">
							<label for="passBaru" class="form-label">Password Baru</label>
							<input type="text" class="form-control" id="passBaru" name="passBaru" autocomplete="off">
						</div>
						<div class="mb-3">
							<label for="passBaru2" class="form-label">Konfirmasi Password</label>
							<input type="text" class="form-control" id="passBaru2" name="passBaru2" autocomplete="off">
						</div>
						<button type="submit" class="btn btn-success mt-4">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
 </div>
