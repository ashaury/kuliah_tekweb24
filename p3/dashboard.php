<?php
include_once("koneksi.php");
include_once("Mahasiswa.php");

// Test Koneksi Database
// $koneksi = new Koneksi();
// if($koneksi->conn()){
//     echo "Berhasil terhubung";
// }else{
//     echo "Tidak berhasil terhubung ".mysqli_error($koneksi->conn());
// }

$mahasiswa = new Mahasiswa();
// sama dengan myqli_query
$mhs = $mahasiswa->getMahasiswas();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <table>
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>TELP</th>
        </thead>
        <tbody>
            <?php
            $i=0;
            foreach ($mhs as $row) {
                // alternatif menggunakan mysqli_fetch_
                // while ($row = mysqli_fetch_array($mhs)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['nim'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td><?php echo $row['telp'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>