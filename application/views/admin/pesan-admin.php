<!-- Begin Page Content -->
 <div class="container-fluid mt-4">
	<div class="card shadow-sm border-top-success">
		<div class="card-header" style="background-color: #fff !important;">
			<h5 class="card-title">Kotak masuk</h5>
		</div>
		<div class="card-body p-0">
			<div class="inbox-controls m-1">
				<div class="float-left">
					<form class="row row-cols-md-auto align-items-center">
						<div class="col-5">
							<div class="input-group">
								<button type="submit" class="btn btn-success"><i class="bi bi-search text-white"></i></button>
								<input type="text" class="form-control" id="keyword" name="keyword" placeholder="Cari berdasarkan Nama atau No. Registrasi">
							</div>
						</div>
					</form>
				</div>				
				<div class="float-right">
					<p>nanti ini buat pagination</p>
				</div>				
			</div>
			<div class="inbox-body table-responsive">
				<table class="table table-striped table-hover">
					<tbody>
						<?php foreach($pesan->result_array() as $p): ?>
							<?php foreach($siswa->result_array() as $sw): ?>
								<?php if($p['penerima'] == $sw['username']): ?>
									<tr>
										<td><?= $sw['noRegis'] ?></td>
										<td><?= $sw['nama'] ?></td>
										<td>
											<?= date('H:i:s d/m/Y', strtotime($p['waktuKirim'])) ?>
										</td>
									</tr>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
 </div>
