<?php if($this->session->flashdata('welcome')): ?>
	 <!-- buat nampung data alert -->
	 <div class="flash-data" data-flash="<?= $this->session->flashdata('welcome');?>"></div>
<?php unset($_SESSION['welcome']); endif; ?>

<div class="container-fluid bg-gray-200 mt-2">
	<div class="container"  style="padding-top: 5px;">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent" style="padding-bottom: 10px;">
				<li class="breadcrumb-item"><a class="text-primary-2" href="<?= base_url('panitia'); ?>">Beranda</a></li>
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
			<div class="card border-top-primary">
				<div class="card-header">
					<h5 class="card-title"><i class="bi bi-list-check"></i> List Admin</h5>
				</div>
				<div class="card-body">
					<a href="<?= base_url('panitia/tambahPanitia') ?>" class="btn btn-primary-2 mb-3"><i class="bi bi-person-plus-fill"></i> Tambah Panitia</a>
					<ol class="list-group list-group-numbered">
					<?php foreach($pengguna as $p): ?>
						<li class="list-group-item d-flex justify-content-between align-items-start">
							<div class="ms-2 me-auto">
								<div class="fw-bold"><?= $p['nama']; ?></div>
							</div>
							<a href="<?= base_url('panitia/detailPanitia/' . $p['username']) ?>" class="btn btn-primary" title="Detail">
								<i class="bi bi-pencil-square"></i>
							</a>
							<?php if($this->session->userdata('username') == 'user00'): ?>
								<?php if($p['username'] != 'user00'): ?>
									<a href = "<?= base_url('panitia/hapusPanitia/' . $p['username']) ?>" class="btn btn-danger btn-hapus ms-2" title="Hapus Data">
										<i class="bi bi-trash"></i>
									</a>
								<?php endif; ?>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
					</ol>
				</div>
			</div>
		</div>
	</div>
 </div>
