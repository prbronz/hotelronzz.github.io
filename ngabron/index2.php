<?php include 'coneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tampil.css">
    <title>Pemesanan Kamar Hotel</title>
</head>
<body>
    <div class="container">
        <h2>Pesan Kamar Hotel</h2>
        <form action="process.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="tanggal">Tanggal Check-in:</label>
            <input type="date" id="tanggal" name="tanggal" required>

            <label for="durasi">Durasi (hari):</label>
            <input type="number" id="durasi" name="durasi" min="1" required>

            <label for="tipe_kamar">Tipe Kamar:</label>
            <select id="tipe_kamar" name="tipe_kamar" required>
                <option value="single">Single</option>
                <option value="double">Double</option>
                <option value="suite">Suite</option>
            </select>

            <button type="submit">Pesan Sekarang</button>
        </form>
    </div>
</body>
</html>