<?php
class Aksi_mahasiswa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mahasiswa_model');
    }
    public function tampil($id,$nims){
        $edit['edit']= $this->mahasiswa_model->user_edit($id)->result();
        $edit['edit2']= $this->mahasiswa_model->user_editlogin($nims)->result();
        $this->load->view('aksi/aksi_mahasiswa',$edit);
    }
    public function save_edit($id,$nims){
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $jurusan = $this->input->post('jurusan');
        $status = $this->input->post('status');
       
            $data =array(
                'nim'=> $nim,
                'nama_siswa'=>$nama,
                'jurusan'=>$jurusan,
                'status_akun'=>$status,
            );
            $this->mahasiswa_model->updateDataMahasiswa('siswa',$data,$id);

            $data2 = array(
                'nim_asuser'=> $nim,
                'nama'=>$nama,
                'password'=>'mahasiswa',
                'level'=>'Mahasiswa',
                'status'=>$status,
            );
            $this->mahasiswa_model->updateDataMahasiswalogin('login',$data2,$nims);
            redirect('lihat_data/lihat_data_mahasiswa');

       

    }

    public function delete_mahasiswa($id,$nims){
        $this->mahasiswa_model->deleteMahasiswa1($id);
        $this->mahasiswa_model->deleteMahasiswa2($nims);
        redirect('lihat_data/lihat_data_mahasiswa');
        
    }
        
    
}