<html>
    <a href="info pengunjung.php"></a>
    <h3> Edit pengunjung</h3>

    <?php
    include 'conec.php';
    $type = $_GET ['edit'];
    $data = mysqli_query($koneksi, "SELECT * FROM pengunjung WHERE type ='$type'");
    while($tampil = mysqli_fetch_array($data)) {
    ?>
    <form method="post" action="input-aksi-pengunjung.php">
        <table>
            <tr>
                <td>type</td>
                <td><input type="text" name="no" value="<?php echo $tampil['type']; ?>"></td>
            </tr>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama" value="<?php echo $tampil['type']; ?>"></td>
            </tr>
            <tr>
                <td>no_kamar</td>
                <td><input type="text" name="type" value="<?php echo $tampil['no_kamar']; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="simpan"></td>
            </tr>

            <?php
    }
    ?>
    </html>
    
    
        </table>  
    