<?php
session_start();
$userole = $_SESSION['role'];

if ($userole != "admin") {
  unset($_SESSION);
  header('location:../view/login.php');
}
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

  <!-- Breadcrumbs -->
  <div class="container">
    <div class="row">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
          <li class="breadcrumb-item"><a href="tabelproduk.php">Tabel Produk</a></li>
          <li class="breadcrumb-item active" aria-current="page">Tambah Barang</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Container About -->
  <div class="container halamantambahbarang">
    <div class="row justify-content-md-center">
      <div class="col-md-6">
        <div class="card bg-light my-5">
          <div class="card-header text-center">Edit Produk</div>
          <div class="card-body">
            <form action="../koneksi/tambahdata.php" method="post" class="needs-validation" novalidate>
              <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Masukkan nama produk" autocomplete="off" required>
                <div class="invalid-feedback">
                  Anda belum memasukan nama produk.
                </div>
              </div>
              <div class="form-group">
                <label for="harga_produk">Harga Barang</label>
                <input type="number" class="form-control" name="harga_produk" id="harga_produk" placeholder="Masukkan harga produk" autocomplete="off" required>
                <div class="invalid-feedback">
                  Anda belum memasukan harga produk.
                </div>
              </div>
              <div class="form-group">
                <label for="deskripsi_produk">Deskripsi Produk</label>
                <input type="text" class="form-control" name="deskripsi_produk" id="deksripsi_produk" placeholder="Masukkan deskripsi produk" autocomplete="off" required>
                <div class="invalid-feedback">
                  Anda belum memasukkan deksripsi produk.
                </div>
              </div>
              <div class="form-group">
                <label for="foto_produk">Foto Produk</label>
                <input type="text" class="form-control" name="foto_produk" id="foto_produk" placeholder="Masukkan gambar produk" autocomplete="off" required>
                <div class="invalid-feedback">
                  Anda belum memasukkan gambar produk.
                </div>
              </div>
              <div class="form-group">
                <label for="berat_produk">Berat</label>
                <input type="number" class="form-control" name="berat_produk" id="berat_produk" placeholder="Masukan berat produk" autocomplete="off" required>
                <div class="invalid-feedback">
                  Anda belum memasukan berat produk.
                </div>
              </div>
              <br>
              <div class="text-center">
                <button type="submit" class="btn btn-primary text-center px-3 py-2" name="submit">Tambah Produk</button>
              </div>
            </form>
          </div>
        </div>
      </div>
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