<?php
include('koneksi.php');
$detailproduk = [];
if (isset($_GET['id'])) {
  $id_barang = $_GET['id'];
  $data = mysqli_query($con, "select * from produk where id_produk = '$id_barang'");
  $cek = mysqli_fetch_row($data);
}
