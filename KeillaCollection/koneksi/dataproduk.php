<?php

function getvalue()
{
  include("koneksi.php");
  $dataproduk = [];
  // No need of bracket here
  $sql = mysqli_query($con, "SELECT * FROM produk");
  // declare an array
  if ($sql) {
    // loop
    while ($row = mysqli_fetch_array($sql)) {
      // store data in an array
      $dataproduk[] = $row;
    }
  }

  return $dataproduk;
}
