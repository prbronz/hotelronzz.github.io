<html>
    <head>
    <link rel="stylesheet" type="text/css" href="tampilan.css">
    </head>

    <body>
    <div class="main">
	<div class="navbar">
		<label class="ttl">pelanggan kita</label>
	</div>
    
    
    <table border="1">
        <tr>
            <td>nama</td>
            <td>tanggal</td>
            <td>durasi</td>
            <td>tipe_kamar</td>
            <td>total_pembayaran</td>
        </tr>
<?php
    include "conec.php";
    $data=mysqli_query($koneksi,"select * from bookings");
    while($tampil=mysqli_fetch_array($data)){
?>

<tr>
    <td> <?php echo $tampil['nama'] ?></td>
    <td> <?php echo $tampil['tanggal'] ?> </td>
    <td> <?php echo $tampil['durasi'] ?> </td>
    <td> <?php echo $tampil['tipe_kamar'] ?> </td>
    <td> <?php echo $tampil['total_pembayaran'] ?> </td>
    
    <td><a href="input-hapus-booking.php?hapus=<?php echo $tampil['nama'];?>">hapus</a>
    </td>
</tr>

<?php
    }

?>
    </table>
    <a href="input-info-kamar.php">>tambahkan data baru</a>
</div>
    </body>
</html>