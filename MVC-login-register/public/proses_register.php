<?php

include 'koneksi.php';
session_start();

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$no = $_POST['no'] ?? 0;

// $query = "INSERT INTO akun VALUES ('$nama', '$email', '$password', '$no_hp', '$alamat', '$no')";

$query = "INSERT INTO akun set nama='$nama', email='$email', password='$password', no_hp='$no_hp', alamat='$alamat', no='$no'";

$datas = mysqli_query($koneksi, $query);
header("location:/");




?>