<?php
session_start();
session_destroy();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Halaman Sign Up</h1>
    <table>
            <form action="proses_tambah.php" method="POST">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" placeholder="Masukan Nama" autofocus></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text" name="email" placeholder="Masukan Email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" placeholder="Masukan Password"></td>
                </tr>
                <tr>
                    <td>No Hp</td>
                    <td>:</td>
                    <td><input type="text" name="no_hp" placeholder="Masukan No Hp"></td>
                </tr>
                <tr>
                    <td colspan="3" align="left"><input type="submit" name="submit" value="Sign Up"></td>
                </tr>
            </form>
            <tr>
                <td><p>Sudah punya akun? <a href="/login">Log In</a></p></td>
            </tr>   
        </table>
</body>
</html>