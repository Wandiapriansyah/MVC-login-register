<?php

session_start();
$kon = mysqli_connect('localhost', 'root', '', 'dasabubu');
$no = 1; 

if (empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])) {
    echo "<script>alert('Silakan belanja terlebih dahulu')</script>";
    echo "<script>location='/admin'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="asset/gambar/hapus-logo-2.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <title>Dasabubu Keranjang</title>
</head>
<body>
    <!-- keranjang ini coy -->
    <!-- sama style keranjang dan juga check out bereskan -->
    <section class="konten">
        <div class="container">
            <h1>Keranjang Belanja</h1>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Jumlah Barang</th>
                        <th>SubHarga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($_SESSION['keranjang'] as $id_produk => $value) : ?>
                    <?php
                    $query = "SELECT * FROM barang_barang WHERE no='$id_produk'";
                    $data = mysqli_query($kon, $query);
                    $result = mysqli_fetch_assoc($data);
                    $subharga = $result['harga_barang']*$value;
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $result['nama_barang'] ?></td>
                        <td>Rp. <?php echo number_format($result['harga_barang']) ?></td>
                        <td><?php echo $value ?></td>
                        <td>Rp. <?php echo number_format($subharga) ?></td>
                        <td><a href="hapus_keranjang.php?id=<?php echo $id_produk?>" class="btn btn-danger btn-xs">Hapus</a></td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
            <a href="/admin" class="btn btn-light">Lanjut Belanja</a>
            <a href="proses_co.php" class="btn btn-primary">CheckOut</a>
        </div>
    </section>

</body>
</html>