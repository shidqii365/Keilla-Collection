<?php

// menghubungkan dengan koneksi
include('koneksi.php');
session_start();
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($con, "select * from admin where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($username != '' && $password != '') {
  if ($cek > 0) {

    // get data
    $get = mysqli_fetch_array($data);

    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    $_SESSION['role'] = $get['role'];

    if ($get['role'] == "admin") {
      header("location:../view/admin.php");
    } else {
      header("location:../view/home.php");
    }
  } else {
    echo "<script>alert('Username & Password Salah'); window.location.href='../view/login.php'</script>";
  }
} elseif ($username == '') {
  echo "<script>alert('Username Kosong'); window.location.href='../view/login.php'</script>";
} elseif ($password == '') {
  echo "<script>alert('Password Kosong'); window.location.href='../view/login.php'</script>";
} else {
  echo "<script>alert('Username & Password Kosong'); window.location.href='../view/login.php'</script>";
}
