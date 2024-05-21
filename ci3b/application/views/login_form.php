<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <!-- <form action="http://localhost/tekweb24/ci3b/index.php/auth/login" method="POST"> -->
    <form action="<?php echo site_url('auth/login') ?>" method="POST">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Login"></td>
            </tr>
        </table>
        <a href="<?php echo site_url('auth/register'); ?>">Register</a>
    </form>
</body>

</html>