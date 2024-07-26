<?php

// Include koneksi database
include('C:\laragon\www\transaksi\koneksi.php');

// Get data dari form
$gambar           = $_POST['gambar'];
$nama_produk         = $_POST['nama_produk'];
$harga         = $_POST['harga'];
$stok          = $_POST['stok'];
$kategori_produk  = $_POST['kategori_produk'];

// Query update data ke dalam database berdasarkan ID menggunakan prepared statements
$query = "UPDATE produk SET gambar = ?, nama_produk = ?, harga = ?, stok = ?, kategori_produk = ?";

// Mempersiapkan statement
$stmt = $connection->prepare($query);

// Mengikat parameter ke statement
$stmt->bind_param("ssssssi", $gambar, $nama_produk, $harga, $stok, $kategori_produk);

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
