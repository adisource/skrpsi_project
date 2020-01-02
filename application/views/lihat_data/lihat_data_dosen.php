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
					<h1 class="h3 mb-2 text-gray-800">Data Dosen</h1>

					<!-- dosenTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<div class="row">
							<?php
							if($this->session->userdata('level')=='Prodi'){
							?>
								<button type="button" class="btn btn-primary" data-toggle="modal"
									data-target="#exampleModal">
									<i class="fas fa-file-import"></i> Import Excel
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Cari File Exel </h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span> 
												</button>
											</div>
											<form
												action="<?php echo base_url();?>/lihat_data/lihat_data_dosen/saveimport"
												method="post" enctype="multipart/form-data">
												<div class="modal-body">
													<div class="form-group ">
													<input type="file" name="file" class="form-control" required/>
													</div>

												</div>

												<div class="modal-footer">
												<a href="<?php echo site_url('lihat_data/lihat_data_dosen/download')?>"
												class="btn btn-primary"><i class="fas fa-download"></i>&nbsp;Download Format</a>
													<button type="button" class="btn btn-secondary"
														data-dismiss="modal">Close</button>
													<input type="submit" class="btn btn-primary" name="import" value="Import">
												</div>
											</form>
										</div>
									</div>
								</div>
								
								<div class="col"><a href="<?php echo site_url('form_input/input_dosen')?>"
										class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;Input Manual</a></div>
										
								<?php }
								?>

							</div>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th width="20px">No</th>
											<th>NIDN</th>
											<th>Nama dosen</th>
											<th>Bidang Keahlian</th>
											<?php
											if($this->session->userdata('level')=='Prodi'){
											?>
											<th>Aksi</th>
											<?php }?>
										</tr>
									</thead>
									<tbody>
										<?php
          $no=1;
          foreach ($dosen as $dosen) {
          ?>
										<tr>
											<td><?php echo $no++ ?></td>
											<td><?php echo $dosen->nip ?></td>
											<td><?php echo $dosen->nama_dosen?></td>
											<td><?php echo $dosen->bd_studi ?></td>
											<?php
											if($this->session->userdata('level')=='Prodi'){
											?>
											<td width="250px"><a href="<?php echo base_url('aksi/aksi_dosen/tampil/'.$dosen->id)?>" class="btn btn-success"><i
														class='fas fa-edit'></i>Edit</a>
												<a href="<?php echo base_url('aksi/aksi_dosen/delete_dosen/'.$dosen->id.'/'.$dosen->nip)?>" class="btn btn-danger"><i class='fas fa-trash'></i>Hapus</a>
											</td>
											<?php }?>
										</tr>
										<?php }?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- Modal -->


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
