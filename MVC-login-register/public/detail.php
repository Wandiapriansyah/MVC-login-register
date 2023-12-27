<?php
include 'koneksi.php';

session_start();
if(isset($_SESSION['status']) == ""){
    header("location:/login");
}

$conf = "SELECT * FROM barang_barang";
$ngitung = mysqli_query($koneksi,$conf);


$jumlahDataPerHal = 8;
$jumlahData = mysqli_num_rows($ngitung);
$jumlahHal = ceil($jumlahData / $jumlahDataPerHal);
$halAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awalData = ($jumlahDataPerHal * $halAktif) - $jumlahDataPerHal; 
// $tes = $_GET['namaBarang'];
// echo $tes;

$query = "SELECT * FROM barang_barang LIMIT $awalData, $jumlahDataPerHal";
$datas = mysqli_query($koneksi, $query);
$result = mysqli_fetch_array($datas);
$i = 0;

    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="asset/gambar/hapus-logo-2.png" type="image/x-icon">
    <title>Dasabubu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karantina&family=Montserrat&family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karantina&family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
    a{
      font-size: 12px;
    }
    .dasabubu{
      font-family: karantina;
      color: white;
    }
    .button{
      background-color: #008000;
      border: none;
      text-align: center;
      /* width: 11%; */
      color: #fafafa;
      font-family:none;
    }
  </style>
  <body>
    
    <nav class="navbar navbar-expand-lg" style="background-color: #1C6758;">
      <div class="container-fluid">
        <img src="asset/gambar/hapus-logo-2.png" style="width: 25px; margin-top: -13px;">
        <a class="navbar-brand dasabubu" href="#"><h2>Dasabubu</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <form class="d-flex" role="search">
              <input class="form-control mt-2" type="search" placeholder="Search" aria-label="Search" style="width: 700px; margin-left: 15%; height: 32px;">
            </form>
            <li class="nav-item">
              <a class="nav-link active ms-4 text-white" aria-current="page" href="/">Best seller</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kategori
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Sayur</a></li>
                <li><a class="dropdown-item" href="#">Buah</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Daging</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Kontak</a>
            </li>
            <li>
              <a class="" href="#"><img src="asset/vector/shopping-cart.svg" style="width: 20px;" class="mt-2 me-2 ms-3"></a>
            </li>
            <li>
              <a class="" href="#"><img src="asset/vector/message-square.svg" style="width: 20px;" class="mt-2 me-1"></a>
            </li>
            <li>
              <a class="" href="#"><img src="asset/vector/bell.svg" style="width: 20px;" class="mt-2 me-5"></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="/" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="asset/gambar/pp-removebg-preview.png" style="width: 50px; border-radius: 30px;" class="ms-2">
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><b><?php echo $_SESSION['nama']?></b></a></li>
                <li><a class="dropdown-item" href="tambah.php">Tambah Barang</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Log out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
        
    <div class="container mt-5">
    <div class="row">
        <div class="col-4">
        <div class="card">
            <img src="asset/gambar/kangkung.jpeg" style="padding: 10px; border-radius: 20px;">
        </div>
        </div>

        <div class="col-8">
        <p style="font-size: 18px;"><b><?php echo $result['nama_barang']?></b></p>
        <p style="font-size: 16px;">Rp<?php echo $result['harga_barang']?></p>
        
        <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
            <a class="page-link text-dark" href="" aria-label="Previous">
                <span aria-hidden="true">-</span>
            </a>
            </li>
                <li class="page-item"><a class="page-link text-dark" href="">1</a></li>
            <li>
                <a class="page-link text-dark" href="" aria-label="Next">
                <span aria-hidden="true">+</span>
                </a>
            </li>
        </ul>
        </nav>

        <input type="submit" name="checkOut" class="button" value="BuyNow">

        <p style="font-size: 14px;"><b>Deskripsi</b></p>
        <p>Kangkung asli langsung di ambil dari kebun dan di rawat dengan baik, pastinya kangkung segar Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab itaque deleniti qui, in hic dolor veniam facilis animi, dolorem quasi nobis non? Sequi, at? Eum, provident alias. Alias, ipsa possimus!</p>


        <div class="footer" style="">
        <div class="d-flex flex-row pt-3">
            <div class="p-2"><img src="asset/gambar/pp-removebg-preview.png" width="50px" style="border-radius: 50px;"></div>
            <div class="p-2">
            <p><b>SayurBox_Official</b></p>
            <p style="font-size: 12px; margin-top: -15px;">online <b>1Jam lalu</b></p>
            </div>
        </div>
        </div>


        </div>
    </div>
    </div>


    <div class="footer" style="background-color: #1C6758; margin-top: 5%;">
      <div class="d-flex flex-row pt-3">
        <div class="p-2 ms-5"><img src="asset/gambar/hapus-metode.png"></div>
        <div class="p-2" style="margin-left: 9%;">
          <p class="text-light"><img src="asset/vector/message-square.svg">Dasabubu@gmail.com</p>
          <p class="text-light"><img src="asset/vector/phone.svg">+62 831-5598-0238</p>
          <p class="text-light"><img src="asset/vector/instagram.svg">@Dasabubu_Official</p>
          <p class="text-light"><img src="asset/vector/home.svg">Jln Bojong Koneng No 37A</p>
        </div>
        <div class="p-2" style="margin-left: 9%;">
          <div class="d-flex flex-row">
            <img src="asset/gambar/pp-removebg-preview.png" style="margin-top: 5px; width: 50px; height: 50px; border-radius: 50px;">
            <div class="p-2">
              <p class="text-light" style="font-weight: bold;">UI/UX</p>
              <p style="margin-top: -20px; color: white;">Wandi Apriansyah</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>