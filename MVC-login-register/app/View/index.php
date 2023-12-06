<?php

session_start();
if(isset($_SESSION['status']) == ""){
    header("location:/login");
}

    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
              <a class="nav-link active ms-4 text-white" aria-current="page" href="#">Best seller</a>
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
                <li><a class="dropdown-item" href="#"></a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Log out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="asset/gambar/banner1.jpeg" class="d-block w-100" style="height: 375px;">
        </div>
        <div class="carousel-item">
          <img src="asset/gambar/banner2.jpeg" class="d-block w-100" style="height: 375px;">
        </div>
        <div class="carousel-item">
          <img src="asset/gambar/banner4.jpeg" class="d-block w-100" style="height: 375px;">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>



    <h2 class="mt-5 ms-5">Popular</h2>


    <div class="d-flex flex-row mb-3" style="margin-left: 35px;">
      <div class="p-2">
        <div class="card" style="width: 19rem; font-family: poppins;">
          <img src="asset/gambar/kangkung.jpeg" style="max-height: 180px;" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Kangkung sayur segar 1 ikat fresh</p>
            <p class="text-danger fw-regular mt-5" style="font-size: 18px;">Rp.7.000</p>
            <p class="fw-semibold opacity-50 mt-4">Jakarta Selatan</p>
            <p class="fw-normal" style="margin-top: -20px; font-size: 16px;"><img src="asset/vector/star.svg" style="width: 20px;"><span class="opacity-50">4,4 | Produk terjual(1702)</span></p>
          </div>
        </div>
      </div>
      <div class="p-2">
        <div class="card" style="width: 19rem; font-family: poppins;">
          <img src="asset/gambar/bayam braxil.jpeg" style="max-height: 180px;" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Daun bayam brazil fresh sayur bayam brazil sissoo spinach</p>
            <p class="text-danger fw-regular mt-5" style="font-size: 18px;">Rp.5.000</p>
            <p class="fw-semibold opacity-50 mt-4">Kota Bandung</p>
            <p class="fw-normal" style="margin-top: -20px; font-size: 16px;"><img src="asset/vector/star.svg" style="width: 20px;"><span class="opacity-50">4,9 | Produk terjual(2985)</span></p>
          </div>
        </div>
      </div>
      <div class="p-2">
        <div class="card" style="width: 19rem; font-family: poppins;">
          <img src="asset/gambar/bayam.jpeg" style="max-height: 180px;" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Sayur Bayam Hijau Segar per ikat</p>
            <p class="text-danger fw-regular mt-5" style="font-size: 18px;">Rp.5.000</p>
            <p class="fw-semibold opacity-50 mt-4">Kota Bandung</p>
            <p class="fw-normal" style="margin-top: -20px; font-size: 16px;"><img src="asset/vector/star.svg" style="width: 20px;"><span class="opacity-50">4,9 | Produk terjual(2985)</span></p>
          </div>
        </div>
      </div>
      <div class="p-2">
        <div class="card" style="width: 19rem; font-family: poppins;">
          <img src="asset/gambar/brokoli.jpeg" style="max-height: 180px;" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Brokoli sayur box</p>
            <p class="text-danger fw-regular mt-5" style="font-size: 18px;">Rp.20.000</p>
            <p class="fw-semibold opacity-50 mt-4">Surabaya</p>
            <p class="fw-normal" style="margin-top: -20px; font-size: 16px;"><img src="asset/vector/star.svg" style="width: 20px;"><span class="opacity-50">5,0 | Produk terjual(4k+)</span></p>
          </div>
        </div>
      </div>
    </div>

    <div class="d-flex flex-row mb-3" style="margin-left: 35px;">
      <div class="p-2">
        <div class="card" style="width: 19rem; font-family: poppins;">
          <img src="asset/gambar/kangkung.jpeg" style="max-height: 180px;" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Kangkung sayur segar 1 ikat fresh</p>
            <p class="text-danger fw-regular mt-5" style="font-size: 18px;">Rp.7.000</p>
            <p class="fw-semibold opacity-50 mt-4">Jakarta Selatan</p>
            <p class="fw-normal" style="margin-top: -20px; font-size: 16px;"><img src="asset/vector/star.svg" style="width: 20px;"><span class="opacity-50">4,4 | Produk terjual(1702)</span></p>
          </div>
        </div>
      </div>
      <div class="p-2">
        <div class="card" style="width: 19rem; font-family: poppins;">
          <img src="asset/gambar/bayam braxil.jpeg" style="max-height: 180px;" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Daun bayam brazil fresh sayur bayam brazil sissoo spinach</p>
            <p class="text-danger fw-regular mt-5" style="font-size: 18px;">Rp.5.000</p>
            <p class="fw-semibold opacity-50 mt-4">Kota Bandung</p>
            <p class="fw-normal" style="margin-top: -20px; font-size: 16px;"><img src="asset/vector/star.svg" style="width: 20px;"><span class="opacity-50">4,9 | Produk terjual(2985)</span></p>
          </div>
        </div>
      </div>
      <div class="p-2">
        <div class="card" style="width: 19rem; font-family: poppins;">
          <img src="asset/gambar/bayam.jpeg" style="max-height: 180px;" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Sayur Bayam Hijau Segar per ikat</p>
            <p class="text-danger fw-regular mt-5" style="font-size: 18px;">Rp.5.000</p>
            <p class="fw-semibold opacity-50 mt-4">Kota Bandung</p>
            <p class="fw-normal" style="margin-top: -20px; font-size: 16px;"><img src="asset/vector/star.svg" style="width: 20px;"><span class="opacity-50">4,9 | Produk terjual(2985)</span></p>
          </div>
        </div>
      </div>
      <div class="p-2">
        <div class="card" style="width: 19rem; font-family: poppins;">
          <img src="asset/gambar/brokoli.jpeg" style="max-height: 180px;" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Brokoli sayur box</p>
            <p class="text-danger fw-regular mt-5" style="font-size: 18px;">Rp.20.000</p>
            <p class="fw-semibold opacity-50 mt-4">Surabaya</p>
            <p class="fw-normal" style="margin-top: -20px; font-size: 16px;"><img src="asset/vector/star.svg" style="width: 20px;"><span class="opacity-50">5,0 | Produk terjual(4k+)</span></p>
          </div>
        </div>
      </div>
    </div>


    <div class="d-flex flex-row mb-3" style="margin-left: 35px;">
      <div class="p-2">
        <div class="card" style="width: 19rem; font-family: poppins;">
          <img src="asset/gambar/kangkung.jpeg" style="max-height: 180px;" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Kangkung sayur segar 1 ikat fresh</p>
            <p class="text-danger fw-regular mt-5" style="font-size: 18px;">Rp.7.000</p>
            <p class="fw-semibold opacity-50 mt-4">Jakarta Selatan</p>
            <p class="fw-normal" style="margin-top: -20px; font-size: 16px;"><img src="asset/vector/star.svg" style="width: 20px;"><span class="opacity-50">4,4 | Produk terjual(1702)</span></p>
          </div>
        </div>
      </div>
      <div class="p-2">
        <div class="card" style="width: 19rem; font-family: poppins;">
          <img src="asset/gambar/bayam braxil.jpeg" style="max-height: 180px;" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Daun bayam brazil fresh sayur bayam brazil sissoo spinach</p>
            <p class="text-danger fw-regular mt-5" style="font-size: 18px;">Rp.5.000</p>
            <p class="fw-semibold opacity-50 mt-4">Kota Bandung</p>
            <p class="fw-normal" style="margin-top: -20px; font-size: 16px;"><img src="asset/vector/star.svg" style="width: 20px;"><span class="opacity-50">4,9 | Produk terjual(2985)</span></p>
          </div>
        </div>
      </div>
      <div class="p-2">
        <div class="card" style="width: 19rem; font-family: poppins;">
          <img src="asset/gambar/bayam.jpeg" style="max-height: 180px;" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Sayur Bayam Hijau Segar per ikat</p>
            <p class="text-danger fw-regular mt-5" style="font-size: 18px;">Rp.5.000</p>
            <p class="fw-semibold opacity-50 mt-4">Kota Bandung</p>
            <p class="fw-normal" style="margin-top: -20px; font-size: 16px;"><img src="asset/vector/star.svg" style="width: 20px;"><span class="opacity-50">4,9 | Produk terjual(2985)</span></p>
          </div>
        </div>
      </div>
      <div class="p-2">
        <div class="card" style="width: 19rem; font-family: poppins;">
          <img src="asset/gambar/brokoli.jpeg" style="max-height: 180px;" class="card-img-top">
          <div class="card-body">
            <p class="card-text">Brokoli sayur box</p>
            <p class="text-danger fw-regular mt-5" style="font-size: 18px;">Rp.20.000</p>
            <p class="fw-semibold opacity-50 mt-4">Surabaya</p>
            <p class="fw-normal" style="margin-top: -20px; font-size: 16px;"><img src="asset/vector/star.svg" style="width: 20px;"><span class="opacity-50">5,0 | Produk terjual(4k+)</span></p>
          </div>
        </div>
      </div>
    </div>

    
    



    <nav aria-label="Page navigation example">
      <ul class="pagination" style="justify-content: center;">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="index.html">1</a></li>
        <li class="page-item"><a class="page-link" href="2.html">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>


    <div class="footer" style="background-color: #1C6758;">
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