<?php
include 'conec.php';

$type = $_POST['type'];
$nama = $_POST['nama'];
$no_kamar = $_POST['no_kamar'];

mysqli_query($koneksi, "INSERT INTO pengunjung VALUES('$type','$nama','$no_kamar')");
header("location:info pengunjung.php");
?>