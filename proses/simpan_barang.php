<?php
include "../config/db.php";
$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$ket = $_POST['keterangan'];

$query = "INSERT INTO barang (nama_barang, jumlah, keterangan) VALUES ('$nama', '$jumlah', '$ket')";
mysqli_query($conn, $query);
header("Location: ../pages/dashboard.php");
?>
