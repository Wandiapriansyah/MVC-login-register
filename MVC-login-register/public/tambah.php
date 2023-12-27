<?php

session_start();
if(isset($_SESSION['status']) == ""){
    header("location:/login");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="asset/gambar/hapus-logo-2.png" type="image/x-icon">
    <title>Add Barang</title>
</head>
<style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
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
      float: left;
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
    a{
        float: left;
    }
</style>
<body>
    <center>
    <div class="container">
    <a href="/admin">HOME</a>
    <h1>Tambah Barang</h1>
    <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="gambar">Gambar</label>
        <input type="file" name="gambar" style="border: none;">
      </div>
      <div class="form-group">
        <label for="nama_barang">Nama Barang</label><br>
        <textarea name="nama_barang" cols="52" rows="2"></textarea>
      </div>
      <div class="form-group">
        <label for="stok">Stok Barang</label>
        <input type="text" name="stok">
      </div>
      <div class="form-group">
        <label for="harga_barang">Harga Barang</label>
        <input type="text" name="harga_barang" placeholder="30.000">
      </div>
      <div class="form-group">
        <label for="kota">Kota</label>
        <input type="text" name="kota">
      </div>
      <div class="form-group">
        <label for="rate">Rate</label>
        <input type="text" name="rate">
      </div>
      <div class="form-group">
        <label for="produk_terjual">Produk Terjual</label>
        <input type="text" name="produk_terjual">
      </div>
      <div class="form-group">
        <input type="submit" name="submit" value="Tambah Barang" class="button">
      </div>
    </form>
  </div>
    </center>
</body>
</html>