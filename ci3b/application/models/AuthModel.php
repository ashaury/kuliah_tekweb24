<?php
class AuthModel extends CI_Model{
    public function loginCheck($nim,$pass){
        $this->db->where("nim",$nim);
        $this->db->where("password",$pass);
        return $this->db->get("mahasiswa");
    }
}

?>