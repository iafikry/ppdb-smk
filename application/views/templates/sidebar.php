
        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark-2 sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center " href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="bi bi-layers-fill"></i>
                </div>
                <div class="sidebar-brand-text mx-3 text-wrap text-start">SMK IPTEK SANGGABUANA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

			<?php if($this->session->userdata('role') == 'panitia'):  ?>
				<!-- Nav Item - Dashboard -->
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('panitia') ?>">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Dashboard</span>
					</a>
				</li>
			<?php elseif($this->session->userdata('role') == 'siswa'):  ?>
				<!-- Nav Item - Dashboard -->
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('siswa') ?>">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Dashboard</span>
					</a>
				</li>
			<?php elseif($this->session->userdata('role') == 'kepsek'):  ?>
				<!-- Nav Item - Dashboard -->
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('panitia') ?>">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Dashboard</span>
					</a>
				</li>
			<?php endif;  ?>

            <!-- Divider -->
            <hr class="sidebar-divider">

			<!-- Heading -->
			<?php if($this->session->userdata('role') == 'panitia'):  ?>
				<!-- <div class="sidebar-heading">
					Menu Panitia
				</div> -->

				<!-- Nav Item - Utilities Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link"  href="<?= base_url('panitia/listCalonSiswa') ?>">
						<i class="bi bi-list-ol"></i>
						<span>
							Konfirmasi Siswa 
							<?php if($alert > 0): ?>
								<span class="badge fw-bold badge-danger ms-3"><?= $alert?></span>
							<?php endif; ?> 
						</span>
					</a>

					<a class="nav-link"  href="<?= base_url('panitia/listSiswaBaru'); ?>">
						<i class="bi bi-person"></i>
						<span>Calon Siswa</span>
					</a>
				</li>

			<?php elseif($this->session->userdata('role') == 'siswa'): ?>
				<!-- Heading -->
				<div class="sidebar-heading">
					Menu Siswa
				</div>

				<!-- Nav Item - Charts -->
				<li class="nav-item">
					<?php if($cekUser): ?>
						<a class="nav-link" href="<?= base_url('siswa/statusDaftar/'.$cekUser['noRegis']); ?>">
							<i class="bi bi-folder2-open"></i>
							<span>Status Pendaftaran</span>
						</a>
						<a class="nav-link" href="<?= base_url('siswa/profil/' . $this->session->userdata('username') . '/' . $cekUser['noRegis']); ?>">
							<i class="bi bi-person"></i>
							<span>Profil</span>
						</a>
						<a class="nav-link" href="<?= base_url('siswa/pesan/' . $cekUser['noRegis']); ?>">
							<i class="bi bi-envelope"></i>
							<span>Pesan</span>
							<?php if( $alert > 0 ): ?>
								<span class="badge bg-danger ms-5 rounded-pill"><?= $alert ?></span>
							<?php endif; ?>
						</a>
					<?php else: ?>
						<a class="nav-link" href="<?= base_url('siswa/daftar'); ?>">
							<i class="bi bi-folder2-open"></i>
							<span>Daftar</span>
						</a>
					<?php endif; ?>
				</li>

			<?php elseif($this->session->userdata('role') == 'kepsek'): ?>
				<!-- Heading -->
				<div class="sidebar-heading">
					Contoh Menu Kepsek
				</div>

				<!-- Nav Item - Charts -->
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('siswa/daftar'); ?>">
						<i class="fas fa-fw fa-chart-area"></i>
						<span>Daftar</span>
					</a>
					<a class="nav-link" href="<?= base_url('siswa/daftar'); ?>">
						<i class="fas fa-fw fa-chart-area"></i>
						<span>Profil</span>
					</a>
				</li>
			<?php endif; ?>
				<li class="nav-item">
					<a class="nav-link btn-logout"  href="<?= base_url('welcome/logout'); ?>">
						<i class="bi bi-box-arrow-left"></i>
						<span>Logout</span>
					</a>
				</li>
        </ul>
        <!-- End of Sidebar -->
