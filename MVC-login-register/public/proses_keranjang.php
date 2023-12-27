<?php
include 'koneksi.php';
session_start();

$id_produk = $_GET['Beli'];

if (isset($_SESSION['keranjang'][$id_produk])) {
    $_SESSION['keranjang'][$id_produk] += 1;
}else{
    $_SESSION['keranjang'][$id_produk] = 1;
}

echo "<script>alert('Selamat Barang Telah di masukan keranjang')</script>";
echo"<script>location='keranjang.php'</script>";



