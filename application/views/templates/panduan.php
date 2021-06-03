<?php if($this->session->flashdata('welcome')): ?>
	 <!-- buat nampung data alert -->
	 <div class="flash-data" data-flash="<?= $this->session->flashdata('welcome');?>"></div>
<?php unset($_SESSION['welcome']); endif; ?>
<div class="container-fluid bg-gray-200 mt-2">
	<div class="container"  style="padding-top: 5px;">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent" style="padding-bottom: 10px;">
				<?php if(($this->session->userdata('role') == 'kepsek') || ($this->session->userdata('role') == 'panitia')): ?>
					<li class="breadcrumb-item"><a class="text-primary-2"href="<?= base_url('panitia'); ?>">Beranda</a></li>
				<?php elseif(($this->session->userdata('role') == 'siswa')): ?>
					<li class="breadcrumb-item"><a class="text-primary-2"href="<?= base_url('siswa'); ?>">Beranda</a></li>
				<?php endif; ?>
				<li class="breadcrumb-item active" aria-current="page">Panduan SIstem</li>
			</ol>
		</nav>
	</div>
</div>
<div class="container-fluid mt-4">
	<div class="container">
		 <h1 class="h3 mb-4 text-dark">Panduan Sistem</h1>
		 <?php if($this->session->userdata('role') == 'siswa'): ?>
			<a href="<?= base_url('assets/guide/user-guide-siswa.pdf') ?>" download class="btn btn-md btn-primary-2"><i class="bi bi-download"></i> Download</a>
		<?php elseif(($this->session->userdata('role') == 'kepsek') || ($this->session->userdata('role') == 'panitia')): ?>
			<a href="<?= base_url('assets/guide/user-guide-panitia.pdf') ?>" download class="btn btn-md btn-primary-2"><i class="bi bi-download"></i> Download</a>
		<?php endif; ?>
	 </div>
	 <div class="row justify-content-center">
		 <div class="col-10 text-center">
			<?php if($this->session->userdata('role') == 'siswa'): ?>
			 	<iframe src="<?= base_url('assets/guide/user-guide-siswa.pdf') ?>" height="650px" width="800px" frameborder="0"></iframe>
			<?php elseif(($this->session->userdata('role') == 'kepsek') || ($this->session->userdata('role') == 'panitia')): ?>
				<iframe src="<?= base_url('assets/guide/user-guide-panitia.pdf') ?>" height="650px" width="800px" frameborder="0"></iframe>
			<?php endif; ?>
		 </div>
	 </div>

</div>
