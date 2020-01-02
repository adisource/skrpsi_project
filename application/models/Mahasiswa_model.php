<?php
class Mahasiswa_model extends CI_Model{

    public function tambahMahasiswa($tabel,$data){
        $this->db->insert($tabel,$data);
        }

    public function updateDataMahasiswa($tabel,$data,$val){
        $this->db->where('id',$val);
        $this->db->update($tabel,$data);
        } 
    public function updateDataMahasiswalogin($tabel,$data,$val){
        $this->db->where('nim_asuser',$val);
        $this->db->update($tabel,$data);
        }
    

    public function lihat_dataMahasiswa($tabel){
        $query=$this->db->get($tabel);
        return $query;
        }
        
    public function deleteMahasiswa1($id){
        $this->db->where('id',$id);
        return $this->db->delete('siswa');
    }
    public function deleteMahasiswa2($nims){
        $this->db->where('nim_asuser',$nims);
        return $this->db->delete('login');
    }

    public function cek_mahasiswa($id,$nama_mahasiswa){
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('nim',$id,$nama_mahasiswa);
        $result = $this->db->get();
        return $result;
        }
    public function get_userById($id){
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('nim',$id);
        $result = $this->db->get();
        return $result;
        }

    public function user_edit($id){
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('id',$id);
        return $this->db->get();
        
    }
    public function user_editlogin($nim){
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('nim_asuser',$nim);
        return $this->db->get();
        
    }
    public function mahasiswaById($nim){
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('nim_asuser',$nim);
        $result = $this->db->get();
        return $result;
        } 
        
    public function cek_angkatan($angkatan){
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('angkatan',$angkatan);
        return $this->db->get();
        }
    public function cek_tahun($angkatan){
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('tahun_pengajuan',$angkatan);
        return $this->db->get();
        }
}