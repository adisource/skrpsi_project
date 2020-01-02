<?php

class Lihat_data_dosen extends CI_Controller{
   
    function __construct(){
        parent::__construct();
        $this->load->model('dosen_model');
        $this->load->library('excel');
       
        
    }

    public function index(){
       

        if($this->session->userdata('logged_in')===TRUE){

        $data['dosen']= $this->dosen_model->lihat_dataDosen('dosen')->result();
        $this->load->view('lihat_data/lihat_data_dosen',$data);
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
                                    $nip = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                                    $nama_dosen= $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                                    $bd_studi= $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                                    $data[] = array(
                                        'nip'        =>$nip,
                                        'nama_dosen' =>$nama_dosen,
                                        'bd_studi'=> $bd_studi
                                    );
                                    $data2[] = array(
                                        'nim_asuser'  =>$nip,
                                        'nama' =>$nama_dosen,
                                        'password'=>'dosen',
                                        'level'=>'Dosen'

                                        
                                    );
                                }
                            }
                            $insert = $this->db->insert_batch("dosen",$data);
                            $insert = $this->db->insert_batch("login",$data2);
                            redirect('lihat_data/lihat_data_dosen');
                        }                
    
    }

    public function download(){
        force_download('assets/file_format/format_upload_dosen.xls',NULL);
    }
   
    
  
    
}