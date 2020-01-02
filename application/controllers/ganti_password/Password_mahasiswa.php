<?php
class Password_mahasiswa extends CI_Controller{

    public function index($id){
        if($this->session->userdata('logged_in')===TRUE){
        $data['mahasiswa']= $this->mahasiswa_model->mahasiswaById($id)->result();
        $this->load->view('ganti_password/password_mahasiswa',$data);
        
    }else {
        $this->load->view('halaman_login/login');
        }
    } 
        public function cek($id){
        $pass_lama = $this->input->post('password');
        $pass_baru = $this->input->post('passbaru');
        $conf  = $this->input->post('conf');
        $nim = $this->input->post('nim');
        $pass_from_db = $this->auth_model->validate($nim,$pass_lama);
        if (!$pass_from_db->num_rows() > 0) {
            echo $this->session->set_flashdata('lama',"salah tidak cocok");
             redirect('/ganti_password/password_mahasiswa/index/'.$_SESSION['nim_asuser']);
            }else if($pass_baru != $conf){
            echo $this->session->set_flashdata('confbaru',"konfirmasi tidak cocok");
            redirect('/ganti_password/password_mahasiswa/index/'.$_SESSION['nim_asuser']);
            }else{
                $pass = array(
                    'password'=>$pass_baru
                );
                $this->mahasiswa_model->updateDataMahasiswalogin('login',$pass,$id);
                echo $this->session->set_flashdata('berhasil',"berhasil diubah");
                redirect('/ganti_password/password_mahasiswa/index/'.$_SESSION['nim_asuser']);
            }
        }
}