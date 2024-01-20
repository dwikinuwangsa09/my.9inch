<?php 
// koneksi database
include '../config/koneksi.php';
 
// menyimpan data kedalam variabel
$id = $_POST['id'];
$role = $_POST['role'];



// query SQL untuk insert data
$query="UPDATE users SET role='$role' where id='$id'";
mysqli_query($db, $query);

// mengalihkan halaman kembali ke crewmanage.php
header("location:../user.php?pesan=berhasilupdate");
 
?>