<?php
session_start();
if (!isset($_SESSION) || !isset($_SESSION['status']) || $_SESSION['status'] != "login") {
  $userole = "";
} else {
  $userole = $_SESSION['role'];
}
include("../koneksi/dataproduk.php");
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="../css/style.css">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mate+SC&family=Pattaya&family=Hind:wght@500&display=swap" rel="stylesheet">


  <title>Keilla Collection</title>
</head>

<body class="bodydetail">
  <!-- Navbar -->
  <?php include("../view/header2.php"); ?>
  <!-- Akhir Navbar -->


  <!-- Container Jumbotron Atas -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Keilla <br>Collection</h1>
      <h3 class="display-5">Dapatkan Produk Terbaik Kami dengan Harga yang Terjangkau Sekarang!</h3>
    </div>
  </div>
  <!-- Akhir Jumbotron -->

  <!-- Breadcrumbs -->
  <div class="container">
    <div class="row">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Produk</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Cari Produk -->
  <!-- Container -->
  <div class="container pencarianproduk">
    <!-- Info Panel -->
    <div class="row justify-content-center">
      <div class="col-10 info-panel">
        <div class="row kolompencarian">
          <div class="col-lg">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Cari aja disini!" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn" type="button" id="button-addon2">
                  <img src="../img/outline_search_white_24dp.png" alt="">
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Info Panel -->
  </div>
  <!-- Akhir Container -->

  <!-- Container Card Produk -->
  <div class="container produkcard">
    <div class="row">
      <?php foreach ($dataproduk = getvalue() as $data) : ?>
        <div class="col-3">
          <div class="card-deck">
            <div class="card" style="margin-top: 30px; height: 450px;">
              <img src="../img/Produk/<?= $data['foto_produk'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $data['nama_produk'] ?></h5>
              </div>
              <div class="card-footer">
                <p class="card-text">Rp.<?= $data['harga_produk'] ?>,00</p>
                <a class="btn btn-success" onclick="document.location='detailproduk.php?id=<?= $data['id_produk'] ?>'">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>


      <?php endforeach ?>
    </div>
  </div>


  <!-- Footer -->
  <?php include("../view/footer.php"); ?>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>