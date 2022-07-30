<?php

$dbhost = "localhost";
$dbname = "keilla_collection";
$dbuser = "root";
$dbpassword = "";

$con = mysqli_connect($dbhost, $dbuser, $dbpassword)
  or die("Gagal Koneksi ke server" . $server);
mysqli_select_db($con, $dbname) or die("Koneksi ke database error");
