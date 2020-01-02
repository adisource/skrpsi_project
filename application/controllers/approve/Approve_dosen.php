<?php

class Approve_dosen extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('approve_model');
        
    }


    public function index($nim){
        $data['mhs']=$this->approve_model->get_mahasiswa($nim)->result();
        $data['skripsi']=$this->approve_model->get_skripsi($nim)->result();
        $this->load->view('approve/approve_dosen',$data);
    }
    public function update_approveDosen($nim){
        $approve_dosen=$this->input->post('approve_dosen');
        $cat_dosen=$this->input->post('cat_dosen');
        
        $data=array(
            'approve_dosen'=>$approve_dosen,
            'cat_dosen'=>$cat_dosen,
        );
        
        $this->approve_model->update_skripsi('skripsi',$data,$nim);
        
        redirect('lihat_data/lihat_skripsi_dikirim_prodi/index/'.$_SESSION['nim_asuser']);
         
    }

    
}