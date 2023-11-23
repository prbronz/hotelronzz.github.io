<html>
<head>
    <link rel="stylesheet" type="text/css" href="tampilan.css">
    </head>

    <body>
    <div class="main">
	<div class="navbar">
		<label class="ttl">pengunjung</label>
		<ul>
			<li><a href="home.php">home</a></li>
			<li><a href="info kamar.php">info kamar</a></li>
			<li><a href="info pembayaran.php">pembayaran</a></li>
			<li><a href="">pengunjung</a></li>
			<li><a href="info menu.php">menu</a></li>
		</ul>
	</div>
    
  
    <table border="1">
        <tr>
            <td>type</td>
            <td>nama</td>
            <td>no_kamar</td>
        </tr>
<?php
    include "conec.php";
    $data=mysqli_query($koneksi,"select * from pengunjung");
    while($tampil=mysqli_fetch_array($data)){
?>

<tr>
    <td> <?php echo $tampil['type'] ?></td>
    <td> <?php echo $tampil['nama'] ?> </td>
    <td> <?php echo $tampil['no_kamar'] ?> </td>

    <td><a href="input-hapus-pengunjung.php?hapus=<?php echo $tampil['type'];?>">hapus</a>
    </td>
    <td><a href="edit pengunjung.php?hapus=<?php echo $tampil['type'];?>">edit</a>
    </td>
</tr>

<?php
    }

?>
    </table>
    <a href="input-pengunjung.php">tambahkan data baru</a>
</div>
</html>