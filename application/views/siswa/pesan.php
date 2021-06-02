<div class="container-fluid bg-gray-200 mt-2">
	<div class="container"  style="padding-top: 5px;">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent" style="padding-bottom: 10px;">
				<li class="breadcrumb-item"><a class="text-primary-2" href="<?= base_url('siswa'); ?>">Beranda</a></li>
				<li class="breadcrumb-item active" aria-current="page">Pesan</li>
			</ol>
		</nav>
	</div>
</div>
<!-- Begin Page Content -->
 <div class="container-fluid mt-4">
	 <div class="container">
		 <h1 class="h3 mb-4 text-dark">Pesan</h1>
	 </div>

	<div class="card border-top-primary">
		<div class="card-header">
			<h5 class="card-title">Kotak masuk</h5>
		</div>
		<div class="card-body p-0">
			<div class="inbox-controls m-1">
				<div class="btn-group ps-2" role="group">
					<a href="<?= base_url('siswa/bacaSemuaPesan/' . $cekUser['noRegis']) ?>" type="button" class="btn btn-md btn-default border" data-bs-toggle="tooltip" data-bs-placement="top" title="Tandai semua sebagai terbaca">
						<i class="bi bi-check-all"></i> Tandai semua sebagai terbaca
					</a>
					<a href="<?= base_url('siswa/pesanBelumDibaca/' . $cekUser['noRegis']) ?>" type="button" class="btn btn-md btn-default border" data-bs-toggle="tooltip" data-bs-placement="top" title="Tampilkan yang belum terbaca">
						<i class="bi bi-chat-square-quote"></i> Tampilkan yang belum terbaca
					</a>
				</div>
			</div>
			<div class="inbox-body table-responsive">
				<?php if($pesan): ?>
				<table class="table table-striped">
					<tbody>
						<?php foreach($pesan as $p): ?>
							<tr>
								<td>
									<a class="ps-2" href="<?= base_url('siswa/tampilPesan/'.$p['noRegis'].'/'. $p['id']) ?>">Sistem</a>
								</td>
								<?php if($p['statusBaca'] == 'n'): ?>
									<td class="fw-bold">
										Pemberitahuan tentang status pendaftaran
									</td>
								<?php else: ?>
									<td>
										Pemberitahuan tentang status pendaftaran
									</td>
								<?php endif; ?>
								<td>
									<?= date('H:i:s d/m/Y', strtotime($p['waktuKirim'])) ?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<?php else: ?>
				<table class="table ">
					<tbody>
						<tr>
							<td colspan="3" align="center">
								<p class="fst-italic">Anda belum mendapatkan pesan apapun.</p>
							</td>
						</tr>
					</tbody>
				</table>
				<?php endif; ?>
			</div>
		</div>
	</div>
 </div>
