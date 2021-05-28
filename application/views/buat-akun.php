<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrasi | PPDB</title>

	 <!-- Bootstrap 5 CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>  assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Logo</h1>
                                    </div>
									<?php 
									if ($this->session->flashdata('login')) {
										echo $this->session->flashdata('login');
										unset($_SESSION['login']);
									}?>
                                    <form class="user" action="" method="post">
										<div class="mb-3">
											<label for="username" class="form-label">Username</label>
											<input type="text" class="form-control <?= (form_error('username')) ? 'is-invalid' : '' ?>" id="username" name="username" value="<?= set_value('username') ?>" autocomplete="off">
											<?= form_error('username', '<div class="invalid-feedback">', '</div>') ?>
										</div>
										<div class="mb-3">
											<label for="password1" class="form-label">Password</label>
											<input type="password" class="form-control <?= (form_error('password1')) ? 'is-invalid' : '' ?>" id="password1" name="password1" autocomplete="off">
											<?= form_error('password1', '<div class="invalid-feedback">', '</div>') ?>
										</div>
										<div class="mb-4 mt-2">
											<input type="password" class="form-control <?= (form_error('password2')) ? 'is-invalid' : '' ?>" id="password2" name="password2" placeholder="Tulis kembali password anda" autocomplete="off">
										</div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block fs-6 fw-bold">Simpan</button>
                                    </form>
									<hr>
                                    <div class="text-center">
                                        Sudah punya akun? <a class="text-primary" href="<?= base_url('welcome/auth') ?>">Masuk!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
	 <!-- Option 1: Bootstrap 5 Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>  assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>  assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>  assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>  assets/js/sb-admin-2.min.js"></script>

	<!-- script sweetAlert2 -->
	<script src="<?= base_url('assets/js/sweetalert2.all.min.js') ?>"></script>
	
	<!-- akses script sendiri -->
	<script src="<?= base_url('assets/js/myscript.js') ?>"></script>

</body>

</html>
