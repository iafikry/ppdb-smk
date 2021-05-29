<div class="container-fluid bg-gray-200 mt-4">
	<div class="container"  style="padding-top: 5px;">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent" style="padding-bottom: 10px;">
				<li class="breadcrumb-item"><a class="text-success-2" href="<?= base_url('siswa'); ?>">Beranda</a></li>
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

	<div class="card shadow-sm border-top-success col-7 ">
		<div class="card-header">
			<h5 class="card-title"><i class="bi bi-shield-lock"></i> Password</h5>
		</div>
		<div class="card-body">
			<form action="" method="post">
				<div class="mb-3">
					<label for="formGroupExampleInput" class="form-label">Example label</label>
					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
				</div>
				<div class="mb-3">
					<label for="formGroupExampleInput2" class="form-label">Another label</label>
					<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
				</div>
				<button type="submit" class="btn btn-success mt-4">Simpan</button>
			</form>
		</div>
	</div>
 </div>
