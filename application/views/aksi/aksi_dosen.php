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
            <h1 class="h3 mb-0 text-gray-800">Edit Dosen</h1>
           
          </div>

          <!-- Content Row -->
           <!-- Border Left Utilities -->
           <div class="col-lg-12">
            <div class="card mb-4 py-3 border-left-primary">
              <div class="card-body">
              <?php $this->view('massage');?>

              <?php
              foreach ($edit as $edit) {
                $nidn= $edit->nip;
                $nama=$edit->nama_dosen;
                $bd_keahlian=$edit->bd_studi;
              }
              ?>
            
									
              <form action="" method="POST">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NIDN</label >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="NIDN" name='nim' required value="<?php echo $nidn?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Dosen</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Nama Dosen" name='nama' required value="<?php echo $nama?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Bidang Keahlian</label>
                    <div class="col-sm-10">
                      <select class="form-control" name='bd_studi' required id="keahlian">
                      <option>--Pilih--</option>
                      <option value="Multimedia">Multimedia</option>
                      <option value="Jaringan">Jaringan</option>
                      <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                      </select>
                    </div>
                  </div>
                  
                  

                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane">&nbsp;Action</i></button>
                     
                    </div>
                  </div>
                </form>
              </div>
            </div>

           

            </div>

            <!-- Border Bottom Utilities -->

          <!-- Content Row -->
         

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
    $(function () {
      $('#keahlian:selected').val(<?php echo $bd_keahlian ?>)
      
    })
    </script>
</body>

</html>
