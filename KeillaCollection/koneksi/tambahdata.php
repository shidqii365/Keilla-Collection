<?php
include('koneksi.php');
if (isset($_POST['submit'])) {
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $deskripsi_produk = $_POST['deskripsi_produk'];
    $foto_produk = $_POST['foto_produk'];
    $berat_produk = $_POST['berat_produk'];

    $data = mysqli_query(
        $con,
        "insert into produk(nama_produk, harga_produk, deskripsi_produk, foto_produk, berat_produk) 
    values('$nama_produk','$harga_produk','$deskripsi_produk', '$foto_produk','$berat_produk')"
    );

    $res = mysqli_query($con, $data);
    $rows = mysqli_affected_rows($con);
    if ($rows != 0) {
        echo "<script>alert('Berhasil ditambahkan'); window.location.href='../view/tabelproduk.php'</script>";
    } else {
        echo "Error: " . $data . "<br>" . mysqli_error($con);
    }
    $con->close();
}
