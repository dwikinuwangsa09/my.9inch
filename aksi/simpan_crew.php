<?php 
// koneksi database
include '../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$uid = $_POST['uid'];
$nim = $_POST['nim'];
$fullname = $_POST['fullname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$division = $_POST['division'];
$role = $_POST['role'];
$batch = $_POST['batch'];
$phonenumber = $_POST['phonenumber'];

 
// menginput data ke database
mysqli_query($db,"insert into crew values('','$uid','$fullname','$division','$role','$dob','$nim','$batch','$email','$phonenumber')");
 
// mengalihkan halaman kembali ke verifikasi.php
header("location:../crew.php?pesan=berhasil");
 
?>