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
					<?php if ($this->session->userdata('level')==="Dosen") {?>

					<h1 class="h3 mb-2 text-gray-800">Data Skripsi Dikirim Prodi </h1>
					<?php
					}?>
					
					<!-- dosenTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<div class="row">
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
											<th>Status</th>
											<th>Judul</th>
											<th>Accept Dosen Pembimbing 1</th>
											<th>Accept Dosen Pembimbing 2</th>
											<th>NIDN Dosen Pembimbing 1</th>
											<th>NIDN Dosen Pembimbing 2</th>
											<th>Nama Dosen Pembimbing 1</th>
											<th>Nama Dosen Pembimbing 2</th>
											<th>Catatan Prodi</th>
											<th>Catatan Dosen Pembimbing 1</th>
											<th>Catatan Dosen Pembimbing 2</th>
									
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
											<td ><?php echo $data->nama_siswa?></td>
											<td ><?php echo $data->approve_prodi?></td>
											<td ><?php echo $data->judul?></td>
											<td ><?php echo $data->approve_dosen?></td>
											<td ><?php echo $data->approve_dosen2?></td>
											<td ><?php echo $data->id_dosen?></td>
											<td ><?php echo $data->id_dosen2?></td>
											<td ><?php echo $data->nama_dosen1?></td>
											<td ><?php echo $data->nama_dosen2?></td>
											<td ><?php echo $data->cat_prodi?></td>
											<td ><?php echo $data->cat_dosen?></td>
											<td ><?php echo $data->cat_dosen2?></td>
											
											<?php
											if($this->session->userdata('level')=='Dosen'){
											?>
											<td width="200px">
											<?php if($data->id_dosen==$_SESSION['nim_asuser']) {?>
											<a href="<?php echo site_url('approve/approve_dosen/index/'.$data->id_nim)?>" class="btn btn-primary mb-2"><i
														class='fas fa-thumbs-up'></i>&nbsp;Approve</a>
											<?php }?>
											<?php if($data->id_dosen2==$_SESSION['nim_asuser']) {?>
											<a href="<?php echo site_url('approve/approve_dosen2/index/'.$data->id_nim)?>" class="btn btn-primary mb-2"><i
														class='fas fa-thumbs-up'></i>&nbsp;Approve</a>
											<?php }?>
											</td>
											<?php }?>
											
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
