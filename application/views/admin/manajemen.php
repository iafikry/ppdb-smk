<?php if($this->session->flashdata('welcome')): ?>
	 <!-- buat nampung data alert -->
	 <div class="flash-data" data-flash="<?= $this->session->flashdata('welcome');?>"></div>
<?php unset($_SESSION['welcome']); endif; ?>

<div class="container-fluid bg-gray-200 mt-4">
	<div class="container"  style="padding-top: 5px;">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent" style="padding-bottom: 10px;">
				<li class="breadcrumb-item"><a class="text-success-2" href="<?= base_url('panitia'); ?>">Beranda</a></li>
				<li class="breadcrumb-item active" aria-current="page">Manajemen Admin</li>
			</ol>
		</nav>
	</div>
</div>

<!-- Begin Page Content -->
 <div class="container-fluid mt-4">
	<div class="row flex-column">
		<div class="col-8 align-self-center">
			<!-- <div class="container"> -->
				<h1 class="h3 mb-4 text-dark">Manajemen Admin</h1>
			<!-- </div> -->
		</div>

		<div class="col-8 align-self-center">
			<div class="card shadow-sm border-top-success">
				<div class="card-header">
					<h5 class="card-title"><i class="bi bi-list-check"></i> List Admin</h5>
				</div>
				<div class="card-body">
					<a href="<?= base_url('panitia/tambahPanitia') ?>" class="btn btn-outline-success mb-3"><i class="bi bi-person-plus-fill"></i> Tambah Panitia</a>
					<ol class="list-group list-group-numbered">
					<?php foreach($pengguna as $p): ?>
						<li class="list-group-item d-flex justify-content-between align-items-start">
							<div class="ms-2 me-auto">
								<div class="fw-bold"><?= $p['nama']; ?></div>
							</div>
							<span><a href="<?= base_url('panitia/detailPanitia/' . $p['username']) ?>" class="btn btn-success">Detail</a></span>
						</li>
					<?php endforeach; ?>
					</ol>
				</div>
			</div>
		</div>
	</div>
 </div>
