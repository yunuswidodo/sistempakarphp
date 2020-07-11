<?php
include '../koneksi.php';

$branch = $_POST['branch'];
$model = $_POST['model'];
$prosesor  = $_POST['prosesor'];
$ram = $_POST['ram'];
$memory = $_POST['memory'];
$ssd = $_POST['ssd'];
$hdd = $_POST['hdd'];
$harga = $_POST['harga'];
$golongan = $_POST['golongan'];

mysqli_query($host, "INSERT INTO produck VALUES('', '$branch', '$model', '$prosesor', '$ram', '$memory', '$ssd', 
'$hdd', '$harga', '$golongan')");

header("location:laptopall.php");
