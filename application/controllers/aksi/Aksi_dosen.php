<?php
class Aksi_dosen extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('dosen_model');
    }
    public function tampil($id){
        $edit['edit']=$this->dosen_model->user_edit($id)->result();
        $this->load->view('aksi/aksi_dosen',$edit);
    }
    public function save_edit(){
        $nidn = $this->input->post('nidn');
        $nama = $this->input->post('nama');
        $bd_keahlian= $this->input->post('bd_studi');

    }

    public function delete_dosen($id,$nims){
        $this->dosen_model->Deletedosen($id);
        $this->dosen_model->Deletedosenlogin($nims);
        redirect('lihat_data/lihat_data_dosen');
        
    }
   
    
}