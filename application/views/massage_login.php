<?php if($this->session->has_userdata('gagal')):?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Username dan password salah</strong>
 
  </button>
</div>

<?php elseif($this->session->has_userdata('success')):?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> Data berhasil diinput</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php elseif($this->session->has_userdata('no')):?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong> Status akun anda belum aktif silakan aktifkan terlebih dahulu</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php elseif($this->session->has_userdata('akun')):?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> Status akun anda sudah aktif silakan login </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php endif;?>

