<?php 
// koneksi database
include '../config/koneksi.php';
 
// menangkap data yang di kirim dari form
date_default_timezone_set("Asia/Jakarta");
$time = date("d-M-Y H:i:s");
$uidsmartcard = $_POST['uidsmartcard'];
$myfilename =  'fotoentry/' . time() . '.jpg';

$query    =mysqli_query($db, "SELECT * FROM mhs WHERE uidsmartcard='$uidsmartcard'");
$result    =mysqli_fetch_array($query);

$id_mhs = $result['id_mhs'];
$foto = $result['foto'];
$nama = $result['nama'];
$nim = $result['nim'];
$nama_prodi = $result['nama_prodi'];
$tempat_lahir = $result['tempat_lahir'];
$tgl_lahir = $result['tgl_lahir'];
$telepon = $result['telepon'];
$alamat = $result['alamat'];
$smt_tempuh= $result['smt_tempuh'];

$encoded_data = $_POST['mydata'];
$binary_data = base64_decode( $encoded_data );

// save to server (beware of permissions)
$result = file_put_contents( $myfilename, $binary_data );

mysqli_query($db,"insert into entry_mhs values(NULL,'$uidsmartcard','$foto','$id_mhs','$nama','$nim','$nama_prodi','$tempat_lahir','$tgl_lahir','$telepon','$alamat','$smt_tempuh','$myfilename','$time')");

if (!$result) die("Could not save image!  Check file permissions.");

// menginput data ke database
//mysqli_query($db,"insert into entry_mhs values(NULL,'1','1','1','1','1','1','1','1','1','1','1','1','1')");


echo json_encode(array('nama' => $nama,
'nim' => $nim,
'foto' => $foto));

?>

