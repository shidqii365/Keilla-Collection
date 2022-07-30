<?php
session_start();
$userole = $_SESSION['role'];

if ($userole != "admin") {
  unset($_SESSION);
  header('location:../view/login.php');
}
$koneksi    = mysqli_connect("localhost", "root", "", "jual");
$pengunjung  = mysqli_query($koneksi, "SELECT pengunjung FROM statistik order by ID asc");
$tanggal       = mysqli_query($koneksi, "SELECT tanggal FROM statistik order by ID asc");
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
          <li class="breadcrumb-item active" aria-current="page">Admin</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Container Admin -->
  <div class="container halamanadmin">
    <div class="row">
    <h1>Hallo Admin</h1>
<p>
</p>
<script src="Chart.js"></script>
<style type="text/css">
            .container {
                width: 60%;
                margin-left: 15px auto;
            }
    </style>
<div class="container">
  <h4>
    Statistik Pengunjung
  </h4>    
        <canvas id="barchart" width="50px" height="50px"></canvas>
    </div>
    </div>
  </div>
  <script  type="text/javascript">
  var ctx = document.getElementById("barchart").getContext("2d");
  var data = {
            labels: [<?php while ($p = mysqli_fetch_array($tanggal)) { echo '"' . $p['tanggal'] . '",';}?>],
            datasets: [
            {
              label: "Pengunjung",
              data: [<?php while ($p = mysqli_fetch_array($pengunjung)) { echo '"' . $p['pengunjung'] . '",';}?>],
              backgroundColor: [
                '#29B0D0',
                '#2A516E',
                '#F07124',
                '#CBE0E3',
                '#979193'
              ]
            }
            ]
            };

  var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
            legend: {
              display: false
            },
            barValueSpacing: 20,
            scales: {
              yAxes: [{
                  ticks: {
                      min: 0,
                  }
              }],
              xAxes: [{
                          gridLines: {
                              color: "rgba(0, 0, 0, 0)",
                          }
                      }]
              }
          }
        });
</script>

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