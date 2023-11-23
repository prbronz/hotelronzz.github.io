<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "hotel";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}
?>