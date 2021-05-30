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
	 <div class="container">
		 <h1 class="h3 mb-4 text-dark">Manajemen Admin</h1>
	 </div>

	<div class="card shadow-sm border-top-success">
		<div class="card-header">
			<h5 class="card-title"><i class="bi bi-list-check"></i> List Admin</h5>
		</div>
		<div class="card-body">
			<table class="table-custom">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach($pengguna as $p): ?>
					<tr>
						<th scope="col"><?= $i++; ?></th>
						<td><?= $p['nama']; ?></td>
						<td>
							<a href="#" class="btn btn-success">Detail</a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
 </div>
