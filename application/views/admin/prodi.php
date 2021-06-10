<div class="container-fluid bg-gray-200 mt-2">
	<div class="container"  style="padding-top: 5px;">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent" style="padding-bottom: 10px;">
				<li class="breadcrumb-item"><a class="text-primary-2" href="<?= base_url('panitia'); ?>">Beranda</a></li>
				<li class="breadcrumb-item active" aria-current="page">Program Studi</li>
			</ol>
		</nav>
	</div>
</div>
<!-- Begin Page Content -->
 <div class="container-fluid mt-4">
	 <div class="container">
		 <h1 class="h3 mb-4 text-dark">Program Studi</h1>
	 </div>

	<div class="card border-top-primary">
		<div class="card-body">
			<table class="table-custom">
				<thead>
					<tr>
						<th scope="col">Kode</th>
						<th scope="col">Prodi</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($jurusan->result_array() as $jr): ?>
						<tr>
							<th scope="row"><?= $jr['id']; ?></th>
							<td><?= $jr['nama']; ?></td>
							<td>
								<a href="#" class="btn btn-success m-1" title="Ubah Data"> Ubah data <i class="bi bi-pencil-square"></i></a>
								<a href="#" class="btn btn-primary m-1" title="Ubah Data"> Detail <i class="bi bi-caret-right"></i></a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
 </div>
