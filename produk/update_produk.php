<?php

// Include koneksi database
include('C:\laragon\www\transaksi\koneksi.php');


$gambar           = $_POST['gambar'];
$nama_produk      = $_POST['nama_produk'];
$harga            = $_POST['harga'];
$stok             = $_POST['stok'];
$kategori_produk  = $_POST['kategori_produk'];
$id_produk        = $_POST['id_produk'];  


$query = "UPDATE produk SET gambar = ?, nama_produk = ?, harga = ?, stok = ?, kategori_produk = ? WHERE id_produk = ?";


$stmt = $connection->prepare($query);


$stmt->bind_param("sssssi", $gambar, $nama_produk, $harga, $stok, $kategori_produk, $id_produk);

// Kondisi pengecekan apakah data berhasil diupdate atau tidak
if($stmt->execute()) {
    // Redirect ke halaman index.php
    header("location: index.php");
} else {
    // Pesan error gagal update data
    echo "Data Gagal Diupdate!";
}


$stmt->close();
$connection->close();

?>
