<?php
class Lihat_angkatan extends CI_Controller{

    public function index(){
        if($this->session->userdata('logged_in')===TRUE){
            $inputan = $this->input->post('angkatan');
            $data['data']=$this->mahasiswa_model->cek_angkatan($inputan)->result();
        $this->load->view('lihat_data/lihat_angkatan',$data);
    }else {
        $this->load->view('halaman_login/login');
    }
}
}