<?php
include '../koneksi.php';
$id = $_POST['asu'];
$branch = $_POST['branch'];
$model = $_POST['model'];
$prosesor  = $_POST['prosesor'];
$ram = $_POST['ram'];
$memory = $_POST['memory'];
$ssd = $_POST['ssd'];
$hdd = $_POST['hdd'];
$harga = $_POST['harga'];
$golongan = $_POST['golongan'];

mysqli_query($host, "UPDATE produck SET branch='$branch', model='$model', prosesor='$prosesor', ram='$ram', memory='$memory', ssd='$ssd', 
hdd='$hdd', harga='$harga', golongan='$golongan' WHERE id='$id'");

//print_r($id);
header("location:laptopall.php");
