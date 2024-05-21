<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <h1>Welcome to Class of Teknologi Web</h1>
    <h2>Learning Codeigniter</h2>
    <h3>hi, <?php echo $nama; ?></h3>
    <?php 
        foreach($mhs->result() as $m){
            echo '<img src="'.base_url($m->pict).'" ?>">';
        }    
    ?>
    <a href="<?php echo site_url('auth/logout'); ?>">Logout</a>
</body>
</html>