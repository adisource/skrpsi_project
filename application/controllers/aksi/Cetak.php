<?php
class Cetak extends CI_Controller{
    function __construct(){
        parent::__construct();
        
    }

    public function cetak_data(){
    
    $data['title'] ="Universitas Hamzanwadi";
    $data['alamat']="kampus 1 : Jl. Cut Nyak Dien No.85, Pancor, Selong, Kabupaten Lombok Timur, Nusa Tenggara Bar. 83611";
    $data['alamat2']="kampus 2 :Jln. Professor M Yamin No.35, Pancor, Selong, Kabupaten Lombok Timur, Nusa Tenggara Bar. 83611";

    $data['data']=$this->skripsi_model->get_Statusditerima()->result();
    $data['dosen']=$this->approve_model->lihat_dosen()->result();
       
    $html = $this->load->view('aksi/cetak',$data,TRUE);

    $this->pdf->pdf_create($html,'cetak','A4','landscape');

       

       
    }
   
  
   
}