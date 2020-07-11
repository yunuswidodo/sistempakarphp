<?php
include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($host, "DELETE FROM produck WHERE id='$id'");
header("location:laptopall.php");
