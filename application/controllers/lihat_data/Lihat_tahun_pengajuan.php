<?php
class Lihat_tahun_pengajuan extends CI_Controller{

    public function index(){
        if($this->session->userdata('logged_in')===TRUE){
            $inputan = $this->input->post('tahun');
            $data['data']=$this->mahasiswa_model->cek_tahun($inputan)->result();
        $this->load->view('lihat_data/lihat_tahun_pengajuan',$data);
        }else {
            $this->load->view('halaman_login/login');
        }
    }
}