

<?php

 // A sample PHP Script to POST data using cURL
// Data in JSON format
// koneksi database
include '../config/koneksi.php';
 
// menangkap data yang di kirim dari form
date_default_timezone_set("Asia/Jakarta");
$time = date("d-M-Y H:i:s");
$number = $_POST['number'];
$message = $_POST['message'];


$data = array(
    'number' => $number,
    'message' => $message
);
 
$payload = json_encode($data);
 
// Prepare new cURL resource
$ch = curl_init('http://apiwa.kinume.codes/send-message');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
 
// Set HTTP Header for POST request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload))
);
 
// Submit the POST request
$result = curl_exec($ch);
 
// Close cURL session handle
curl_close($ch);

 // mengalihkan halaman kembali ke verifikasi.php
header("location:../message.php?pesan=berhasil");
?>

