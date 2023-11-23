<html>
<head>
    <link rel="stylesheet" type="text/css" href="tampilan.css">
    </head>

    <body>
    <div class="main">
	<div class="navbar">
		<label class="ttl">pembayaran</label>
		<ul>
			<li><a href="home.php">home</a></li>
			<li><a href="info kamar.php">info kamar</a></li>
			<li><a href="">pembayaran</a></li>
			<li><a href="info pengunjung.php">pengunjung</a></li>
			<li><a href="info menu.php">menu</a></li>
		</ul>
	</div>
    
  
    <table border="1">
        <tr>
            <td>nama</td>
            <td>type_kamar</td>
            <td>waktu</td>
            <td>harga</td>
        </tr>
<?php
    include "konek.php";
    $data=mysqli_query($koneksi,"select * from pembayaran");
    while($tampil=mysqli_fetch_array($data)){
?>

<tr>
    <td> <?php echo $tampil['nama'] ?></td>
    <td> <?php echo $tampil['type_kamar'] ?> </td>
    <td> <?php echo $tampil['waktu'] ?> </td>
    <td> <?php echo $tampil['harga'] ?> </td>

    <td><a href="input-hapus-pembayaran.php?hapus=<?php echo $tampil['nama'];?>">hapus</a>
    </td>
    <td><a href="edit pembayaran.php?hapus=<?php echo $tampil['nama'];?>">edit</a>
    </td>
</tr>

<?php
    }

?>
    </table>
    <a href="input-pembayaran.php">tambahkan data baru</a>
</div>
</html>