<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

		<link rel="stylesheet" href="<?= base_url('assets/css/mystyle.css') ?>">
		<!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<!-- bootsrap icon -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
		<!-- icon header-->
		<link rel="icon" href="<?= base_url('assets/img/logo.ico'); ?>">
    <title>SMK IPTEK Sanggabuana</title>
  </head>
  <body>
		<header>
			<!-- navbar menu -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark-2 fixed-top shadow">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">Navbar</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="#info">Info</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#jurusan">Program Studi</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#visi-misi">Visi & Misi</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#profil">Profil Sekolah</a>
							</li>
						</ul>
						<div class="navbar nav ms-auto">
							<a href="<?= base_url('welcome/auth') ?>" class="btn btn-outline-green rounded-pill ps-4 pe-4">Login</a>
						</div>
					</div>
				</div>
			</nav>
		</header>

		<main>
			<div id="myCarousel" class="carousel slide carousel-custom" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?= base_url('assets/img/og/1.jpg') ?>" class="d-block" height="600px" width="100%" alt="kegiatan sekolah">
						<div class="container">
							<div class="carousel-caption text-start">
								<h1>Example headline.</h1>
								<p>Some representative placeholder content for the first slide of the carousel.</p>
								<p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<center>
								<img src="<?= base_url('assets/img/og/3.jpg') ?>" style="max-height: 600px;" width="80%" alt="kegiatan sekolah">
						</center>
						<div class="container">
							<div class="carousel-caption text-center">
								<h1>Example headline.</h1>
								<p>Some representative placeholder content for the first slide of the carousel.</p>
								<p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<center>
							<img src="<?= base_url('assets/img/og/2.jpg') ?>" class="d-block" style="max-height: 600px;" width="65%" alt="kegiatan sekolah">
						</center>
						<div class="container">
							<div class="carousel-caption text-end">
								<h1>Example headline.</h1>
								<p>Some representative placeholder content for the first slide of the carousel.</p>
								<p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
							</div>
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
			<!-- <div class="container mt-4"> -->
				<section id="info" class="info mt-4">
					<div class="container">
						<div class="row justify-content-center">
							<div class="alert alert-green col-8 mt-2">
								<h5 class="fw-bold mb-4 text-capitalize fs-4 text-center">informasi Pendaftaran</h5>
								<ol>
									<li>
										Periode pendaftaran <strong>Gelombang 1</strong> dimulai pada tanggal <strong>12 Maret 2021 - 10 April 2021</strong>
									</li>
									<li>
										Periode pendaftaran <strong>Gelombang 2</strong> dimulai pada tanggal <strong>25 Mei 2021 - 31 Mei 2021</strong>
									</li>
									<li>
										<span class="fw-bold">Persyaratan Berkas:</span>
										<ol style="list-style-type: lower-alpha;">
											<li>Scan Pas Foto background merah ukuran 3x4 dan ukuran 4x6 (Format JPG/JPEG/PNG)<sup>*</sup></li>
											<li>Scan Ijazah/Surat Keterangan Lulus (Format PDF)<sup>*</sup></li>
											<li>Scan Akte (Format PDF)<sup>*</sup></li>
											<li>Scan Kartu Keluarga (Format PDF)<sup>*</sup></li>
											<li>Scan KIP/PKH/KPS/KIS/SKTM (Jika ada)</li>
											<li>Scan SKKB (Jika ada)</li>
											<li>Scan Surat Keterangan Sehat (Jika ada)</li>
										</ol>
									</li>
									<p class="mt-2"><span>*</span>Wajib ada.</p>
								</ol>
							</div>
						</div>
					</div>
				</section>
				<!-- section profil sekolah -->
				<section id="profil">
					<div class="container">
						<hr class="dropdown-divider mt-3 mb-3">
						<div class="profil">
							<div class="row">
								<div class="col-md-5 align-self-center text-center">
									<img src="<?= base_url('assets/img/og/4.jpg') ?>" alt="foto" style="max-width: 500px;" class="align-items-center">
								</div>
								<div class="col-md-7 align-self-center">
									<div class="card border-0 bg-transparent align-items-center" style="width: 100%;">
										<h3 class="text-center card-text fw-bold">Profil</h3>
										<div class="accordion mt-4" id="accordionPanelsStayOpenExample" style="width: 100% !important;">
											<div class="accordion-item">
												<h2 class="accordion-header" id="panelsStayOpen-headingOne">
													<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
														Identitas Sekolah
													</button>
												</h2>
												<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
													<div class="accordion-body">
														<table class="table border-0">
															<tbody>
																<tr>
																	<td class="border-0" style="width: 10rem;">Nama Sekolah </td>
																	<td class="border-0">:</td>
																	<td class="border-0">SMK IPTEK Sanggabuana</td>
																</tr>
																<tr>
																	<td class="border-0">NPSN</td>
																	<td class="border-0">:</td>
																	<td class="border-0">20265214</td>
																</tr>
																<tr>
																	<td class="border-0">Jenjang Pendidikan</td>
																	<td class="border-0">:</td>
																	<td class="border-0">SMK</td>
																</tr>
																<tr>
																	<td class="border-0">Alamat Sekolah</td>
																	<td class="border-0">:</td>
																	<td class="border-0">Jl Raya Loji - Pangkalan RT/RW 03/01, Kel. Cintaasih, Kec. Pangkalan, Kab. Karawang, Jawa Barat. 41362.</td>
																</tr>	
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="panelsStayOpen-headingTwo">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
														Data Pelengkap
													</button>
												</h2>
												<div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
													<div class="accordion-body">
														<table class="table border-0">
															<tbody>
																<tr>
																	<td class="border-0" style="width: 12rem;">SK Pendirian Sekolah </td>
																	<td class="border-0">:</td>
																	<td class="border-0">10</td>
																</tr>
																<tr>
																	<td class="border-0">Tanggal SK Pendirian</td>
																	<td class="border-0">:</td>
																	<td class="border-0"><?= date('d M Y', strtotime('2005-01-14')) ?></td>
																</tr>
																<tr>
																	<td class="border-0">Status Kepemilikan</td>
																	<td class="border-0">:</td>
																	<td class="border-0">Yayasan</td>
																</tr>
																<tr>
																	<td class="border-0">SK Izin Operasional</td>
																	<td class="border-0">:</td>
																	<td class="border-0">421.3/Kep.346 Huk 2010</td>
																</tr>	
																<tr>
																	<td class="border-0">Tgl. SK Izin Operasional</td>
																	<td class="border-0">:</td>
																	<td class="border-0"><?= date('d M Y', strtotime('2010-05-07')) ?></td>
																</tr>	
																<tr>
																	<td class="border-0">Kebutuhan khusus dilayani</td>
																	<td class="border-0">:</td>
																	<td class="border-0">-</td>
																</tr>	
																<tr>
																	<td class="border-0">Nomor Rekening</td>
																	<td class="border-0">:</td>
																	<td class="border-0">0015005971100 (Bank Jabar Banten), atas nama SMK IPTEK Sanggabuana Pangkalan</td>
																</tr>	
																<tr>
																	<td class="border-0">MBS</td>
																	<td class="border-0">:</td>
																	<td class="border-0">Ya</td>
																</tr>	
																<tr>
																	<td class="border-0">Memungut iuran</td>
																	<td class="border-0">:</td>
																	<td class="border-0">Ya (Tahunan)</td>
																</tr>	
																<tr>
																	<td class="border-0">Nama Wajib Pajak</td>
																	<td class="border-0">:</td>
																	<td class="border-0">Yayasan Pelita Ilmu</td>
																</tr>	
																<tr>
																	<td class="border-0">NPWP</td>
																	<td class="border-0">:</td>
																	<td class="border-0">024253676408000</td>
																</tr>	
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="panelsStayOpen-headingThree">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
														Kontak Sekolah
													</button>
												</h2>
												<div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
													<div class="accordion-body">
														<table class="table border-0">
															<tbody>
																<tr>
																	<td class="border-0" style="width: 10rem;">Nomor Telepon</td>
																	<td class="border-0">:</td>
																	<td class="border-0">089691895549</td>
																</tr>
																<tr>
																	<td class="border-0">Email</td>
																	<td class="border-0">:</td>
																	<td class="border-0">smk.iptek2015@gmail.com</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="panelsStayOpen-headingFour">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
														Data Periodik
													</button>
												</h2>
												<div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
													<div class="accordion-body">
														<table class="table border-0">
															<tbody>
																<tr>
																	<td class="border-0" style="width: 15rem;">Waktu Penyelenggaraan</td>
																	<td class="border-0">:</td>
																	<td class="border-0">Double shift/6 hari</td>
																</tr>
																<tr>
																	<td class="border-0">Bersedia Menerima Dana Bos</td>
																	<td class="border-0">:</td>
																	<td class="border-0">Ya</td>
																</tr>
																<tr>
																	<td class="border-0">Sertifikat ISO</td>
																	<td class="border-0">:</td>
																	<td class="border-0">Belum Bersertifikat</td>
																</tr>
																<tr>
																	<td class="border-0">Daya Listrik (Watt)</td>
																	<td class="border-0">:</td>
																	<td class="border-0">12000</td>
																</tr>
																<tr>
																	<td class="border-0">Akses Internet</td>
																	<td class="border-0">:</td>
																	<td class="border-0">CBN</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div class="accordion-item">
												<h2 class="accordion-header" id="panelsStayOpen-headingFive">
													<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
														Sanitasi
													</button>
												</h2>
												<div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingive">
													<div class="accordion-body">
														<table class="table border-0">
															<tbody>
																<tr>
																	<td class="border-0" style="width: 15rem;">Sumber Air</td>
																	<td class="border-0">:</td>
																	<td class="border-0">Sumber Terlindungi</td>
																</tr>
																<tr>
																	<td class="border-0">Kecukupan Air Bersih</td>
																	<td class="border-0">:</td>
																	<td class="border-0">Cukup</td>
																</tr>
																<tr>
																	<td class="border-0">Jumlah Tempat Cuci Tangan</td>
																	<td class="border-0">:</td>
																	<td class="border-0">15</td>
																</tr>
																<tr>
																	<td class="border-0">Kemitraan dengan Pihak Luar Untuk Sanitasi Sekolah</td>
																	<td class="border-0">:</td>
																	<td class="border-0">Ya, dengan Puskesmas</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr class="dropdown-divider mt-3 mb-3">
					</div>
				</section>
				
				<section id="visi-misi" class="mt-2">
					<div class="container">
						<div class="visi-misi">
							<div class="row">
								<div class="col-md-7 align-self-center">
									<div class="card bg-transparent rounded-0 border-0 align-items-center">
										<div class="card-body">
											<div class="card-title">
												<h3 class="card-text text-center fw-bold">Visi & Misi</h3>
											</div>
											<div class="visi mt-3">
												<h5 class="card-text">Visi</h5>
												<hr class="dropdown-divider" style="width: 7%; margin-top: -5px; margin-bottom: 0px;">
												<p class="card-text">Membentuk insan yang memiliki ilmu pengetahuan, penguasaan teknologi, jujur, arief, beriman dan bertaqwa  kepada Tuhan Yang Maha Esa serta mampu menjawab tantangan zaman. </p>
											</div>
											<div class="misi mt-3">
												<h5 class="card-text">Misi</h5>
												<hr class="dropdown-divider" style="width: 7%; margin-top: -5px; margin-bottom: 0px;">
												<ol class="ms-1 ps-2">
													<li>
														<p class="card-text">Meningkatkan IPTEK dan IMTAQ peserta didik terhadap Tuhan Yang Maha Esa sebagai dasar untuk mengimplementasikan pengetahuan dan sikapnya dalam mempertahankan eksistensinya di masyarakat serta mampu berpartisipasi aktif dalam membangun dan melestarikan budaya bangsa.</p>
													</li>
													<li>
														<p class="card-text">
															Menyiapkan calon tenaga kerja yang kompeten serta adaftif terhadap tuntutan dunia kerja sesuai bidangnya. 
														</p>
													</li>
												</ol>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-5 align-self-center text-center">
									<img src="<?= base_url('assets/img/logo.PNG') ?>" style="max-height: 200px;" class="align-items-center" alt="logo sekolah">
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					
						<hr class="dropdown-divider mt-3 mb-3">
				</div>

				<section id="jurusan">
					<div class="container">
						<div class="jurusan">
							<h3 class="text-capitalize text-center fw-bold text-white mb-5">program studi</h3>
							<div class="row justify-content-evenly">
								<div class="col-md-3 mt-3">
									<div class="card bg-transparent card-jurusan border-green text-white" style="height: 10rem;">
										<div class="card-body text-center">
											<i class="fas fa-cogs fa-3x"></i>
											<p style="font-size: 19px;" class="card-title mt-3"><?= $jurusan->result_array()[0]['nama']; ?></p>
										</div>
									</div>
								</div>

								<div class="col-sm-3 mt-3">
									<div class="card bg-transparent card-jurusan border-green text-white">
										<div class="card-body text-center">
											<i class="fas fa-tools fa-3x"></i>
											<p style="font-size: 19px;" class="card-title mt-3"><?= $jurusan->result_array()[1]['nama']; ?></p>
										</div>
									</div>
								</div>
								
								<div class="col-sm-3 mt-3">
									<div class="card bg-transparent card-jurusan border-green text-white">
										<div class="card-body text-center">
											<i class="fas fa-chart-line fa-3x"></i>
											<p style="font-size: 19px;" class="card-title mt-3"><?= $jurusan->result_array()[2]['nama']; ?></p>
										</div>
									</div>
								</div>
							</div>
							<div class="row justify-content-evenly">
								<div class="col-sm-3 mt-3">
									<div class="card card-jurusan bg-transparent border-green text-white" style="height: 10rem;">
										<div class="card-body text-center">
											<i class="fas fa-network-wired fa-3x"></i>
											<p style="font-size: 19px;" class="card-title mt-3"><?= $jurusan->result_array()[3]['nama']; ?></p>
										</div>
									</div>
								</div>

								<div class="col-sm-3 mt-3">
									<div class="card card-jurusan bg-transparent border-green text-white">
										<div class="card-body text-center">
											<i class="fas fa-wrench fa-3x"></i>
											<p style="font-size: 19px;" class="card-title mt-3"><?= $jurusan->result_array()[4]['nama']; ?></p>
										</div>
									</div>
								</div>

								<div class="col-sm-3 mt-3">
									<div class="card card-jurusan bg-transparent border-green text-white">
										<div class="card-body text-center">
											<i class="fas fa-seedling fa-3x"></i>
											<p style="font-size: 19px;"  class="card-title mt-3"><?= $jurusan->result_array()[5]['nama']; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			<!-- </div> -->
		</main>

		<footer class="foot-footer bg-dark pt-5 pb-3">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-4">
						<h6 class="text-white">&copy; <?= date('Y') ?> SMK IPTEK Sanggabuana Karawang</h6>
						</ul>
					</div>
					<div class="col-md-1 text-end">
						<a href="#" class="btn btn-sm btn-green-valorant fw-bold" title="Kembali ke atas"><i class="bi bi-arrow-up"></i></a>
					</div>
				</div>
			</div>
		</footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- popper js -->
	<script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>
	<!-- script sweetAlert2 -->
	<script src="<?= base_url('assets/js/sweetalert2.all.min.js') ?>"></script>
	<!-- akses script sendiri -->
	<script src="<?= base_url('assets/js/myscript.js') ?>"></script>
  </body>
</html>
