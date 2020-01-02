<?php
class Approve_model extends CI_Model{

    public function get_mahasiswa($nim){
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('nim',$nim);
        return $this->db->get();
    }
    public function get_skripsi($id_nim){
        $this->db->select('*');
        $this->db->from('skripsi');
        $this->db->where('id_nim',$id_nim);
        return $this->db->get();
    }
    public function get_skripsidosen($id_nim){
        $this->db->select('*');
        $this->db->from('skripsi');
        $multi= "id_dosen=$id_nim or id_dosen2=$id_nim";
        $this->db->where($multi);
        return $this->db->get();
    }
    public function update_skripsi($tabel,$data,$val){
        $this->db->where('id_nim',$val);
        $this->db->update($tabel,$data);
    }
    public function lihat_dosen(){
        $this->db->select('*');
        $this->db->from('dosen');
        return $this->db->get();
    }

  
}