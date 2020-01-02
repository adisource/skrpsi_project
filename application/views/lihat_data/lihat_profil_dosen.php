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
          <?php foreach ($dosen2 as $dosen2) {
             
             $mhs_bb=$dosen2->nama_siswa;
              
          }?>
         

          <?php foreach ($join as $join) {
            $nidn_dosen =$join->nip;
            $nama_dosen =$join->nama_dosen;
            $bd_studi =$join->bd_studi;

          }?>
          <?php foreach ($join2 as $join2) {
            $nidn_dosen2 =$join2->nip;
            $nama_dosen2 =$join2->nama_dosen;
            $bd_studi2 =$join2->bd_studi;

          }?>


    
           
          </div>
          <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="<?php echo base_url('assets/img/admin.png')?>" alt=""/>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                            <?php if ($dosen2->id_dosen2==$_SESSION['nim_asuser']) {?>
                                                <h5><?php echo $nama_dosen2?></h5>
                                           <?php }?>
                                           <?php if ($dosen2->id_dosen==$_SESSION['nim_asuser']) {?>
                                                <h5><?php echo $nama_dosen?></h5>
                                           <?php }?>
                                                
               
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>NIDN</label>
                                            </div>
                                            <div class="col-md-6">
                                            <?php if ($dosen2->id_dosen2==$_SESSION['nim_asuser']) {?>
                                                <p><?php echo $nidn_dosen2?></p>
                                           <?php }?>
                                           <?php if ($dosen2->id_dosen==$_SESSION['nim_asuser']) {?>
                                                <p><?php echo $nidn_dosen?></p>
                                           <?php }?>
                                        
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Dosen</label>
                                            </div>
                                            <div class="col-md-6">
                                            <?php if ($dosen2->id_dosen2==$_SESSION['nim_asuser']) {?>
                                                <p><?php echo $nama_dosen2 ?></p>
                                           <?php }?>
                                           <?php if ($dosen2->id_dosen==$_SESSION['nim_asuser']) {?>
                                                <p><?php echo $nama_dosen ?></p>
                                           <?php }?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Bidang Keahlian</label>
                                            </div>
                                            <div class="col-md-6">
                                            <?php if ($dosen2->id_dosen2==$_SESSION['nim_asuser']) {?>
                                                <p><?php echo $bd_studi2?></p>
                                           <?php }?>
                                           <?php if ($dosen2->id_dosen==$_SESSION['nim_asuser']) {?>
                                                <p><?php echo $bd_studi?></p>
                                           <?php }?>
                                            </div>
                                        </div>
                                        
             
                                             
              
                                            
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Mahasiswa Bimbingan</label>
                                            </div>

                                            
                                            <div class="col-md-6">
                                            <?php foreach ($limit as $limit) {?>
                                            
                                            <li><?php print_r($limit->nama_siswa) ?></li>
                                           
                                              
                                              <?php }?>
                                            </div>
                                        </div>
                                     
                                        
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>           
        </div>
          
         

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
