<?php
include('koneksi.php');

if (isset($_POST['submit'])) {
  $id_produk = $_POST['id_produk'];
  $nama_produk = $_POST['nama_produk'];
  $harga_produk = $_POST['harga_produk'];
  $berat_produk = $_POST['berat_produk'];
  $foto_produk = $_POST['foto_produk'];
  $deskripsi_produk = $_POST['deskripsi_produk'];

  $data = mysqli_query(
    $con,
    "update produk set nama_produk ='$nama_produk', harga_produk = '$harga_produk', 
        deskripsi_produk = '$deskripsi_produk',foto_produk='$foto_produk',berat_produk = '$berat_produk'
        where id_produk ='$id_produk'"
  );

  $res = mysqli_query($con, $data);
  $rows = mysqli_affected_rows($con);
  if ($rows != 0) {
    echo "<script>alert('Data telah berhasil di diubah'); window.location.href='../view/tabelproduk.php'</script>";
  } else {
    echo "Error: " . $data . "<br>" . mysqli_error($con);
  }
  $con->close();
}
