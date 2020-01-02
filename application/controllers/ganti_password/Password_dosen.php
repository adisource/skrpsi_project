<?php
class Password_dosen extends CI_Controller{

    public function index($id){
        if($this->session->userdata('logged_in')===TRUE){
        $data['dosen']= $this->dosen_model->get_userByIdDosen($id)->result();
        $this->load->view('ganti_password/password_dosen',$data);
        }else{
            $this->load->view('halaman_login/login');
        }
    }
    public function cek($id){
        $pass_lama = $this->input->post('password',True);
        $pass_baru = $this->input->post('passbaru');
        $conf  = $this->input->post('conf');
        $nip = $this->input->post('nip',True);
        $pass_from_db = $this->auth_model->validate($nip,$pass_lama);
        if (!$pass_from_db->num_rows() > 0) {
            echo $this->session->set_flashdata('lama',"salah tidak cocok");
             redirect('/ganti_password/password_dosen/index/'.$_SESSION['nim_asuser']);
            }else if($pass_baru != $conf){
            echo $this->session->set_flashdata('confbaru',"konfirmasi tidak cocok");
            redirect('/ganti_password/password_dosen/index/'.$_SESSION['nim_asuser']);
            }else{
                $pass = array(
                    'password'=>$pass_baru
                );
                $this->dosen_model->updateDataDosenlogin('login',$pass,$id);
                echo $this->session->set_flashdata('berhasil',"berhasil diubah");
                redirect('/ganti_password/password_dosen/index/'.$_SESSION['nim_asuser']);
            }
        }
}