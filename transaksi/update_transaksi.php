<?php

// Include koneksi database
include('C:\laragon\www\transaksi\koneksi.php');

// Get data dari form
$nominal           = $_POST['nominal'];
$tanggal         = $_POST['tanggal'];
$total         = $_POST['total'];
$kembalian          = $_POST['kembalian'];

// Query update data ke dalam database berdasarkan ID menggunakan prepared statements
$query = "UPDATE transaksi SET nominal = ?, tanggal = ?, total = ?, kembalian = ?";

// Mempersiapkan statement
$stmt = $connection->prepare($query);

// Mengikat parameter ke statement
$stmt->bind_param("ssssssi", $nominal, $tanggal, $total, $kembalian);

// Kondisi pengecekan apakah data berhasil diupdate atau tidak
if($stmt->execute()) {
    // Redirect ke halaman index.php
    header("location: index.php");
} else {
    // Pesan error gagal update data
    echo "Data Gagal Diupdate!";
}

// Menutup statement dan koneksi
$stmt->close();
$connection->close();

?>
