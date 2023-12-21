<?php 
// koneksi database
include '../config/koneksi.php';
 
// menyimpan data kedalam variabel
$id = $_POST['id'];
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
$feedback = $_POST['feedback'];
$linktocontent = $_POST['linktocontent'];



// query SQL untuk insert data
$query="UPDATE worksheet SET 
projectname='$projectname',
datetimeup='$datetimeup',
owner='$owner',
channel='$channel',
contenttype='$contenttype',
rawmaterial='$rawmaterial',
firstpic='$firstpic',
status='$status',
responsible='$responsible',
linktodrive='$linktodrive',
notes='$notes',
caption='$caption',
feedback='$feedback',
linktocontent='$linktocontent'
 where id='$id'";
mysqli_query($db, $query);

// mengalihkan halaman kembali ke crewmanage.php
header("location:../worksheet.php?pesan=berhasilupdate");
 
?>