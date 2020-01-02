<?php
class Lihat_profil_dosen extends CI_Controller{

    public function index($id){
        if($this->session->userdata('logged_in')===TRUE){
            $data['dosen2']= $this->skripsi_model->lihat_profil($id)->result();
            $data['limit']= $this->skripsi_model->lihat_profil($id)->result();
            $data['join2']= $this->dosen_model->join_dosen2()->result();
            $data['join']= $this->dosen_model->join_dosen()->result();
        $this->load->view('lihat_data/lihat_profil_dosen',$data);
        }else {
            $this->load->view('halaman_login/login');
        }

    }
}