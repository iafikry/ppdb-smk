<div class="container-fluid bg-gray-200">
	<div class="container"  style="padding-top: 5px;">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent" style="padding-bottom: 10px;">
				<li class="breadcrumb-item"><a class="text-success-2" href="<?= base_url('panitia'); ?>">Beranda</a></li>
				<li class="breadcrumb-item active" aria-current="page">Verifikasi Siswa</li>
			</ol>
		</nav>
	</div>
</div>

<!-- Begin Page Content -->
 <div class="container-fluid mt-4">
	 <!-- heading -->
	 <div class="container">
		 <h1 class="h3 mb-4 text-dark">Verifikasi Siswa</h1>
	 </div>

	 <div class="card shadow-sm border-top-success">
		 <div class="card-body">
			 <table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">No. Registrasi</th>
						<th scope="col">Nama</th>
						<th scope="col">Status</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<?php if($calonSiswa): ?>
				<tbody>
					<?php foreach($calonSiswa as $cs): ?>
						<tr>
							<th scope="row"><?= ++$start ?></th>
							<td><?= $cs['noRegis']; ?></td>
							<td><?= $cs['nama']; ?></td>
							<?php if($cs['statusApprove'] == 'bt'):  ?>
								<td class="fst-italic">
									Menunggu dikonfirmasi oleh petugas PPDB
								</td>
							<?php elseif($cs['statusApprove'] == 'y'):  ?>
								<td class="fst-italic">
									Sudah disetujui oleh Petugas PPDB
								</td>
							<?php else: ?>
								<td class="fst-italic">
									Tidak disetujui oleh Petugas PPDB
								</td>
							<?php endif;  ?>
							<td>
								<a href="<?= base_url('panitia/detail/' . $cs['noRegis']) ?>/vrf" class="btn btn-success">Detail</a>
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
<!-- /.container-fluid -->
