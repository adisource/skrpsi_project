<?php
class Lihat_data_mahasiswa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->library('excel');
       
        
    }
    public function index(){
        if($this->session->userdata('logged_in')===TRUE){
        $data['mahasiswa']= $this->mahasiswa_model->lihat_dataMahasiswa('siswa')->result();
       
        $this->load->view('lihat_data/lihat_data_mahasiswa',$data);
        }else {
            $this->load->view('halaman_login/login');
        }
    }
    public function saveimport()
    {
                    if(isset($_FILES["file"]["name"]))
                        {
                            $path = $_FILES["file"]["tmp_name"];
                            $object = PHPExcel_IOFactory::load($path);
                            foreach($object->getWorksheetIterator() as $worksheet)
                            {
                                $highestRow = $worksheet->getHighestRow();
                                $highestColumn = $worksheet->getHighestColumn();
                                for($row=2; $row<=$highestRow; $row++)
                                {   
                                    $nim = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                                    $nama_siswa= $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                                    $jurusan= $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                                    $data[] = array(
                                        'nim'        =>$nim,
                                        'nama_siswa' =>$nama_siswa,
                                        'jurusan'=> $jurusan,
                                        'status_akun'=>'Tidak Aktif'
                                    );
                                    $datal[] = array(
                                        'nim_asuser'    =>$nim,
                                        'nama' =>$nama_siswa,
                                        'status'=>'Tidak Aktif',
                                        'password'=>'mahasiswa',
                                        'level'=>'Mahasiswa'
                                    );
                                   
                                }
                            }
                            $insert = $this->db->insert_batch("siswa",$data);
                            $insert = $this->db->insert_batch("login",$datal);
                            redirect('lihat_data/lihat_data_mahasiswa');
                        }                
    
    } 
    public function download(){
        force_download('assets/file_format/format_upload_mahasiswa.xls',NULL);
    }
    
  
}