<?php
class Skripsi_model extends CI_Model{

    public function tambahSkripsi($tabel,$data){
        $this->db->insert($tabel,$data);
        }
    public function updatedataskripsi($tabel,$val){
        $this->db->update($tabel,$val);
        } 
    public function hapusSkripsi($val){
        $this->db->where('id_skripsi',$val);
        $this->db->delete('skripsi');
        }
    public function hapusKategori($val){
        $this->db->where('id_skripsi',$val);
        $this->db->delete('kategori');
        }
    public function cek_skripsi($id_skripsi,$judul){
        $this->db->select('judul');
        $this->db->from('skripsi');
        $this->db->where('judul',$judul);
        $result = $this->db->get();
        return $result;
        }
        
    public function get_dataStatus(){
        $this->db->from('skripsi');
        $multi = "approve_prodi='Waiting' or approve_prodi='Ditolak'";
        $this->db->where($multi);
        return $this->db->get();
        
    }

    public function get_dataskripsi(){
        $this->db->select('*');
        $this->db->from('skripsi');
        $this->db->where('id_nim',$this->session->userdata("nim_asuser"));
        return $this->db->get();
    }
    public function view_dataskripsi(){
        $this->db->select('*');
        $this->db->from('skripsi');
        return $this->db->get();

    }
    public function get_Statusditerima(){
        $this->db->from('skripsi');
        $this->db->where('approve_prodi','Diterima');
        return $this->db->get();
        
    }
    public function get_dataById($tabel,$id,$seg){
        $this->db->select('*');
        $this->db->from($tabel);
        $multi =['id_skripsi'=>$id,'id_nim'=>$seg];
        $this->db->where($multi);
        return $this->db->get();
    }
    public function banyak_data($val){
        $this->db->select('count(*)');
        $this->db->from('skripsi');
        $this->db->where('kategori_skripsi',$val);
        $query=$this->db->get();
        if ($query !==FALSE) {
            if ($query->num_rows()>0) {
                return $query->row();
            }
        }
    }
    public function banyak_data2($val){
        $this->db->select('count(*)');
        $this->db->from('skripsi');
        $this->db->where('approve_prodi',$val);
        $query=$this->db->get();
        if ($query !==FALSE) {
            if ($query->num_rows()>0) {
                return $query->row();
            }
        }
    }
    public function lihat_profil($nidn){
        $this->db->select('*');
        $this->db->from('skripsi');
        $multi="id_dosen=$nidn or id_dosen2=$nidn";
        $this->db->where($multi);
        return $this->db->get();
    }

    
}