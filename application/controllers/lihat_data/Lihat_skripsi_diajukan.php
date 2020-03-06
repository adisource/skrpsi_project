<?php
class Lihat_skripsi_diajukan extends CI_Controller{

    public function index(){
        if($this->session->userdata('logged_in')==TRUE){
        $data['data']=$this->skripsi_model->get_dataskripsi()->result();
        $this->load->view('lihat_data/lihat_skripsi_diajukan',$data);
        }else {
            $this->load->view('halaman_login/login');
        }
    }
}