<div class="container-fluid bg-gray-200 mt-4">
	<div class="container"  style="padding-top: 5px;">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb bg-transparent" style="padding-bottom: 10px;">
				<li class="breadcrumb-item"><a class="text-success-2" href="<?= base_url('panitia'); ?>">Beranda</a></li>
				<li class="breadcrumb-item"><a class="text-success-2" href="<?= base_url('panitia/manajemenAdmin') ?>">List Admin</a></li>
				<li class="breadcrumb-item active" aria-current="page">Tambah Admin</li>
			</ol>
		</nav>
	</div>
</div>
<!-- Begin Page Content -->
 <div class="container-fluid mt-4">
	 <div class="container">
		 <h1 class="h3 mb-4 text-dark">Tambah Admin</h1>
	 </div>
	
	<div class="row justify-content-center mb-5">
		<div class="col-7">
			<div class="card shadow-sm border-top-success">
				<div class="card-header">
					<h5 class="card-title"><i class="bi bi-person-fill"></i> Data Diri</h5>
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="mb-3">
							<label for="username" class="form-label">Username</label>
							<input type="text" class="form-control <?= (form_error('username')) ? 'is-invalid' : '' ?>" id="username" name="username" autocomplete="off" value="<?= set_value('username') ?>">
							<?= form_error('username', '<div class="invalid-feedback"><i class="bi bi-exclamation-circle"></i> ', '</div>') ?>
						</div>
						<div class="mb-3">
							<label for="nip" class="form-label">NIP</label>
							<input type="text" class="form-control <?= (form_error('nip')) ? 'is-invalid' : '' ?>" id="nip" name="nip" autocomplete="off" value="<?= set_value('nip') ?>">
							<?= form_error('nip', '<div class="invalid-feedback"><i class="bi bi-exclamation-circle"></i> ', '</div>') ?>
						</div>
						<div class="mb-3">
							<label for="nama" class="form-label">Nama</label>
							<input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" autocomplete="off" value="<?= set_value('nama') ?>">
							<?= form_error('nama', '<div class="invalid-feedback"><i class="bi bi-exclamation-circle"></i> ', '</div>') ?>
						</div>
						<div class="mb-3">
							<label for="role" class="form-label">Role</label>
							<select name="role" id="role" class="form-select <?= (form_error('role')) ? 'is-invalid' : '' ?>">
								<option value="" selected>--pilih--</option>
								<option value="panitia" <?= set_select('role', 'panitia')?>>Panitia</option>
								<option value="kepsek" <?= set_select('role', 'kepsek') ?>>Kepsek</option>
							</select>
							<?= form_error('role', '<div class="invalid-feedback"><i class="bi bi-exclamation-circle"></i> ', '</div>') ?>
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control <?= (form_error('password')) ? 'is-invalid' : '' ?>" id="password" name="password" autocomplete="off">
							<?= form_error('password', '<div class="invalid-feedback"><i class="bi bi-exclamation-circle"></i> ', '</div>') ?>
						</div>
						<div class="mb-3">
							<label for="password2" class="form-label">Konfirmasi Password</label>
							<input type="password" class="form-control <?= (form_error('password')) ? 'is-invalid' : '' ?>" id="password2" name="password2" autocomplete="off">
						</div>
						<button type="submit" class="btn btn-success mt-4">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
 </div>
