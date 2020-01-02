<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('templates/header.php');?>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
					<img src="<?php echo base_url()?>assets/assets_home/img/logo.png" width='50px'>
					</div>
					<div class="card fat">
						<div class="card-body">
							<h6 class="card-title">Halaman Mengaktifkan Akun Mahasiswa</h6>
							<?php $this->view('massage_login');?>
							<form method="POST" class="my-login-validation" action="<?php echo site_url('register/cek_aktif/')?>">
								<div class="form-group">
									<label for="Username">NPM</label>
									<input id="Username" type="text" class="form-control" name="nim" value="" required autofocus>
									
								</div>

								<div class="form-group">
									<label for="password">Nama Mahasiswa
										
									</label>
									<input id="nama" type="text" class="form-control" name="nama" required data-eye>
								    
								</div>

								

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block" name="login">
										Aktifkan
									</button>
								</div>
								
								

								<div class="mt-4 text-center">
									 Akun Sudah <a href="<?php echo site_url('login')?>">Aktif</a>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
 <?php $this->load->view('templates/footer.php');?>
</body>
</html>
