<?php

// Include koneksi database
include('C:\laragon\www\transaksi\koneksi.php');

$nominal    = $_POST['nominal'];
$tanggal    = $_POST['tanggal'];
$total      = $_POST['total'];
$kembalian  = $_POST['kembalian'];
$id_transaksi = $_POST['id_transaksi'];  


$query = "UPDATE transaksi SET nominal = ?, tanggal = ?, total = ?, kembalian = ? WHERE id_transaksi = ?";


$stmt = $connection->prepare($query);


$stmt->bind_param("ssssi", $nominatanggal, $total, $kembalian, $id_transaksi);

// Kondisi pengecekan apakah data berhasil diupdate atau tidak
if($stmt->execute()) {
    // Redirect ke halaman index.php
    header("Location: index.php");
} else {
    // Pesan error gagal update data
    echo "Data Gagal Diupdate!";
}


$stmt->close();
$connection->close();

?>
