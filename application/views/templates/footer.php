            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="footer bg-footer-2 mt-5">
                <div class="container my-auto">
					<div class="row justify-content-start">
						<div class="col-md-4 list-footer">
							<h6 class="text-white text-uppercase fw-bold mb-4">smk iptek sanggabuana pangkalan karawang</h6>
							<ul class="text-white list-unstyled">
								<li class="mt-5 mb-1"><i class="bi bi-geo-alt"></i> &nbsp; Jl. Raya Pangkalan - Loji Desa Cintaasih</li>
								<li class="mb-1"><i class="bi bi-envelope"></i> &nbsp; admin@smkipteksanggabuana.sch.id</li>
							</ul>
						</div>
						<div class="col-md-4 list-footer">
							<h6 class="text-white text-uppercase fw-bold mb-4">hubungi kami</h6>
							<ul class="text-white list-unstyled">
								<li class="mt-5 mb-1"><i class="bi bi-phone"></i> &nbsp; 0857-1410-0012 (Angga)</li>
								<li class="mb-1"><i class="bi bi-phone"></i> &nbsp; 0856-9370-0017 (Tia Andriani)</li>
								<li class="mb-1"><i class="bi bi-phone"></i> &nbsp; 0856-1068-0824 (Harry Priatna)</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="pt-5 mt-2 pb-4 copyright text-center text-white my-auto fs-6">
								<p>&copy; <?= date('Y'); ?> SMK IPTEK Sanggabuana Karawang</p>
							</div>
						</div>
					</div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

	<!-- bootstrap 5 javascript  -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

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
