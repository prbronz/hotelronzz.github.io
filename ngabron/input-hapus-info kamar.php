<?php
include 'conek.php';

$id=$_GET['hapus'];
mysqli_query($koneksi,"delete from info_kamar where no_kamar='$id'");

header("location:info kamar.php");
?>