<?php 
// koneksi database
include '../config/koneksi.php';
 
$nim   = $_GET['nim'];

// query SQL untuk insert data
$query="DELETE from crew where nim='$nim'";
mysqli_query($db, $query);

// mengalihkan halaman kembali ke verifikasi.php
header("location:../crew.php?pesan=berhasilhapus");
 
?>