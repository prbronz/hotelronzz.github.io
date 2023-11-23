<?php
include 'conec.php';

$id=$_GET['hapus'];
mysqli_query($koneksi,"delete from bookings where nama='$id'");

header("location:info booking.php");
?>