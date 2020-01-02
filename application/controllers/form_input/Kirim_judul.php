<?php
class Kirim_judul extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('skripsi_model');
    }
     

    public function index($id){
        $data['mahasiswa'] = $this->mahasiswa_model->mahasiswaById($id)->result();
        $data['mhs']=$this->mahasiswa_model->get_userById($id)->result();
        $this->load->view('form_input/kirim_judul',$data);
        
    }
    public function tambah_judul(){
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
        $cek_data = $this->skripsi_model->cek_skripsi($id_skripsi,$judul);
        if ($cek_data->num_rows()>0) {
        $this->session->set_flashdata('gagal',"Judul yang ada ajukan sudah ada di database");
        redirect('form_input/kirim_judul/index/'.$_SESSION['nim_asuser']);
        }else{
            $data = array(
                'id_nim'=>$nim,
                'nama_siswa'=>$nama,
                'jurusan'=>$jurusan,
                'kategori_skripsi'=>$jenis_skripsi,
                'judul'=>$judul,
                'keterangan'=>$ket,
                'approve_prodi'=>'Waiting'
            );
            $this->skripsi_model->tambahSkripsi('skripsi',$data);

            $dataJ = array(
                'id_nim'=>$nim,
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
            $this->skripsi_model->tambahSkripsi('kategori',$dataJ);
            $this->session->set_flashdata('success',"Judul berhasil di input");
            redirect('form_input/kirim_judul/index/'.$_SESSION['nim_asuser']);
        }
    }
    
   
}