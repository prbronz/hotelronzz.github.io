<html>
    <a href="info kamar.php"></a>
    <h3> Edit pembayaran</h3>

    <?php
    include 'konek.php';
    $nama = $_GET ['edit'];
    $data = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE nama='$nama'");
    while($tampil = mysqli_fetch_array($data)) {
    ?>
    <form method="post" action="input-aksi-pembayaran.php">
        <table>
            <tr>
                <td>nama</td>
                <td><input type="number" name="no" value="<?php echo $tampil['nama']; ?>"></td>
            </tr>
            <tr>
                <td>type_kamar</td>
                <td><input type="text" name="nama" value="<?php echo $tampil['type_kamar']; ?>"></td>
            </tr>
            <tr>
                <td>waktu</td>
                <td><input type="text" name="type" value="<?php echo $tampil['waktu']; ?>"></td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="text" name="type" value="<?php echo $tampil ['harga']></td>
            </tr>
            <tr>
                <td><input type="submit" value="simpan"></td>
            </tr>

            <?php
    }
    ?>
    </html>
    
    
        </table>  
    