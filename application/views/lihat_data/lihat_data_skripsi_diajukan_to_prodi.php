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
					<h1 class="h3 mb-2 text-gray-800">Data Skripsi Diajukan </h1>

					<!-- dosenTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
						<?php $this->view('massage');?>
							<div class="row">
							<?php
								if($this->session->userdata('level')=='Mahasiswa'){
								?>
								<div class="col-sm-2"> <a href="<?php echo site_url('form_input/kirim_judul/index/'.$_SESSION['nim_asuser'])?>"
										class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;Input Judul</a></div>
								<?php }?>
							</div>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
									<thead>
										<tr>
											<th>No</th>
											<th>Nim</th>
											<th>Nama Mahasiswa</th>
											<th>Status Approve</th>
											<th>Judul</th>
											<th>Keterangan</th>
											<th>Aksi</th>
											
										</tr>
									</thead>
									<tbody>

									
									
									<?php
									$no=1;
									 foreach ($data as $data) :?>
										<tr>
											<td><?php echo $no++?></td>
											<td ><?php echo $data->id_nim ?></td >
											<td ><?php echo $data->nama_siswa ?></td >
											<td ><?php echo $data->approve_prodi?></td>
											<td ><?php echo $data->judul?></td>
											<td ><?php echo $data->keterangan?></td>
											
												<?php
												$seg =$_SESSION['nim_asuser'];
												?>
											<td width="200px">
														<?php
														if($this->session->userdata('level')=='Mahasiswa'){
														?>
												<a href="<?php echo site_url('/aksi/aksi_skripsi/edit/').$data->id_skripsi.'/'.$seg?>" class="btn btn-success mb-2"><i
														class='fas fa-edit'></i>Edit</a>
														<?php }?>
												<a href="<?php echo site_url('/aksi/aksi_skripsi/hapusdata/').$data->id_skripsi.'/'.$seg?>" class="btn btn-danger mb-2"><i
														class='fas fa-trash'></i>&nbsp;Hapus</a>
														<?php
														if($this->session->userdata('level')=='Prodi'){
														?>
												<a href="<?php echo site_url('approve/approve_prodi/index/').$data->id_nim?>" class="btn btn-primary mb-2"><i
														class='fas fa-thumbs-up'></i>&nbsp;Approve</a>
														<?php }?>
											</td>
										</tr>
									<?php endforeach;?>
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
	<script>
	$(document).ready(function () {
	$('#scr').DataTable({
	"scrollX": true
	});
	$('.dataTables_length').addClass('bs-select');
	});
	</script>
</body>

</html>
