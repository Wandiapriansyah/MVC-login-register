<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <a href="/">Home</a>    
    <h1>HALAMAN LOGIN</h1>
    <table>
    <form action="proses_login.php" method="POST">
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="text" name="email" placeholder="Masukan Email" autofocus></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" placeholder="Masukan Password"></td>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="Login"></td>
    </tr>
    </form>
    <tr>
        <td><p>Tidak punya akun? <a href="/signup">Sign Up</a></p></td>
    </tr>
    </table>
</body>
</html>