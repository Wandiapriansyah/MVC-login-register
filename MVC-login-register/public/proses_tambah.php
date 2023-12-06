<?php

include 'koneksi.php';
session_start();

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$no_hp = $_POST['no_hp'];

$query = "INSERT INTO akun VALUES ('$nama', '$email', '$password', '$no_hp')";

$datas = mysqli_query($koneksi, $query);
header("location:/");




?>