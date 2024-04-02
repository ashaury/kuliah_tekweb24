<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
        </tr>
        <?php

        foreach ($res as $row) {
        ?>
            <tr>
                <td><?php echo $row->nim ?></td>
                <td><?php echo $row->nama ?></td>
                <td><?php echo $row->email ?></td>
                <td><?php echo $row->password ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>