<?php if($this->session->has_userdata('gagal')):?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Data sudah diinput</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php elseif($this->session->has_userdata('lama')):?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong> Password lama tidak cocok coba ulangi lagi!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php elseif($this->session->has_userdata('confbaru')):?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Confirmasi password tidak cocok coba lagi!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php elseif($this->session->has_userdata('success')):?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> Data berhasil diinput</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php elseif($this->session->has_userdata('berhasil')):?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Password berhasil diganti silakan login menggunakan password baru anda</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php elseif($this->session->has_userdata('update')):?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Judul berhasil diupdate</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php endif;?>

