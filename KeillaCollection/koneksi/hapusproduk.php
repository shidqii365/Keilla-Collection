<?php
include('koneksi.php');

if (isset($_GET['id'])) {
  $id_produk = $_GET['id'];


  $data = mysqli_query(
    $con,
    "delete from produk where id_produk ='$id_produk'"
  );

  $res = mysqli_query($con, $data);
  $rows = mysqli_affected_rows($con);
  if ($rows != 0) {
    echo "<script>alert('Data telah berhasil di hapus'); window.location.href='../view/tabelproduk.php'</script>";
  } else {
    echo "Error: " . $data . "<br>" . mysqli_error($con);
  }
  $con->close();
}
