<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
    <?php
    echo "<style>h1{color:green;}</style>";
    ?>
</head>

<body>
    <h1>Basic PHP</h1>
    <?php
    //untuk menampilkan output, menggunakan echo atau print
    echo "Welcome to Mata Kuliah Teknologi Web";
    ?>
    <h1>Variabel</h1>
    <h2>Deklarasi Variabel</h2>
    <p>Menggunakan simbol $</p>
    <p>Tidak boleh diawali oleh angka atau simbol khusus kecuali "_" (underscore)</p>
    <p>Assignment (pengisian nilai) menggunakan "=" (sama dengan)</p>
    <p>Contoh : (Lihat Code PHP nya)</p>
    <?php
    // $namavar
    $nama = "Informatika";
    echo $nama;
    ?>
    <p>Tidak ada Jenis Variabel (loosely type)</p>
    <h1>Operator</h1>
    <h2>Aritmatika</h2>
    <p>Bisa menggunakan operator : +, -, *, /, %, </p>
    <h2>Logika</h2>
    <p>Bisa menggunakan operator : &&, ||, !, ==, ===, !=, &gt, $gt=, $lt, $lt=</p>
    <h2>Konkatenasi</h2>
    <p>Bisa menggunakan operator : "." (Titik)</p>
    <p>Contoh (Lihat code PHP)</p>
    <?php 
        $bil1 = 5;
        $bil2 = 10;
        $bil3 = "2";
        
        $tambah = $bil1+$bil3;
        echo $tambah;
        //Hasil adalah 7, tetap ditambah meskipun 2 adalah string, karena PHP loosely type
    ?>


</body>

</html>