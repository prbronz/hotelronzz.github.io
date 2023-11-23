<?php
include 'conec.php';

$id=$_GET['hapus'];
mysqli_query($koneksi,"delete from pengunjung where type='$id'");

header("location:info pengnjung.php");
?>