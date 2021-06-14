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
			font-family: serif !important;
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
		span{
			font-family: serif !important;
		}
	</style>
	<title>Kartu</title>
</head>
<body>
<?php //var_dump($kepsek); die; ?>
	<header>
		<div class="kop-surat">
			<img src="<?= base_url('assets/img/kop-surat.png') ?>" alt="kop-surat">
		</div>
	</header>

	<main>
		<div class="text-center mt-3" style="align-items: center;">
			<table class="text-center"  style="border: 0px !important; margin-left: 170px;">
				<tbody>
					<tr>
						<td style="font-size: 16px; font-weight: bold; text-decoration: underline;">SURAT KETERANGAN</td>
					</tr>
					<tr>
						<td>Nomor: 422/165/Pan-PPDB/SMK.IPTEK.SB/VI/<?= date('Y') ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="text-center" style="line-height: 12px;">
			<h4>KEPALA SMK IPTEK SANGGABUANA PANGKALAN</h4>
			<h4>KABUPATEN KARAWANG</h4>
		</div>
		<div>
			<table style="border: 0px !important;">
				<tbody>
					<tr>
						<td rowspan="2" style="vertical-align: top;">Dasar</td>
						<td rowspan="2" style="vertical-align: top;">:</td>
						<td style="vertical-align: top;">1.</td>
						<td style="text-align: justify;">Peraturan Menteri Pendidikan dan Kebudayaan Provinsi Jawa Barat Nomor 1 Tahun 2021 Tentang Petunjuk Teknis Penerimaan Peserta Didik Baru (PPDB) pada Sekolah Menengah Atas, Sekolah Menengah Kejuruan dan Sekolah Luar Biasa Tahun 2021 di Provinsi Jawa Barat;</td>
					</tr>
					<tr>
						<td>2.</td>
						<td style="text-align: justify;">
							Hasil Seleksi PPDB Tahap I SMK IPTEK SANGGABUANA (02 – 05 Juni 2021).
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<p class="text-justify" style="text-indent: 50px;">Atas dasar tersebut Kepala Sekolah SMK IPTEK SANGGABUANA Pangkalan Kabupaten Karawang menerangkan bahwa:</p>
		<div class="data-siswa">
			<table style="border: 0px !important;">
				<tbody>
					<tr>
						<td>Nomor Registrasi</td>
						<td>:</td>
						<td><?= $siswa['noRegis']; ?></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><?= $siswa['nama']; ?></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>
							<?php
								if ($siswa['jnKelamin'] == 'L') {
									echo 'Laki-laki';
								} else {
									echo 'Perempuan';
								}
							?>
						</td>
					</tr>
					<tr>
						<td>Sekolah Asal</td>
						<td>:</td>
						<td><?= $siswa['asalSMP']; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<p class="text-center">Dengan ini menyatakan bahwa nama yang tercantum di atas:</p>
		<h3 class="text-center mt-3">LULUS</h3>
		<h3 class="text-center"><?= $siswa['jurusan']; ?></h3>
		<p class="text-justify">SMK IPTEK SANGGABUANA Pangkalan sebagai Peserta Didik Baru Tahun Ajaran <?= date('Y').'/'.date('Y', strtotime('+ 1 years').'.') ?></p>
		<p class="text-justify" style="text-indent: 50px;">Demikian surat keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>

		<div style="margin-left: 450px;">
			<?php date_default_timezone_set("Asia/Jakarta"); ?>
			<p>Pangkalan, <?= date('d M Y') ?></p>
		</div>
		<div style="margin-left: 450px; margin-top: -17px;">
			Kepala Sekolah
		</div>
		<div style="margin-left: 450px; margin-top: 2px;">
			SMK IPTEK SANGGABUANA
		</div>
		<img src="<?= base_url('assets/img/ttd.png') ?>" alt="ttd" style="position: relative; z-index: 3; margin-left: 350px; margin-top: -20px;">
		<div style="margin-left: 450px; margin-top: -26px; font-weight: bold; text-decoration: underline;">
			<?= $kepsek['panitia']; ?>
		</div>
	</main>
	<footer>
		<p style="font-weight: bold; font-size: 12px; font-style: italic;">Catatan:</p>
		<p style="font-weight: bold; font-size: 12px; font-style: italic;">Harap melakukan Daftar Ulang di tanggal 14 Juni s/d 15 Juli 2021 dengan melengkapi Persyaratan Berkas dan Administrasi ke Panitia PPDB SMK IPTEK SANGGABUANA Pangkalan.</p>
	</footer>
</body>
</html>
