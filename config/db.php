<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "inventory_pplg";

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
