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
						<h1 class="h3 mb-0 text-gray-800">Lihat Angkatan</h1>

					</div>
					<div class="container">
						<div class="row">
							<div class="col">

							</div>
							<div class="col-3">
								<form action="<?php echo site_url().'/lihat_data/lihat_tahun_pengajuan'?>" method="POST">
									<select name="tahun" class="form-control" id="myselect">
										<option value="" class="form-control">-Tahun-</option>
                    <?php
                      $thn_skr = date('Y');
                      for ($x = $thn_skr; $x >= 2010; $x--) {?>
													<option value="<?php echo $x ?>Genap"><?php echo $x ?>&nbsp;Genap
													</option>
													<option value="<?php echo $x ?>Ganjil"><?php echo $x ?>&nbsp;Ganjil
													</option>
													<?php
                            							}
                            								?>
									</select>
							</div>
							<div class="col">
								<button type="submit" class="btn btn-primary" name="klik" id="target"><i
										class="fas fa-eye"></i></button>
							</div>
							</form>
						</div>


						
						<div class="row">
						
						</div>
					</div>
					<br>
					<?php
					if (isset($_POST['klik'])) {
						if(empty($_POST['tahun'])){
					?>
							<Script>
								alert('Silakan Pilih Angkatan')

							</Script>
							<?php }else{?>
								<div class="card shadow mb-4">
						<div class="card-header py-3">
						
							
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
									<thead>
										<tr>
											<th>No</th>
											<th>Nim</th>
											<th>Nama Mahasiswa</th>
											<th>Jurusan</th>
											<th>Status Approve</th>
											<th>Judul</th>
											<th>Jenis Skripsi</th>
											<th>Keterangan</th>
											<th>Status Proposal</th>
											
											

										</tr>
									</thead>
									<tbody>
									<?php
									$no=1;
									foreach ($data as $data) {?>
									
										<tr>
											<td><?php echo $no++ ?></td>
											<td ><?php echo $data->id_nim?></td >
											<td ><?php echo $data->nama_siswa?></td >
											<td ><?php echo $data->jurusan?></td >
											<td ><?php echo $data->approve_prodi?></td>
											<td ><?php echo $data->judul?></td>
											<td ><?php echo $data->kategori_skripsi?></td>
											<td ><?php echo $data->keterangan?></td>
											<td ><?php echo $data->status?></td>
											
											
										</tr>
									<?php }?>
									
									</tbody>
								</table>
							</div>
						</div>
					</div>
							
						 
							<?php }?>
							<?php }?>

				

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

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
