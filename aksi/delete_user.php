<?php 
// koneksi database
include '../config/koneksi.php';
 
$id   = $_GET['id'];

// query SQL untuk insert data
$query="DELETE from users where id='$id'";
mysqli_query($db, $query);

// mengalihkan halaman kembali ke verifikasi.php
header("location:../user.php?pesan=berhasilhapus");
 
?>