<?php
class Lihat_skripsi_dikirim_prodi extends CI_Controller{

    public function index($nim){
        if($this->session->userdata('logged_in')===TRUE){
        $data['data']=$this->approve_model->get_skripsidosen($nim)->result();
        $data['dosen']=$this->approve_model->lihat_dosen()->result();
        $this->load->view('lihat_data/lihat_skripsi_dikirim_prodi',$data);

        }else {
            $this->load->view('halaman_login/login');
        }
    }
}