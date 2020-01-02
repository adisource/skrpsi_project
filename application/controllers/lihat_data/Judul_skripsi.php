<?php
class Judul_skripsi extends CI_Controller{

    public function index(){
        if($this->session->userdata('logged_in')===TRUE){
        $this->load->view('lihat_data/judul_skripsi');
        }else {
            $this->load->view('halaman_login/login');
        }
    }
}