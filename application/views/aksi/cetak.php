<style>
table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
h4,h1{
    text-align: center;
      
}
hr{
    background-color: #000000;
}
h4{
    margin:0;
    padding:0;
}

</style>

<h1><?php echo $title ?></h1>
<h4><?php echo $alamat ?></h4>
<h4><?php echo $alamat2 ?></h4>
<br>
<hr>
<br><br>

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
											<th>Nama Dosen Pembimbing 1</th>
											<th>Nama Dosen Pembimbing 2</th>
											<th>Catatan Prodi</th>
											<th>Catatan Dosen Pembimbing 1</th>
											<th>Catatan Dosen Pembimbing 2</th>
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
											<td ><?php echo $data->nama_dosen1?></td>
											<td ><?php echo $data->nama_dosen2?></td>
											<td ><?php echo $data->cat_prodi?></td>
											<td ><?php echo $data->cat_dosen?></td>
											<td ><?php echo $data->cat_dosen2?></td>
											
											
											
										</tr>
										
									<?php endforeach;?>
									</tbody>
								</table>
							</div>
					