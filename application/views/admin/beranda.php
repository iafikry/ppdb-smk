<?php if($this->session->flashdata('welcome')): ?>
	 <!-- buat nampung data alert -->
	 <div class="flash-data" data-flash="<?= $this->session->flashdata('welcome');?>"></div>
<?php unset($_SESSION['welcome']); endif; ?>

<div class="container-fluid mt-4">
	<div class="row justify-content-around">
		<div class="col-md-4 mb-4">
			<div class="card card-custom-primary shadow-sm" style="height: 12rem;">
				<div class="card-body">
					<div class="row pt-3 no-gutters align-items-center">
						<div class="col ms-2">
							<div class="fw-bold text-white">
								<h4 class="fs-3 fw-bold"><?= $totalSiswaDaftar->num_rows() ?></h4>
							</div>
							<div class="text-uppercase text-white mb-1">
								<p class="card-text fw-600">total calon siswa yang mendaftar</p>
							</div>
						</div>
						<div class="col-auto me-3">
							<i class="bi bi-people text-primary-2 fa-4x"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4 mb-4">
			<div class="card card-custom-primary shadow-sm" style="height: 12rem;">
				<div class="card-body">
					<div class="row pt-3 no-gutters align-items-center">
						<div class="col ms-2">
							<div class="mb-0">
								<h3 class="text-white fs-3 fw-bold"><?= $totalSiswaApprove->num_rows() ?></h3>
							</div>
							<div class="mb-1">
								<p class="card-text fw-600 text-white text-uppercase">calon siswa yang lolos verifikasi berkas</p>
							</div>
						</div>
						<div class="col-auto me-3">
							<i class="bi bi-people fa-4x text-primary-2"></i>
						</div>
					</div>
				</div>
				<div class="card-footer card-footer-primary text-center">
					<a href="<?= base_url('panitia/listSiswaBaru') ?>" class="card-text text-white">Lihat <i class="bi bi-folder-fill"></i></a>
				</div>
			</div>
		</div>

		<div class="col-md-4 mb-4">
			<div class="card card-custom-danger shadow-sm" style="height: 12rem;">
				<div class="card-body">
					<div class="row pt-3 no-gutters align-items-center">
						<div class="col ms-2">
							<div class="mb-0">
								<h3 class="fw-bold fs-3 text-white"><?= $totalSiswaTdkApprove->num_rows() ?></h3>
							</div>
							<div class="fw-600 text-uppercase mb-1">
								<p class="card-text text-white">calon siswa yang tidak lolos verifikasi berkas</p>
							</div>
						</div>
						<div class="col-auto me-3">
							<i class="bi bi-people fa-4x text-danger"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4 mb-4">
			<div class="card card-custom-warning shadow-sm" style="height: 12rem;">
				<div class="card-body">
					<div class="row pt-3 no-gutters align-items-center">
						<div class="col ms-2">
							<div class="mb-0 text-white">
								<h3 class="fs-3 fw-bold">
									<?= $siswaBelumApprove->num_rows() ?>
								</h3>
							</div>
							<div class="text-uppercase mb-1">
								<p class="card-text text-white fw-600">pendaftar yang belum dikonfirmasi</p>
							</div>
						</div>
						<div class="col-auto me-3">
							<i class="bi bi-people fa-4x text-warning"></i>
						</div>
					</div>
				</div>
				<div class="card-footer card-footer-warning text-center">
					<a href="<?= base_url('panitia/listCalonSiswa') ?>" class="card-text text-white">Lihat <i class="bi bi-folder-fill"></i></a>
				</div>
			</div>
		</div>

		<div class="col-md-4 mb-4">
			<div class="card card-custom-success shadow-sm" style="height: 12rem;">
				<div class="card-body">
					<div class="row no-gutters align-items-center pt-3">
						<div class="col ms-2">
							<div class="mb-0 text-white">
								<h3 class="fs-3 fw-bold"><?= $totalSiswaL->num_rows() ?></h3>
							</div>
							<div class="text-uppercase mb-1">
								<p class="card-text fw-600 text-white">total calon siswa laki-laki</p>
							</div>
						</div>
						<div class="col-auto me-3">
							<i class="bi bi-people fa-4x text-success-2"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4 mb-4">
			<div class="card card-custom-success shadow-sm" style="height: 12rem;">
				<div class="card-body">
					<div class="row no-gutters align-items-center pt-3">
						<div class="col ms-2">
							<div class="mb-0 text-white">
								<h3 class="fs-3 fw-bold"><?= $totalSiswaP->num_rows() ?></h3>
							</div>
							<div class="text-white text-uppercase mb-1">
								<p class="card-text fw-600">total calon siswa perempuan</p>
							</div>
						</div>
						<div class="col-auto me-3">
							<i class="bi bi-people fa-4x text-success-2"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col">
			<p class="fs-5 fw-bold text-primary-2 text-capitalize">calon siswa per prodi</p>
		</div>
	</div>
	<div class="row justify-content-around">
		<?php foreach($prodi->result_array() as $pr): ?>
			<div class="col-md-4 mb-4">
				<div class="card card-custom-primary shadow-sm" style="height: 12rem;">
					<div class="card-body">
						<div class="row pt-3 no-gutters align-items-center">
							<div class="col ms-auto">
								<div class="fw-bold text-white">
									<h4 class="fs-3 fw-bold"><?= $siswaPerProdi[$pr['kode']].'/'.$pr['kuota']; ?></h4>
								</div>
								<div class="text-uppercase text-white mb-1">
									<p class="card-text fw-600"><?= $pr['jurusan']; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
