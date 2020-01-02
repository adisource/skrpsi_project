<?php
class Register extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->model('auth_model');

    }
    public function index(){
        $this->load->view('halaman_login/register');
    }

    public function cek_aktif(){
        $nim= $this->input->post('nim');
        $nama= $this->input->post('nama');
        $cek = $this->auth_model->validate_data($nim,$nama);
        if ($cek->num_rows() > 0) {

            $data = array(
                'status'=>'Aktif'
            );

            $data2 = array(
                'status_akun'=>'Aktif'
            );
            
            $this->auth_model->aktifkan('login',$data,$nim);
            $this->auth_model->aktifkan2('siswa',$data2,$nim);
            $this->session->set_flashdata('akun','akun sudah aktif');
            redirect('login');
        }
        else{
            redirect('register');
        }




        
    }
}