<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('templates/header_home.php');?>

<body id="page-top">
	


	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<?php $this->load->view('templates/sidebar.php');?>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<?php $this->load->view('templates/navbar.php');?>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Kirim Judul</h1>

					</div>
					<div class="row">
						<div class="col-sm-1"></div>
						<!-- Border Bottom Utilities -->
						<div class="col-lg-10">
							<div class="card mb- py-3 border-bottom-success">
								<div class="card-body">
								<?php $this->view('massage');?>
								<?php foreach ($mahasiswa as $mahasiswa){
										$nim_mahasiswa = $mahasiswa->nim_asuser;
										$nama=$mahasiswa->nama;
										
										}?>

									<?php foreach ($mhs as $mhs){
										$nim = $mhs->nim;
										$nama=$mhs->nama_siswa;
										$jurusan=$mhs->jurusan;
										
										
										}?>
									
									
									<form action="<?php echo base_url()?>/form_input/kirim_judul/tambah_judul" method="POST">
									
										<div class="form-group row">
											<label for="inputEmail3" class="col-sm-2 col-form-label">NPM</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputEmail3 "
													placeholder="NPM" value="<?php echo $nim_mahasiswa?>" name="nim"  readonly>
													
													
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword3" class="col-sm-2 col-form-label">Nama
												Mahasiswa</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputPassword3"
													placeholder="Nama Mahasiswa"  value="<?php echo $nama?>" name="nama" readonly>
													<input type="hidden"value="" >
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword3" class="col-sm-2 col-form-label">Jurusan
												</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputPassword3"
													placeholder="Jurusan"  value="<?php echo $jurusan?>" name="jurusan" readonly>
													<input type="hidden"value="" >
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputPassword3"
													placeholder="Status Proposal" name="status">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword3" class="col-sm-2 col-form-label">Angkatan</label>
											<div class="col-sm-10">
												<select class="form-control" name="angkatan">
													<option>--Pilih--</option>
													<?php
                         							   $thn_skr = date('Y');
                          							  for ($x = $thn_skr; $x >= 2010; $x--) {
                           							 ?>
													<option value="<?php echo $x ?>"><?php echo $x ?></option>
													<?php
                           								 }
                           								 ?>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword3" class="col-sm-2 col-form-label">Tahun
												Pengajuan</label>
											<div class="col-sm-10">
												<select class="form-control" name="tahun_pengajuan">
													<option>--Pilih--</option>
													<?php
                           							 $thn_skr = date('Y');
                            						for ($x = $thn_skr; $x >= 2010; $x--) {
                            						?>
													<option value="<?php echo $x ?>Genap"><?php echo $x ?>&nbsp;Genap
													</option>
													<option value="<?php echo $x ?>Ganjil"><?php echo $x ?>&nbsp;Ganjil
													</option>
													<?php
                            							}
                            								?>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword3" class="col-sm-2 col-form-label">Jenis
												Skripsi</label>
											<div class="col-sm-10">
												<select class="form-control" name="jenis_skripsi">
													<option>--Pilih--</option>
													<option value="Kuanti Analis">Kuanti Analis</option>
													<option value="Kuanti Penerapan">Kuanti Penerapan
													</option>
													<option value="Kuanti Penerapan">Pengembangan
													</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword3" class="col-sm-2 col-form-label">Judul
												Skripsi</label>
											<div class="col-sm-10">
												<textarea name="judul" id="judul" cols="30" rows="2"
													class="form-control" name="judul"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputPassword3"
												class="col-sm-2 col-form-label">Keterangan</label>
											<div class="col-sm-10">
												<textarea id="judul" cols="30" rows="5"
													class="form-control" name="ket"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-10">
												<button type="submit" class="btn btn-primary"><i
														class="fas fa-paper-plane">&nbsp;Action</i></button>
												<button type="submit" class="btn btn-danger"><i
														class="fas fa-undo">&nbsp;Reset</i></button>
											</div>
										</div>
									</form>
									
						
						
						
					
								</div>
							</div>
						</div>
						<div class="col-sm-1"></div>
						<!-- Content Row -->
					</div>
				</div>
				<!-- Content Row -->

				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->
			<div class="col-sm-2"></div>
			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy;Apjusi</span>
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

	<?php $this->load->view('templates/modal.php');?>
	<!-- Bootstrap core JavaScript-->

	<?php $this->load->view('templates/js.php');?>
</body>

</html>
