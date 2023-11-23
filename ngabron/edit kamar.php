<html>
    <a href="info kamar.php"></a>
    <h3> Edit Kamar</h3>

    <?php
    include 'conek.php';
    $no_kamar = $_GET ['edit'];
    $data = mysqli_query($koneksi, "SELECT * FROM info_kamar WHERE no_kamar='$no_kamar'");
    while($tampil = mysqli_fetch_array($data)) {
    ?>
    <form method="post" action="input-aksi-infokamar.php">
        <table>
            <tr>
                <td>no_kamar</td>
                <td><input type="number" name="no" value="<?php echo $tampil['no_kamar']; ?>"></td>
            </tr>
            <tr>
                <td>lantai</td>
                <td><input type="text" name="nama" value="<?php echo $tampil['lantai']; ?>"></td>
            </tr>
            <tr>
                <td>type_kamar</td>
                <td><input type="text" name="type" value="<?php echo $tampil['type_kamar']; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="simpan"></td>
            </tr>

            <?php
    }
    ?>
    </html>
    
    
        </table>  
    