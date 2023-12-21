<?php 
// koneksi database
include '../config/koneksi.php';
 
// menyimpan data kedalam variabel
$nim = $_POST['nim'];
$fullname = $_POST['fullname'];
$uid = $_POST['uid'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];


// query SQL untuk insert data
$query="UPDATE crew SET uid='$uid',fullname='$fullname',email='$email',phonenumber='$phonenumber' where nim='$nim'";
mysqli_query($db, $query);

// mengalihkan halaman kembali ke crewmanage.php
header("location:../crewm.php?pesan=berhasilupdate");
 
?>