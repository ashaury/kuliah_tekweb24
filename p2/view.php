<?php
    include ("Kucing.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class dalam PHP</title>
</head>
<body>
    <?php
        $kucing = new Kucing("Garfield",2,"oddie tolong");
        $kucing->call();
        $kucing->miaw();
        $kucing->setNama("Puss");
        $kucing->call();
    ?>
</body>
</html>