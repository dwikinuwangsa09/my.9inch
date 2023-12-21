<?php 
// koneksi database
include '../config/koneksi.php';
 
$id   = $_GET['id'];

// query SQL untuk insert data
$query="DELETE from worksheet where id='$id'";
mysqli_query($db, $query);

// mengalihkan halaman kembali ke verifikasi.php
header("location:../worksheet.php?pesan=berhasilhapus");
 
?>