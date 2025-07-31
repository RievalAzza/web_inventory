<?php
include "../config/db.php";
$id = $_POST['id'];
$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$ket = $_POST['keterangan'];

$query = "UPDATE barang SET nama_barang='$nama', jumlah='$jumlah', keterangan='$ket' WHERE id=$id";
mysqli_query($conn, $query);
header("Location: ../pages/dashboard.php");
?>
