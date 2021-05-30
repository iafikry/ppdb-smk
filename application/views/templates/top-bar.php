        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-dark bg-green-valorant topbar static-top shadow-sm">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars text-white"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-bell fw-bold fs-4"></i>
                                <!-- Counter - Alerts -->
								<?php if( $alert > 0 ): ?>
                                	<span class="badge badge-danger badge-counter rounded-pill"><?= $alert?></span>
								<?php endif; ?>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Kolom Informasi
                                </h6>
								<?php if($alert > 0): ?>
									<?php if($this->session->userdata('role') == 'siswa'): ?>
										<a class="dropdown-item d-flex align-items-center" href="<?= base_url('siswa/pesan/'. $cekUser['noRegis']); ?>">
											<div class="mr-3">
												<div class="icon-circle bg-warning">
													<i class="bi bi-chat-left-dots"></i>
												</div>
											</div>
											<div>
												<span class="font-weight-bold">Ada <?= $alert; ?> pesan baru untuk Anda.</span>
											</div>
										</a>
									<?php elseif($this->session->userdata('role') == 'panitia'): ?>
										<a class="dropdown-item d-flex align-items-center" href="<?= base_url('panitia/listCalonSiswa'); ?>">
											<div class="mr-3">
												<div class="icon-circle bg-warning">
													<i class="bi bi-person-fill"></i>
												</div>
											</div>
											<div>
												<span class="font-weight-bold">Ada <?= $alert; ?> pendaftar yang belum diverifikasi berkas oleh Anda!</span>
											</div>
										</a>
									<?php endif; ?>
								<?php else: ?>
									<a class="dropdown-item d-flex align-items-center" href="#">
										<div class="mr-3">
											<i class="bi bi-dash-circle"></i>
										</div>
										<div>
											Tidak ada pemberitahuan untuk Anda.
										</div>
									</a>
								<?php endif; ?>
                                
                            </div>
                        </li>
                       
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item">
                            <a class="nav-link " href="#collUserInfo" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collUserInfo">
                                <span class="mr-2 d-none d-lg-inline text-white"><?= $this->session->userdata('username'); ?></span>
								<i class="bi bi-person-circle fs-5 text-white"></i>
                            </a>
                        </li>						
                    </ul>
                </nav>

				<!-- Dropdown - User Information -->
				<div id="collUserInfo" class="collapse">
					<div class="row bg-gray justify-content-end shadow">
						<div class="col-md-5 p-3">
						<?php if(($this->session->userdata('role') == 'panitia') || ($this->session->userdata('role') == 'kepsek')): ?>
							<div class="card bg-transparent border-0 rounded-0">
								<div class="card-body text-start dropCollapse">
									<h6 class="card-title"><i class="bi bi-person-plus"></i> Menu Panitia</h6>
									<hr class="dropdown-divider mb-4">
									<div class="row">
										<div class="col dropCollapse-link p-2">
											<a href="<?= base_url('panitia/manajemenAdmin') ?>" class="dropCollapse-link"><i class="bi bi-gear-wide"></i> Manajemen Admin</a>
										</div>
										<div class="col dropCollapse-link p-2">
											<a href="<?= base_url('panitia/tambahPanitia') ?>" class="dropCollapse-link"><i class="bi bi-person"></i> Tambah Panitia</a>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
						</div>
						<div class="col-md-4 bg-white p-3">
							<div class="card bg-transparent border-0 rounded-0">
								<div class="card-body text-end dropCollapse">
									<h6 class="card-title">Pengaturan Akun <i class="bi bi-gear-wide-connected"></i></h6>
									<hr class="dropdown-divider mb-4">
									<div class="row">
										<div class="col">
											<div class="dropCollapse-link p-2">
												<a href="<?= base_url('welcome/logout') ?>" class="dropCollapse-link btn-logout">Logout <i class="bi bi-box-arrow-right"></i></a>
											</div>
										</div>
										<div class="col">
											<?php if($this->session->userdata('role') == 'siswa'): ?>
												<div class="dropCollapse-link pt-2 pb-2">
													<a href="<?= base_url('siswa/settings/' . $this->session->userdata('username')) ?>" class="dropCollapse-link">Pengaturan <i class="bi bi-sliders"></i></a>
												</div>
											<?php elseif( ($this->session->userdata('role') == 'panitia') || ($this->session->userdata('role') == 'kepsek')): ?>
												<div class="dropCollapse-link p-2">
													<a href="<?= base_url('panitia/settings/' . $this->session->userdata('username')) ?>" class="dropCollapse-link">Pengaturan <i class="bi bi-sliders"></i></a>
												</div>
												<div class="dropCollapse-link p-2">
													<a href="<?= base_url('panitia/ubahPassword/' . $this->session->userdata('username')) ?>" class="dropCollapse-link">Ubah Password <i class="bi bi-shield-lock"></i></a>
												</div>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <!-- End of Topbar -->
