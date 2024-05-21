<?php

class ProdiModel extends CI_Model{
    public function getProdis(){
        // $conn = mysqli_connect("localhost","root","","db_kuliah");
        $this->load->database();

        // $sql = "SELECT * FROM prodi";
        // return mysqli_query($conn,$sql);

    return $this->db->get("prodi");

    }

}
?>