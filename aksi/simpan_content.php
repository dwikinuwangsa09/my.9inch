<?php 
// koneksi database
include '../config/koneksi.php';
 
// menangkap data yang di kirim dari form
// menyimpan data kedalam variabel
$projectname = $_POST['projectname'];
$datetimeup = $_POST['datetimeup'];
$owner = $_POST['owner'];
$channel = $_POST['channel'];
$contenttype = $_POST['contenttype'];
$rawmaterial = $_POST['rawmaterial'];
$firstpic = $_POST['firstpic'];
$status = $_POST['status'];
$responsible = $_POST['responsible'];
$linktodrive = $_POST['linktodrive'];
$notes = $_POST['notes'];
$caption = $_POST['caption'];


 
// menginput data ke database
mysqli_query($db,"insert into worksheet values('','$projectname','$datetimeup','$owner','$channel','$contenttype','$rawmaterial','$firstpic','$status','$responsible','$linktodrive','$notes','$caption','','')");
 
// mengalihkan halaman kembali ke verifikasi.php
header("location:../worksheet.php?pesan=berhasil");
 
?>