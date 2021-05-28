<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		html,
		html body,
		table,
		table tr td {
			font-family: Roboto, sans-serif !important;
			line-height: 1.15;
			-webkit-text-size-adjust: 100%;
			-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
		}

		span {
			 font-family:sans-serif !important;
			 font-size: 12px !important;
		}

		.table {
			width: 100%;
			margin-bottom: 1rem;
			color: #858796;
		}

		.border-white {
			border-color: #fff !important;
		}

		.table th,
		.table td {
			/* padding: 0.75rem; */
			vertical-align: top;
			/* border-top: 1px solid #e3e6f0; */
		}

		.table thead th {
			vertical-align: bottom;
			/* border-bottom: 2px solid #e3e6f0; */
		}

		.card {
			position: relative;
			display: flex;
			flex-direction: column;
			min-width: 0;
			word-wrap: break-word;
			background-color: #fff;
			background-clip: border-box;
			border: 1px solid #e3e6f0;
			border-radius: 0.35rem !important;
		}

		.card > hr {
			margin-right: 0;
			margin-left: 0;
		}

		.rounded-0 {
		border-radius: 0 !important;
		}

		.mt-3,
		.my-3 {
			margin-top: 1rem !important;
		}

		.bg-transparent {
			background-color: transparent !important;
		}
		.card-body {
			flex: 1 1 auto;
			min-height: 1px;
			padding: 1.25rem !important;
		}
		.card-title {
			margin-bottom: 0.75rem;
		}
		.card-text:last-child {
			margin-bottom: 0;
		}
		.text-uppercase{
			text-transform: uppercase !important;
		}
		.text-center {
			text-align: center !important;
		}
		.w-25 {
			width: 25% !important;
		}

		.w-50 {
			width: 50% !important;
		}

		.w-75 {
			width: 75% !important;
		}
		.card-subtitle {
			margin-top: -0.375rem;
			margin-bottom: 0;
		}
		.fw-bold {
			font-weight: bold !important;
		}

		.m-0 {
			margin: 0 !important;
		}
		.text-justify {
			text-align: justify !important;
		}

		.text-wrap {
			white-space: normal !important;
		}

		.text-nowrap {
			white-space: nowrap !important;
		}

		.text-left {
			text-align: left !important;
		}

		.text-right {
			text-align: right !important;
		}

		.text-center {
			text-align: center !important;
		}
	</style>
	<title>Kartu</title>
</head>
<body>
	<div class="card bg-transparent rounded-0 p-2" style="font-family: 'sans-serif' !important; border: none;">
		<div class="row" style="justify-content: center;">
			<table style="width:100%; border: 3px dashed #dddbdb; padding: 5px 0px;">
				<tr>
					<td rowspan="4"><img src=" <?= base_url('assets/img/') ?>logo.PNG " alt="logo-sekolah" width="95px" style="padding-left:30px;"></td>
					<td  align="center" class="fw-bold" style="font-size: 16px; font-weight: bold;"> TANDA BUKTI PENDAFTARAN</td>
					<td style="padding-left: 70px !important;" rowspan="4"><img src="<?= base_url('assets/img/') ?>logo-kemendikbud.jpg" alt="logo-kemendikbud" width="95px"></td>
				</tr>
				<tr >
					<td align="center" class="fw-bold" style="font-size: 16px; font-weight: bold;">PPDB TAHUN AJARAN <?= date('Y') . '/' . date('Y', strtotime("+ 1 years")); ?></td>
				</tr>
				<tr>
					<td align="center" class="fw-bold" style="font-size: 16px; font-weight: bold;">SMK IPTEK SANGGABUANA</td>
				</tr>
				<tr >
					<td align="center" style="font-size: 11px;">Jl. Raya Pangkalan - Loji Desa Cintaasih</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="card bg-transparent mt-3 rounded-0" style="border: none;">
		<div style=" justify-content: center; align-self: center; border: 3px dashed #dddbdb; padding: 10px 0px;">
			<table style="padding: 0px 25px; float: left; text-align: left !important; font-size: 12px;">
				<tbody>
					<tr>
						<td>
							<img src="<?= base_url('assets/upload/' . $siswa['pasFoto']) ?>" alt="pas-foto" width="125px">
						</td>
						<td style="text-align: left;" align="left">
							<table style="text-align: left !important; font-size: 12px;">
								<tbody>
									<tr>
										<th align="left" scope="col">No. Regis</th>
										<td align="left">:</td>
										<td align="left"><?= $siswa['noRegis']; ?></td>
									</tr>
									<tr>
										<th align="left" scope="col">Pilihan Jurusan</th>
										<td align="left">:</td>
										<td align="left"><?= $siswa['jurusan']; ?></td>
									</tr>
									<tr>
										<th align="left" scope="col">Nama</th>
										<td align="left">:</td>
										<td align="left"><?= $siswa['nama']; ?></td>
									</tr>
									<tr>
										<th align="left" scope="col">NISN</th>
										<td align="left">:</td>
										<td align="left"><?= $siswa['nisn']; ?></td>
									</tr>
									<tr>
										<th align="left" scope="col">Alamat</th>
										<td align="left">:</td>
										<td align="left">
											<?= $siswa['alamat'] . ' RT/RW ' . $siswa['rt'] .'/'. $siswa['rw'] . ', desa ' . $siswa['desa'] . ', kec. ' . $siswa['kecamatan'] . ', kab. ' . $siswa['kab'] . ', prov. ' . $siswa['prov'] . ' '. $siswa['pos'] . '.' ?>
										</td>
									</tr>
									<tr>
										<th align="left" scope="col">No Peserta UN</th>
										<td align="left">:</td>
										<td align="left"><?= $siswa['noPesertaUn']; ?></td>
									</tr>
									<tr>
										<th align="left" scope="col">Asal Sekolah SMP/MTs</th>
										<td align="left">:</td>
										<td align="left"><?= $siswa['asalSMP']; ?></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="card bg-transparent rounded-0" style="border: none !important;">
		<div class="row" style=" justify-content: start; align-self: center; border-left: 3px dashed #dddbdb; border-bottom: 3px dashed #dddbdb; border-right: 3px dashed #dddbdb; border-top: none; font-size: 11px !important;">
			<div class="col-md-5" style="padding: 15px 53px;">
				<div class="row">
					<div class="col-md-2">
						<span class="card-text" style="font-weight: bold;">Catatan :</span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7" style="margin-left: 25px;">
						<span class="card-text">Kartu ini harus dibawa pada saat melakukan registrasi ulang.</span>
					</div>
				</div>
			</div>
		</div>
	</div>  

	<div class="card bg-transparent rounded-0" style="border: none !important;">
		<div class="row" style=" justify-content: start; align-self: center; background-color: #a5d9e5; border: 2px solid #a5d9e5;">
			<div class="col-md-5" style="padding: 15px 53px;">
				<div class="row">
					<div class="col-md">
						<span class="card-text fw-bold" style="color: #424040;">&copy; <?= date('Y'); ?> SMK IPTEK SANGGABUANA PANGKALAN</span>
					</div>
				</div>
			</div>
		</div>
	</div>  
</body>
</html>
