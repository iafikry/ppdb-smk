
        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark-2 sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center " href="#">
               <img src="<?= base_url('assets/img/logo-text.png') ?>" alt="logo" class="image-logo" width="200px">
			   <img src="<?= base_url('assets/img/logo.PNG') ?>" alt="logo" class="image-logo-2" width="50px">
            </a>

			<?php if( ($this->session->userdata('role') == 'panitia') || ($this->session->userdata('role') == 'kepsek')):  ?>
				<!-- Nav Item - Dashboard -->
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('panitia') ?>">
						<i class="bi bi-hash"></i>
						<span>Dashboard</span>
					</a>
				</li>
			<?php elseif($this->session->userdata('role') == 'siswa'):  ?>
				<!-- Nav Item - Dashboard -->
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('siswa') ?>">
						<i class="bi bi-hash"></i>
						<span>Dashboard</span>
					</a>
				</li>
			<?php endif;  ?>

            <!-- Divider -->
            <hr class="sidebar-divider">

			<!-- Heading -->
			<?php if( ($this->session->userdata('role') == 'panitia') || ($this->session->userdata('role') == 'kepsek')):  ?>

				<!-- Nav Item - Utilities Collapse Menu -->
				<li class="nav-item">
					<?php if($this->session->userdata('role') == 'panitia'): ?>
						<a class="nav-link"  href="<?= base_url('panitia/prodi') ?>">
							<i class="bi bi-tag"></i>
							<span>
								Program Studi 
							</span>
						</a>
					<?php endif; ?>

					<a class="nav-link"  href="<?= base_url('panitia/listCalonSiswa') ?>">
						<i class="bi bi-list-ol"></i>
						<span>
							Approval 
							<?php if($alert > 0): ?>
								<span class="badge fw-bold badge-danger ms-3"><?= $alert?></span>
							<?php endif; ?> 
						</span>
					</a>

					<a class="nav-link"  href="<?= base_url('panitia/listSiswaBaru'); ?>">
						<i class="bi bi-person"></i>
						<span>Siswa Baru</span>
					</a>

					<?php if($this->session->userdata('role') == 'kepsek'): ?>
						<a class="nav-link"  href="<?= base_url('panitia/listTdkLolosVerifikasi'); ?>">
							<i class="bi bi-person"></i>
							<span>Gagal Verifikasi</span>
						</a>
					<?php endif; ?>

					<a class="nav-link" href="<?= base_url('panitia/guide'); ?>">
						<i class="bi bi-bookmark-check"></i>
						<span>Panduan Sistem</span>
					</a>
				</li>

			<?php elseif($this->session->userdata('role') == 'siswa'): ?>
				<!-- Heading -->
				<div class="sidebar-heading">
					Menu
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
								<span class="badge bg-danger ms-5 rounded-circle"><?= $alert ?></span>
							<?php endif; ?>
						</a>
					<?php else: ?>
						<a class="nav-link" href="<?= base_url('siswa/daftar'); ?>">
							<i class="bi bi-folder2-open"></i>
							<span>Daftar</span>
						</a>
					<?php endif; ?>
					<a class="nav-link" href="<?= base_url('siswa/guide'); ?>">
						<i class="bi bi-bookmark-check"></i>
						<span>Panduan Sistem</span>
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
