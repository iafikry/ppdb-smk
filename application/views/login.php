<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login | PPDB</title>

	 <!-- Bootstrap 5 CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>  assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/css/sb-admin-2.css" rel="stylesheet">

	<!-- bootstrap icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
	<!-- icon header-->
	<link rel="icon" href="<?= base_url('assets/img/logo.ico'); ?>">
</head>

<body class="bg-login-2">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5">

                <div class="card o-hidden bg-transparent border-0 my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center mb-4">
										<img src="<?= base_url('assets/img/logo-text-white.png') ?>" alt="logo">
                                    </div>
									<?php 
									if ($this->session->flashdata('login')): ?>
										<!-- buat nampung data alert -->
	 									<div class="flash-data" data-flash="<?= $this->session->flashdata('login');?>"></div>
										<?php unset($_SESSION['login']);
									endif;?>
                                    <form class="user" action="" method="post">
                                        <div class="form-group form-floating">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off" value="<?= set_value('username'); ?>">
											<label for="username">Username</label>
											<?= form_error('username', '<div class="text-danger form-text">', '</div>') ?>
                                        </div>
                                        <div class="form-group form-floating">
  											<input type="password" class="form-control" id="password" name="password" placeholder="Password">
  											<label for="password">Password</label>
											<?= form_error('password', '<div class="text-danger form-text">', '</div>') ?>
										</div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block fs-6 fw-bold">Login</button>
                                    </form>
									<hr>
                                    <div class="text-center">
                                        Belum punya akun? <a class="text-primary" href="<?= base_url('welcome/registrasi') ?>">Buat sekarang!</a>
                                    </div>
                                    <div class="text-center">
                                        <small><a class="text-danger" href="<?= base_url() ?>">Kembali</a></small>
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
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?> "></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?> "></script>

	<!-- script sweetAlert2 -->
	<script src="<?= base_url('assets/js/sweetalert2.all.min.js') ?>"></script>
	
	<!-- akses script sendiri -->
	<script src="<?= base_url('assets/js/myscript.js') ?>"></script>


</body>

</html>
