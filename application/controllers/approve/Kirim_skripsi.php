<?php
class Kirim_skripsi extends CI_Controller{

    public function index($nim){
        $data['mhs']=$this->approve_model->get_mahasiswa($nim)->result();
        $data['dosen']=$this->approve_model->lihat_dosen()->result();
        $data['dosen2']=$this->approve_model->lihat_dosen()->result();
        $data['skripsi'] = $this->approve_model->get_skripsi($nim)->result();
        $this->load->view('approve/kirim_skripsi',$data);
    }
    public function kirim_save($nim){
        $nama_dosen1= $this->input->post('dosen1');
        $nama_dosen2= $this->input->post('dosen2');
        $pecah = explode("-",$nama_dosen1);
        $namad1 = $pecah[1];
        $nidn =$pecah[0];

        $pecah2 = explode("-",$nama_dosen2);
        $namad2 =$pecah2[1];
        $nidn2 =$pecah2[0];
        $data = array(
            'approve_dosen'=>'Waiting',
            'approve_dosen2'=>'Waiting',
            'nama_dosen1'=>$namad1,
            'nama_dosen2'=>$namad2,
            'id_dosen'=>$nidn,
            'id_dosen2'=>$nidn2,
            'status_kirim'=>'Terkirim'
        );
        $this->approve_model->update_skripsi('skripsi',$data,$nim);

        redirect('lihat_data/lihat_skripsi_diterima');

    }
}