<?php
class Koneksi{
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $db = "db_kuliah";

    public function conn(){
        return mysqli_connect($this->host,$this->username,$this->password,$this->db);
    }
    
}

?>