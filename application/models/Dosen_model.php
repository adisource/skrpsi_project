<?php
class Dosen_model extends CI_Model{

    public function tambahDosen($tabel,$data){
        $this->db->insert($tabel,$data);
        }
    public function updateDataDosen($tabel,$data,$val){
        $this->db->where('id',$val);
        $this->db->update($tabel,$data);
        } 
    public function updateDataDosenlogin($tabel,$data,$val){
        $this->db->where('nim_asuser',$val);
        $this->db->update($tabel,$data);
        }
    public function Deletedosen($id){
        $this->db->where('id',$id);
        $this->db->delete('dosen');
    }
    
    public function Deletedosenlogin($nim){
        $this->db->where('nim_asuser',$nim);
        $this->db->delete('login');
    }

    public function cek_dosen($nip,$nama_dosen,$bd_studi){
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->where('nip', $nip,$nama_dosen);
        $result = $this->db->get();
        return $result;
        }
    public function user_edit($id){
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->where('id',$id);
        return $this->db->get();
            
        }
    public function user_editlogin($nim){
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('nim_asuser',$nim);
        return $this->db->get();  
        }
    public function lihat_dataDosen($tabel){
        $query=$this->db->get($tabel);
        return $query;
        }
    public function insertimport($data){
        $this->db->insert_batch('dosen',$data);
        return $this->db->insert_id();
        }
    public function get_userByIdDosen($nip){
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('nim_asuser',$nip);
        $result = $this->db->get();
        return $result;
        }
    public function dosen_partner($nidn){
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->where('nip',$nidn);

        return $this->db->get();
    }
    public function join_dosen(){
        $this->db->select('*');
        $this->db->from('dosen');
        $join ="dosen.nip=skripsi.id_dosen2 ";
        $this->db->join('skripsi', $join);
        return $this->db->get();
    }
    public function join_dosen2(){
        $this->db->select('*');
        $this->db->from('dosen');
        $join ="dosen.nip=skripsi.id_dosen ";
        $this->db->join('skripsi', $join);
        return $this->db->get();
    }


   
   

    
  
   
    

    
    
}