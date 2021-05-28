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
					<div class="card card-body bg-green-valorant rounded-0 border-0 text-end"> 	
						<a class="dropdown-item text-secondary" href="#">
							<i class="fas fa-cogs fa-sm fa-fw mr-2 text-white"></i>
							Settings
						</a>
						<!-- <div class="dropdown-divider"></div> -->
						<a class="dropdown-item text-white" href="#" data-toggle="modal" data-target="#logoutModal">
							<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
							Logout
						</a>
					</div>
				</div>
                <!-- End of Topbar -->
