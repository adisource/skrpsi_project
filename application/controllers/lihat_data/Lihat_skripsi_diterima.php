<?php
class Lihat_skripsi_diterima extends CI_Controller{
    function __construct(){
        parent::__construct();
        
    }

    public function index(){

        if($this->session->userdata('logged_in')===TRUE){
        $data['data']=$this->skripsi_model->get_Statusditerima()->result();
        $data['dosen']=$this->approve_model->lihat_dosen()->result();
       
       $this->load->view('lihat_data/lihat_skripsi_diterima',$data);

        }else {
            $this->load->view('halaman_login/login');
        }
    }
   
  
   
}