<?php 
// koneksi database
require '../vendor/autoload.php';
include '../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('template_form.docx');

// menyimpan data kedalam variabel
$name = $_POST['name'];
$email = $_POST['email'];
$division = $_POST['division'];
$channel = $_POST['channel'];
$contenttype = $_POST['contenttype'];
$judulprogram = $_POST['judulprogram'];
$jumlaheps = $_POST['jumlaheps'];
$programteam = $_POST['programteam'];
$linkprogram = $_POST['linkprogram'];
$programdescription = $_POST['programdescription'];



 
// menginput data ke database
mysqli_query($db,"insert into formprogram values('','$name','$email','$division','$channel','$contenttype','$judulprogram','$jumlaheps','$programteam','$linkprogram','$programdescription','')");
 
$templateProcessor->setValues(array(
    'name'          => $name, 
    'email'          => $email, 
    'division'          => $division, 
    'channel'          => $channel, 
    'contenttype'          => $contenttype, 
    'judulprogram'          => $judulprogram, 
    'jumlaheps'          => $jumlaheps, 
    'programteam'          => $programteam, 
    'linkprogram'          => $linkprogram, 
    'programdescription'          => $programdescription, 

));


header('Content-Type: application/octet-stream');
header("Content-Disposition: attachment; filename=Form Program $judulprogram.docx");


$templateProcessor->saveAs('php://output');


// mengalihkan halaman kembali ke verifikasi.php

 
?>