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
							<h4 class="card-title">Login</h4>
							<?php $this->view('massage_login');?>
							<form method="POST" class="my-login-validation" novalidate="" action="<?php echo site_url('login/auth')?>">
								<div class="form-group">
									<label for="Username">Username</label>
									<input id="Username" type="text" class="form-control" name="nim_asuser" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password
										
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block" name="login">
										Masuk
									</button>
								</div>
								
								<div class="mt-3 text-left">
									Catatan:
									<ul>
									<li>Untuk User Mahasiswa silakan login mengunakan NPM yang sudah di aktifkan</li><br>
									<li>Secara default password untuk user Mahasiswa adalah "mahasiswa"</li><br>
									<li>Jika Belum mengaktifkan akun silakan klik di bawah ini!</li>
									</ul>
									 
								</div>

								<div class="mt-4 text-center">
									Aktifkan Akun Anda Silakan klik <a href="<?php echo site_url('register')?>">Aktifkan</a>
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
