<?php
class Input_mahasiswa extends CI_Controller{

    public function index(){
    if($this->session->userdata('logged_in')===TRUE){
    $this->load->view('form_input/input_mahasiswa');

    }else {
    $this->load->view('halaman_login/login');
        } 
    }
    public function tambah_mahasiswa(){
    $id  = $this->input->post('id');
    $nim = $this->input->post('nim');
    $nama_mahasiswa = $this->input->post('nama_siswa');
    $jurusan = $this->input->post('jurusan');
    $cek_data = $this->mahasiswa_model->cek_mahasiswa($nim,$nama_mahasiswa,$jurusan);
    if ($cek_data->num_rows() > 0) {
       $this->session->set_flashdata('gagal',"Mahasiswa sudah di input");
       redirect('form_input/input_mahasiswa/index');
    }else{
        $data= array(
        'nim'=> $nim,
        'nama_siswa'=> $nama_mahasiswa,
        'jurusan'=>$jurusan,
        'status_akun'=>'Tidak Aktif'

        );
        $this->mahasiswa_model->tambahMahasiswa('siswa',$data);

        $datalogin= array(
            'nim_asuser'=> $nim,
            'nama'=> $nama_mahasiswa,
            'password'=>'mahasiswa',
            'level'=>'Mahasiswa',
            'status'=>'Tidak Aktif'
            );
        $this->mahasiswa_model->tambahMahasiswa('login', $datalogin);
        $this->session->set_flashdata('success',"Berhasil dinput");
        redirect('form_input/input_mahasiswa/index');
        
        }

    }

}