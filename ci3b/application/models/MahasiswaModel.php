<?php
class MahasiswaModel extends CI_Model{
    function getMahasiswa(){
        return "Informatika Unjani Cimahi";
    }
    function getMahasiswas(){
        // $conn = mysqli_connect("localhost", "root", "", "db_kuliah");
        $this->load->database();
        // $db = new Database();
        // $this->db;

        $sql = "SELECT * FROM mahasiswa";
        
        // return mysqli_query($conn, $sql);
        return $this->db->query($sql);
        
    }
}
?>