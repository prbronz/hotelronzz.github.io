<html>
    <head>
    <link rel="stylesheet" type="text/css" href="tampilan.css">
    </head>

    <body>
    <div class="main">
	<div class="navbar">
		<label class="ttl">kamar</label>
		<ul>
			<li><a href="home.php">home</a></li>
			<li><a href="">info kamar</a></li>
			<li><a href="info pembayaran.php">pembayaran</a></li>
			<li><a href="info pengunjung.php">pengunjung</a></li>
		</ul>
	</div>
    
    
    <table border="1">
        <tr>
            <td>no_kamar</td>
            <td>lantai</td>
            <td>type_kamar</td>
        </tr>
<?php
    include "conek.php";
    $data=mysqli_query($koneksi,"select * from info_kamar");
    while($tampil=mysqli_fetch_array($data)){
?>

<tr>
    <td> <?php echo $tampil['no_kamar'] ?></td>
    <td> <?php echo $tampil['lantai'] ?> </td>
    <td> <?php echo $tampil['type_kamar'] ?> </td>

    <td><a href="input-hapus-info kamar.php?hapus=<?php echo $tampil['no_kamar'];?>">hapus</a>
    </td>
    
    <td><a href="edit kamar.php?edit=<?php echo $tampil['no_kamar'];?>">edit</a>
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