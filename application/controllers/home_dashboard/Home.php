<?php
class Home extends CI_Controller{

    public function index(){
     
        if($this->session->userdata('logged_in')===TRUE){
            $data['data1']= $this->skripsi_model->banyak_data('Kuanti Analis');
            $data['data2']= $this->skripsi_model->banyak_data('Kuanti Penerapan');
            $data['data3']= $this->skripsi_model->banyak_data('Pengembangan');
            $data['data4']= $this->skripsi_model->banyak_data2('Waiting');
            $data['data5']= $this->skripsi_model->banyak_data2('Diterima');
            $data['data6']= $this->skripsi_model->banyak_data2('Ditolak');
            

                $this->load->view('home_dashboard/home',$data);
           
            
        }else{
            
            $this->load->view('halaman_login/login');
        }
        
    }
}