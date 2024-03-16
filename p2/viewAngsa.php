<?php
include("Angsa.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potong Angsa</title>
</head>

<body>
    <?php
    // instance 
    $angsa = new Angsa("Chen", "100");
    $angsa->panggil();
    ?>
    <script>
        alert("Welcome to Web Technology Class");
    </script>
    <form action="" method="POST">
        <p>Nama <input type="text" name="nama"></p>
        <p>Usia <input type="text" name="usia"></p>
        <p><input type="submit" value="Set"></p>
    </form>
    <?php 
        // $_POST atau $_GET akan ada jika dari request terdapat data POST dan atau GET
        if(isset($_POST['nama'])){
            echo "<p>Berhasil ubah, Sekarang nama Saya adalah ".$_POST['nama']."</p>";
        }
    ?>
    <div>

    </div>
</body>

</html>