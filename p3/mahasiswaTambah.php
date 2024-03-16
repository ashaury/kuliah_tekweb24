<?php
include("Mahasiswa.php");
$mahasiswa = new Mahasiswa();
if(isset($_POST['submit']) && $_POST['submit']){
    $mhs = array(
        "nim" => $_POST['nim'],
        "nama" => $_POST['nama'],
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "telp" => $_POST['telp'],
    );
    $mahasiswa->tambahMahasiswa($mhs);
    header("location:dashboard.php");
}else{
    echo "Gagal tambah mahasiswa";
}

?>