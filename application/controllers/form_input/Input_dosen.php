<?php
class Input_dosen extends CI_Controller{
    function __contruct(){
        parent::__contruct();
        $this->load->model('user_model');
        
    }


    public function index(){
        if($this->session->userdata('logged_in')===TRUE){
        $this->load->view('form_input/input_dosen');
    }else{
        $this->load->view('halaman_login/login');
        }
    }
    public function tambah_dosen(){
        $id = $this->input->post('id');
        $nip =$this->input->post('nip');
        $nama_dosen = $this->input->post('nama_dosen');
        $bd_studi = $this->input->post('bd_studi');
        $cek_data = $this->dosen_model->cek_dosen($nip,$nama_dosen,$bd_studi);
        if($cek_data->num_rows() > 0){
           $this->session->set_flashdata('gagal',"Dosen ini udah di input");
           redirect('form_input/input_dosen/index');
        }else{
            $data = array(
                'nip' => $nip,
                'nama_dosen'=> $nama_dosen,
                'bd_studi'=>$bd_studi
                );
            $input = $this->dosen_model->tambahDosen('dosen',$data);

            $datalogin = array(
                'nim_asuser' => $nip,
                'nama'=> $nama_dosen,
                'password'=>'dosen',
                'level'=>'Dosen'
                );
            $input2 = $this->dosen_model->tambahDosen('login',$datalogin);
            $this->session->set_flashdata('success',"Berhasil dinput");
            redirect('form_input/input_dosen/index');
        }
    }
}
