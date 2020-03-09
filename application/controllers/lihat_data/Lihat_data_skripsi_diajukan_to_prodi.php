<?php
class Lihat_data_skripsi_diajukan_to_prodi extends CI_Controller{

    public function index(){
        if($this->session->userdata('logged_in')==TRUE){
        $data['data']=$this->skripsi_model->view_dataskripsi()->result();
        $this->load->view('lihat_data/lihat_data_skripsi_diajukan_to_prodi',$data);
        }else {
            $this->load->view('halaman_login/login');
        }
    }
}