<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELESAI</title>
    <link rel="stylesheet" type="text/css" href="selesai.css">
    <li><a href="logout.php">Keluar</a></li>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $tanggal = $_POST["tanggal"];
    $durasi = $_POST["durasi"];
    $tipe_kamar = $_POST["tipe_kamar"];

    // Tersambungkan dengan MySQL
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "hotel";

    $conn = new mysqli($server, $username, $password, $database);

    if ($conn->connect_error) {
        die("Koneksi Gagal: " . $conn->connect_error);
    }

    // Hitung total pembayaran
    $harga_kamar = 500000; // Ganti dengan harga sesuai kebijakan hotel
    $total_pembayaran = $harga_kamar * $durasi;

    // Masukkan data pemesanan ke database
    $sql = "INSERT INTO bookings (nama, tanggal, durasi, tipe_kamar, total_pembayaran) 
            VALUES ('$nama', '$tanggal', '$durasi', '$tipe_kamar', '$total_pembayaran')";

    if ($conn->query($sql) === TRUE) {
        echo "Pemesanan berhasil! Total pembayaran: $total_pembayaran. Terima kasih, $nama, telah memesan kamar $tipe_kamar selama $durasi hari pada tanggal $tanggal.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?> 
</body>
</html>

