<?php

include 'koneksi.php';
session_start();

// $gambar = $_POST['gambar'];
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$stok_barang = $_POST['stok_barang'];
$kota = $_POST['kota'];
$rate = $_POST['rate'];
$no = $_POST['no'] ?? 0;


if (isset($_POST['submit'])) {
    $dir = "asset/gambar/";
    $file_name = $_FILES['gambar']['name'];
    move_uploaded_file($_FILES['gambar']['tmp_name'], $dir.$file_name);

    // $query = "INSERT INTO barang_barang VALUES ('$file_name', '$nama_barang', '$stok_barang', '$harga_barang', '$kota', '$rate', '$no')  ";

    $query = "INSERT INTO barang_barang set gambar='$file_name', nama_barang='$nama_barang', harga_barang='$harga_barang', stok_barang='$stok_barang', kota='$kota', rate='$rate',no='$no'";
}



$datas = mysqli_query($koneksi, $query);
if (isset($datas)) {
    header("location:/admin");
} else {
    header("location:/tambah");
}





?>