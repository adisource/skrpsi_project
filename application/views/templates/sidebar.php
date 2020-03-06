<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon ">
  <img src="<?php echo base_url()?>assets/assets_home/img/logo.png" width='50px'>
  </div>
  <div class="sidebar-brand-text mx-3">Apjusi </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<?php if($this->session->userdata('level')=='Prodi'):?>
<!-- Nav Item - Dashboard -->
<li class="nav-item active ">
  <a class="nav-link" href="<?php echo site_url('home_dashboard/home')?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item ">
  <a class="nav-link" href="<?php echo site_url('form_input/input_dosen')?>">
    <i class="fas fa-paper-plane"></i>
    <span>Input Dosen</span></a>
</li>
<li class="nav-item ">
  <a class="nav-link" href="<?php echo site_url('lihat_data/lihat_data_dosen')?>">
    <i class="fas fa-eye"></i>
    <span>Lihat Data Dosen</span></a>
</li>
<li class="nav-item ">
  <a class="nav-link" href="<?php echo site_url('form_input/input_mahasiswa')?>">
    <i class="fas fa-paper-plane"></i>
    <span>Input Mahasiswa</span></a>
</li>
<li class="nav-item ">
  <a class="nav-link" href="<?php echo site_url('lihat_data/lihat_data_mahasiswa')?>">
    <i class="fas fa-eye"></i>
    <span>Lihat Data Mahasiswa</span></a>
</li>

<li class="nav-item ">
  <a class="nav-link" href="<?php echo site_url('lihat_data/lihat_skripsi_diajukan')?>">
    <i class="fas fa-eye"></i>
    <span>Lihat Skripsi Diajukan</span></a>
</li>
<li class="nav-item ">
  <a class="nav-link" href="<?php echo site_url('lihat_data/lihat_skripsi_diterima')?>">
    <i class="fas fa-bars"></i>
    <span>Judul Skripsi Diapprove</span></a>
</li>

<li class="nav-item ">
  <a class="nav-link" href="<?php echo site_url('lihat_data/lihat_angkatan')?>">
    <i class="fas fa-eye"></i>
    <span>Lihat Angkatan</span></a>
</li>
<li class="nav-item ">
  <a class="nav-link" href="<?php echo site_url('lihat_data/lihat_tahun_pengajuan')?>">
    <i class="fas fa-calendar"></i>
    <span>Tahun Pengajuan</span></a>
</li>
<!-- Nav Item - Utilities Collapse Menu -->
<!--sidebar dosen-->
<?php elseif($this->session->userdata('level')==='Dosen'):?>
<!-- Nav Item - Dashboard -->
<li class="nav-item active ">
  <a class="nav-link" href="<?php echo site_url('home_dashboard/home')?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Interface
</div>

<li class="nav-item ">
  <a class="nav-link" href="<?php echo site_url('lihat_data/lihat_skripsi_dikirim_prodi/index/'.$_SESSION['nim_asuser'])?>">
    <i class="fas fa-eye"></i>
    <span>Lihat Skripsi Dikirim </span></a>
</li>

<?php
$id= $_SESSION['id'];
?>
<li class="nav-item ">
  <a class="nav-link" href="<?php echo site_url('lihat_data/lihat_profil_dosen/index/'.$_SESSION['nim_asuser'])?>">
    <i class="fas fa-eye"></i>
    <span>Lihat Partner Dosen </span></a>
</li>


<li class="nav-item ">
  <a class="nav-link" href="<?php echo site_url('ganti_password/password_dosen/index/'.$_SESSION['nim_asuser'])?>">
    <i class="fas fa-cog"></i>
    <span>Ganti Password</span></a>
</li>
<!--akhir sidebar dosen-->

<!--mahasiswa-->
<?php elseif($this->session->userdata('level')=='Mahasiswa'):?>
<!-- Nav Item - Dashboard -->
<li class="nav-item active ">
  <a class="nav-link" href="<?php echo site_url('home_dashboard/home')?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item ">
  <?php
  $id=$_SESSION['id'];
  ?>
  
  <a class="nav-link" href="<?php echo site_url('form_input/kirim_judul/index/'.$_SESSION['nim_asuser'])?>">
    <i class="fas fa-paper-plane"></i>
    <span>Kirim Judul</span></a>
  
</li>



<li class="nav-item ">
  <a class="nav-link" href="<?php echo site_url('lihat_data/lihat_skripsi_diajukan')?>">
    <i class="fas fa-eye"></i>
    <span>Lihat Skripsi Diajukan</span></a>
</li>

<li class="nav-item ">
  <a class="nav-link" href="<?php echo site_url('lihat_data/lihat_data_dosen')?>">
    <i class="fas fa-eye"></i>
    <span>Lihat Data Dosen</span></a>
</li>

<li class="nav-item ">
  <a class="nav-link" href="<?php echo site_url('lihat_data/lihat_data_mahasiswa')?>">
    <i class="fas fa-eye"></i>
    <span>Lihat Data Mahasiswa</span></a>
</li>


<li class="nav-item ">
  <a class="nav-link" href="<?php echo site_url('lihat_data/lihat_skripsi_diterima')?>">
    <i class="fas fa-bars"></i>
    <span>Judul Skripsi Diterima</span></a>
</li>
<?php
$seg1 = $_SESSION['nim_asuser'];
?>
<li class="nav-item ">
  <a class="nav-link" href="<?php echo site_url('ganti_password/password_mahasiswa/index/').$seg1?>">
    <i class="fas fa-cog"></i>
    <span>Ganti Password</span></a>
</li>


<?php endif; ?>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>