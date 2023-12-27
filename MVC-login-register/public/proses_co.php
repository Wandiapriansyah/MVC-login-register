<?php
include 'koneksi.php';
session_start();
$no = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <title>CO</title>
</head>
<body>
    
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
                    </tr>
                </thead>
                <tbody>
                    <?php $totalBelanja = 0; ?>
                <?php foreach ($_SESSION['keranjang'] as $id_produk => $value) : ?>
                    <?php
                    $query = "SELECT * FROM barang_barang WHERE no='$id_produk'";
                    $data = mysqli_query($koneksi, $query);
                    $result = mysqli_fetch_assoc($data);
                    $subharga = $result['harga_barang']*$value;
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $result['nama_barang'] ?></td>
                        <td>Rp. <?php echo number_format($result['harga_barang']) ?></td>
                        <td><?php echo $value ?></td>
                        <td>Rp. <?php echo number_format($subharga) ?></td>
                    </tr>
                    <?php $no++; ?>
                    <?php $totalBelanja += $subharga; ?>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4">Total Belanja</th>
                        <th>Rp. <?php echo number_format($totalBelanja) ?></th>
                    </tr>
                </tfoot>
            </table>

            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <input type="text" readonly value="<?php echo $_SESSION['pelanggan']['nama']?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <input type="text" class="form-control" readonly value="<?php echo $_SESSION['pelanggan']['no_hp']?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control" name="id_ongkir">
                            <option value="">Pilih Ongkos Kirim</option>
                            <?php
                            $bacaOngkir = "SELECT * FROM ongkir";
                            $ambil = mysqli_query($koneksi, $bacaOngkir);
                            while($ongkir = $ambil->fetch_assoc()){
                            ?>
                            <option value="<?php echo $ongkir['id_ongkir'] ?>">
                                <?php echo $ongkir['nama_kota'] ?> -
                                Rp. <?php echo number_format($ongkir['tarif']) ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <button class="btn btn-primary mt-1" name="checkout">Checkout</button>
            </form>
            <?php 
            if (isset($_POST['checkout'])) 
            {
               $id_pelanggan = $_SESSION['pelanggan']['no'];
               $id_ongkir = $_POST['id_ongkir'];
               $tanggal_beli = date("Y-m-d");
               $dapat = $koneksi->query("SELECT * FROM ongkir WHERE id_ongkir='$id_ongkir'");
               $arrayongkir = $dapat->fetch_assoc();
               $tarif = $arrayongkir['tarif'];
               $total_harga = $totalBelanja + $tarif;
               
               $koneksi->query("INSERT INTO transaksi (id_pelanggan, id_ongkir, tanggal_beli, total_harga) VALUES ('$id_pelanggan', '$id_ongkir', '$tanggal_beli', '$total_harga')");

               $new_id_pembeli = $koneksi->insert_id;

               foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) {
                $koneksi->query("INSERT INTO pembelian_produk (id_pembeli, id_produk, jumlah) VALUES ('$new_id_pembeli', '$id_produk', '$jumlah')");
               }

               unset($_SESSION['keranjang']);

               echo "<script>alert('Pembelian Suskes bro');</script>";
               echo "<script>location='nota.php?id= $new_id_pembeli';</script>";
            }
            ?>
        </div>
    </section>

    <pre>
        <?php print_r($_SESSION['pelanggan']) ?>
        <?php print_r($_SESSION['keranjang']) ?>
    </pre>

</body>
</html>