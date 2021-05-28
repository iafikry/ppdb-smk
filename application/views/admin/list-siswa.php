<div class="container-fluid bg-gray-200">
	<div class="container"  style="padding-top: 5px;">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent" style="padding-bottom: 10px;">
				<li class="breadcrumb-item"><a class="text-success-2" href="<?= base_url('panitia'); ?>">Beranda</a></li>
				<li class="breadcrumb-item active" aria-current="page">List Siswa</li>
			</ol>
		</nav>
	</div>
</div>
<!-- Begin Page Content -->
 <div class="container-fluid mt-4">
	<!-- heading -->
	<div class="container">
		 <h1 class="h3 mb-4 text-dark">List Siswa</h1>
	 </div>

	<div class="card shadow-sm border-top-success">
		<div class="card-body">
			<table class="table-custom">
				<thead>
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
