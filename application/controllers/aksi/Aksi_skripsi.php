<?php
class Aksi_skripsi extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('skripsi_model');
    }
    public function edit($id,$seg){
        $edit['edit']= $this->skripsi_model->get_dataById('skripsi',$id,$seg)->result();
        $edit['edit']= $this->skripsi_model->get_dataById('kategori',$id,$seg)->result();
        $this->load->view('aksi/aksi_skripsi',$edit);
    }
    public function save_edit($id,$seg){
        $id_skripsi = $this->input->post('id_skripsi');
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $jurusan = $this->input->post('jurusan');
        $status = $this->input->post('status');
        $angkatan = $this->input->post('angkatan');
        $tahun_pengajuan= $this->input->post('tahun_pengajuan');
        $jenis_skripsi = $this->input->post('jenis_skripsi');
        $judul  = $this->input->post('judul');
        $ket = $this->input->post('ket');

        
            $data = array(
                'id_nim'=>$nim,
                'nama_siswa'=>$nama,
                'jurusan'=>$jurusan,
                'kategori_skripsi'=>$jenis_skripsi,
                'judul'=>$judul,
                'keterangan'=>$ket,
                'approve_prodi'=>'Waiting'
            );
            $this->skripsi_model->updatedataskripsi('skripsi',$data,$id);

            $dataJ = array(
                'nama_siswa'=>$nama,
                'status'=>$status,
                'angkatan'=>$angkatan,
                'jurusan'=>$jurusan,
                'tahun_pengajuan'=>$tahun_pengajuan,
                'kategori_skripsi'=>$jenis_skripsi,
                'approve_prodi'=>'Waiting',
                'judul'=>$judul,
                'keterangan'=>$ket
            );
            $this->skripsi_model->updatedataskripsi('kategori',$dataJ,$id);
            $this->session->set_flashdata('update',"Judul berhasil di diupdate");
            redirect('lihat_data/lihat_skripsi_diajukan/');
        
        }
        public function hapusdata($val){
        $this->skripsi_model->hapusSkripsi($val);
        $this->skripsi_model->hapusKategori($val);
        redirect('lihat_data/lihat_skripsi_diajukan/');
        
        }
        
    
}