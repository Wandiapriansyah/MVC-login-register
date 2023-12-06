<?php
// include 'koneksi.php';

session_start();
$koneksi = mysqli_connect('localhost', 'root', '', 'dasabubu');
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM akun WHERE email='$email' AND password='$password'";

$data = mysqli_query($koneksi, $query);

$cek = mysqli_num_rows($data);
if($cek > 0){
    $result = mysqli_fetch_array($data);
    $_SESSION['nama'] = $result['nama'];
    $_SESSION['status'] = "login";
    header("location:/");
}else{
    header("location:/");
}

