<?php
include "conek.php";

$no_kamar = $_POST['no_kamar'];
$lantai = $_POST['lantai'];
$type_kamar = $_POST['type_kamar'];

mysqli_query($koneksi, "INSERT INTO info_kamar VALUES('$no_kamar','$lantai','$type_kamar')");
header("location:info kamar.php");
?>