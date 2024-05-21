<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodi</title>
</head>

<body>
    <?php 
    foreach($prodi as $row){
    ?>
    <h1>Halaman Program Studi <?php echo $row->namaProdi; ?></h1>
    <?php
    } 
    ?>
</body>

</html>