<?php
session_start();
$userole = $_SESSION['role'];

if ($userole != "admin") {
  unset($_SESSION);
  header('location:../view/login.php');
}
include('../koneksi/dataproduk.php');
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
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Tabel Produk</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Container Tabel Produk -->
  <div class="container tabelproduk">
    <div class="col-sm-12 text-center">
      <h1 style="margin-top: 20px;">Tabel Produk</h1>
    </div>
    <div class="col-sm-2 offset-sm-10">
      <a class="btn btn-primary" href="halamantambahbarang.php" role="button">Tambah Data Produk</a>
    </div>
    <div class="row">
      <div class="col">
        <table class="table table-striped table-danger">
          <thead class="thead-dark">
            <tr>
              <th scope="col" class="align-middle text-center">Id Produk</th>
              <th scope="col" class="align-middle text-center">Nama Produk</th>
              <th scope="col" class="align-middle text-center">Harga Produk</th>
              <th scope="col" class="align-middle text-center">Deskripsi Produk</th>
              <th scope="col" class="align-middle text-center">Foto Produk</th>
              <th scope="col" class="align-middle text-center">Berat Produk</th>
              <th scope="col" class="align-middle text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($dataproduk = getvalue() as $data) : ?>
              <tr>
                <td class="align-middle text-center"><?= $data['id_produk']; ?></td>
                <td class="align-middle text-center"><?= $data['nama_produk']; ?></td>
                <td class="align-middle text-center"><?= $data['harga_produk']; ?></td>
                <td class="align-middle text-center"><?= $data['deskripsi_produk']; ?></td>
                <td class="align-middle text-center"><?= $data['foto_produk']; ?></td>
                <td class="align-middle text-center"><?= $data['berat_produk']; ?></td>
                <td class="align-middle text-center">
                  <div class="row" style="margin-bottom: 20px; width:200px;">
                    <div class="col">
                      <a href="halamanedit.php? id=<?= $data['id_produk'] ?>" class="align-middle btn btn-success" style="width:100px;">Edit</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <a href="../koneksi/hapusproduk.php? id=<?= $data['id_produk'] ?>" class="align-middle btn btn-danger" style="width:100px;">Hapus</a>
                    </div>
                  </div>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
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