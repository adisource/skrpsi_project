<?php
class Auth_model extends CI_Model{
    public function validate($username,$password){
        $this->db->where('nim_asuser',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('login');
        return $result;
    }
    public function validate_data($nim,$nama){
        $this->db->where('nim_asuser',$nim);
        $this->db->where('nama',$nama);
        $result = $this->db->get('login');
        return $result;
    }

    public function aktifkan($tabel,$data,$val){
        $this->db->where('nim_asuser',$val);
        $this->db->update($tabel,$data);
    }
    public function aktifkan2($tabel,$data,$val){
        $this->db->where('nim',$val);
        $this->db->update($tabel,$data);
    }
    public function profil_user($user){
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('nim_asuser',$user);
        return $this->db->get();
    }
}