<?php
session_start();
session_destroy();


?>

<!DOCTYPE html>
<html>
    <head>
  <title>Login & Register</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
      margin-top: 3%;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
      text-align: center;
      color: #008000;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #008000; 
      /* color: #008000; */
    }
    
    .form-group input {
      width: 95%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    .form-group .button {
      width: 100%;
      padding: 10px;
      background-color: #008000;
      border: none;
      color: #ffffff;
      font-weight: bold;
      cursor: pointer;
      border-radius: 3px;
    }
    
    .form-group button:hover {
      background-color: #006400;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Register</h1>
    <form action="proses_register.php" method="POST">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="no_hp">No Hp</label>
        <input type="text" name="no_hp" required>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" required>
      </div>
      <div class="form-group">
        <input type="submit" name="submit" value="Register" class="button">
      </div>
    </form>
    <p>Sudah punya akun? <a href="/login">Log In</a></p>
  </div>
</body>
</html>



<!-- <!DOCTYPE html>
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
</html> -->