<?php
include "konek.php";

$nama = $_POST['nama'];
$type_kamar = $_POST['type_kamar'];
$waktu = $_POST['waktu'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "INSERT INTO pembayaran VALUES('$nama','$type_kamar','$waktu','$harga')");
header("location:info pembayaran.php");
?>