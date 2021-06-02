<?php if($this->session->flashdata('welcome')): ?>
	 <!-- buat nampung data alert -->
	 <div class="flash-data" data-flash="<?= $this->session->flashdata('welcome');?>"></div>
<?php unset($_SESSION['welcome']); endif; ?>

<div class="container-fluid mt-4">
	<div class="row justify-content-around">
		<div class="col-md-4 mb-4">
			<div class="card bg-card-custom-primary shadow-sm h-100 py-2" style="background-color: rgba(119, 198, 217, 0.7);">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col ms-2">
							<div class="mb-0 fw-bold text-white">
								<h4 class="fs-3 fw-bold"><?= $totalSiswaDaftar->num_rows() ?></h4>
							</div>
							<div class="text-uppercase mb-1 text-white">
								<p class="card-text fw-600">total calon siswa yang mendaftar</p>
							</div>
						</div>
						<div class="col-auto me-3">
							<i class="bi bi-people text-primary-2 fa-3x"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4 mb-4">
			<div class="card border-left-success shadow-sm h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col ms-2">
							<div class="fs-6 font-weight-bold text-uppercase mb-1">
								calon siswa yang lolos verifikasi berkas
							</div>
							<div class="fs-4 mb-0 font-weight-bold text-gray-800">
								<?= $totalSiswaApprove->num_rows() ?>
							</div>
						</div>
						<div class="col-auto me-3">
							<i class="bi bi-people fa-3x text-success"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4 mb-4">
			<div class="card border-left-danger shadow-sm h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col ms-2">
							<div class="fs-6 font-weight-bold text-uppercase mb-1">
								calon siswa yang tidak lolos verifikasi berkas
							</div>
							<div class="fs-4 mb-0 font-weight-bold text-gray-800">
								<?= $totalSiswaTdkApprove->num_rows() ?>
							</div>
						</div>
						<div class="col-auto me-3">
							<i class="bi bi-people fa-3x text-danger"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4 mb-4">
			<div class="card border-left-warning shadow-sm h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col ms-2">
							<div class="fs-6 font-weight-bold text-uppercase mb-1">
								pendaftar yang belum dikonfirmasi
							</div>
							<div class="fs-4 mb-0 font-weight-bold text-gray-800">
								<?= $siswaBelumApprove->num_rows() ?>
							</div>
						</div>
						<div class="col-auto me-3">
							<i class="bi bi-people fa-3x text-warning"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4 mb-4">
			<div class="card border-left-primary shadow-sm h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col ms-2">
							<div class="fs-6 font-weight-bold text-uppercase mb-1">
								total calon siswa laki-laki
							</div>
							<div class="fs-4 mb-0 font-weight-bold text-gray-800">
								<?= $totalSiswaL->num_rows() ?>
							</div>
						</div>
						<div class="col-auto me-3">
							<i class="bi bi-people fa-3x text-primary"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4 mb-4">
			<div class="card border-left-primary shadow-sm h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col ms-2">
							<div class="fs-6 font-weight-bold text-uppercase mb-1">
								total calon siswa perempuan
							</div>
							<div class="fs-4 mb-0 font-weight-bold text-gray-800">
								<?= $totalSiswaP->num_rows() ?>
							</div>
						</div>
						<div class="col-auto me-3">
							<i class="bi bi-people fa-3x text-primary"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
