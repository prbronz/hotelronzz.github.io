<?php
include 'konek.php';

$id=$_GET['hapus'];
mysqli_query($koneksi,"delete from pembayaran where nama='$id'");

header("location:info pembayaran.php");
?>