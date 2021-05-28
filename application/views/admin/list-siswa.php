<!-- Begin Page Content -->
 <div class="container-fluid mt-4">
	<!-- heading -->
	<div class="row justify-content-between">
		<div class="col-md-4">
			<h1 class="h3 mb-4 text-dark">List Siswa</h1>
		</div>
		<div class="col-md-4">
			<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="float-end">
				<ol class="breadcrumb fs-5 bg-transparent">
					<li class="breadcrumb-item"><a href="<?= base_url('panitia'); ?>">Beranda</a></li>
					<li class="breadcrumb-item active" aria-current="page">List Siswa</li>
				</ol>
			</nav>
		</div>
	</div>

	<div class="card shadow-sm border-top-success">
		<div class="card-body">
			<table class="table table-striped table-hover">
				<thead class="table-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">No. Registrasi</th>
						<th scope="col">Nama</th>
						<th scope="col">Jenis Kelamin</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<?php if($list): ?>
				<tbody>
					<?php foreach($list as $l): ?>
						<tr>
							<th scope="row"><?= ++$start ?></th>
							<td><?= $l['noRegis']; ?></td>
							<td><?= $l['nama']; ?></td>
							<?php if($l['jnKelamin'] == 'L'):  ?>
								<td>
									<p>Laki-laki</p>
								</td>
							<?php elseif($l['jnKelamin'] == 'P'):  ?>
								<td>
									<p>Perempuan</p>
								</td>
							<?php endif;  ?>
							<td>
								<a href="<?= base_url('panitia/detail/' . $l['noRegis']) ?>" class="btn btn-success">Detail</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				<?php else: ?>
				<tbody>
					<tr>
						<td colspan="5" class="fst-italic text-center">Belum ada pendaftar</td>
					</tr>
				</tbody>
				<?php endif; ?>
			</table>
			<div>
				<?= $this->pagination->create_links(); ?>
			</div>
		</div>
	</div>
 </div>
