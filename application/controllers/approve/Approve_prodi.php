<?php

class Approve_prodi extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('approve_model');
        
    }


    public function index($nim){
        $data['mhs']=$this->approve_model->get_mahasiswa($nim)->result();
        $data['skripsi']=$this->approve_model->get_skripsi($nim)->result();
        $this->load->view('approve/approve_prodi',$data);
    }

    public function update_approve($nim){
        $aprove_prodi = $this->input->post('approve_prodi');
        $catatan_prodi =$this->input->post('cat_prodi');
        $data = array(
            'approve_prodi'=>$aprove_prodi,
            'cat_prodi'=>$catatan_prodi
        );
        $data2 = array(
            'approve_prodi'=>$aprove_prodi,
            
        );

        $this->approve_model->update_skripsi('skripsi',$data,$nim);
        $this->approve_model->update_skripsi('kategori',$data2,$nim);
        redirect('lihat_data/lihat_skripsi_diajukan');
    }
}