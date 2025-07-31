<?php
include "../config/db.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM barang WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<form action="../proses/update_barang.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <input type="text" name="nama_barang" value="<?= $data['nama_barang'] ?>">
    <input type="number" name="jumlah" value="<?= $data['jumlah'] ?>">
    <textarea name="keterangan"><?= $data['keterangan'] ?></textarea>
    <button type="submit">Update</button>
</form>
