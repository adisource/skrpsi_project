<?php
class Lihat_profil extends CI_Controller{

    public function index($user){
        if($this->session->userdata('logged_in')===TRUE){
            $data['profil']=$this->auth_model->profil_user($user)->result();
            $data['limit']= $this->skripsi_model->lihat_profil($user)->result();
        $this->load->view('lihat_data/lihat_profil',$data);
        }else {
            $this->load->view('halaman_login/login');
        }

    }
}