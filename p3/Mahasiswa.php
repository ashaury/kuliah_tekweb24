<?php
include_once("Koneksi.php");
class Mahasiswa
{
    public $nim;
    public $nama;
    public $email;
    public $password;
    public $telp;
    public $conn;

    public function __construct()
    {
        // $this->nim = $mhs->nim;
        // $this->nama = $mhs->nama;
        // $this->email = $mhs->email;
        // $this->password = $mhs->password;
        // $this->telp = $mhs->telp;
        $koneksi = new Koneksi();
        $this->conn = $koneksi->conn();
    }

    public function getMahasiswas()
    {
        $sql = "SELECT * FROM mahasiswa";
        return mysqli_query($this->conn, $sql);
    }
    public function tambahMahasiswa($mhs)
    {
        $sql = "INSERT INTO mahasiswa VALUES(".$mhs['nim'].",'".$mhs['nama']."','".$mhs['email']."','".$mhs['password']."','".$mhs['telp']."')";
        return mysqli_query($this->conn,$sql);
    }
}
