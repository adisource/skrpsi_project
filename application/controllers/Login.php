<?php

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->model('auth_model');

    }

    public function index(){
        $this->load->view('halaman_login/login');
    }

    public function auth(){
        $user = $this->input->post('nim_asuser',TRUE);
        $pass = $this->input->post('password',True);
        $validate =$this->auth_model->validate($user,$pass);
        if($validate->num_rows()> 0){
            $data        = $validate->row_array();
            $id          = $data['id'];
            $nama        = $data['nama'];
            $nim_user    = $data['nim_asuser'];
            $password    = $data['password'];
            $level       = $data['level'];
            $status_akun = $data['status'];
            $tampil_data = array(
                'id'        => $id,
                'nim_asuser'=>  $nim_user,
                'nama'      =>  $nama,
                'password'  =>  $password,
                'level'     =>  $level,
                'logged_in' =>  TRUE,
                'status'    =>  $status_akun
            );

            $this->session->set_userdata($tampil_data);
            if($level=='Prodi'){
                redirect('home_dashboard/home');
            }
            else if($level=='Dosen'){
                redirect('home_dashboard/home');
            }
            else if($level=='Mahasiswa' && $status_akun=="Aktif"){
                redirect('home_dashboard/home');
            }
            else {
            echo $this->session->set_flashdata('no','Username dan password salah');
            redirect('login');
            }
        }else{
            echo $this->session->set_flashdata('gagal','Username dan password salah');
            redirect('login');
        }
       
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}