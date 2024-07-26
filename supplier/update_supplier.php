<?php

// Include koneksi database
include('C:\laragon\www\transaksi\koneksi.php');

// Get data dari form
$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$npwp  = $_POST['npwp'];
$status        = $_POST['status'];
$email          = $_POST['email'];
$no_tlp         = $_POST['no_tlp'];
$id_supplier       = $_POST['id_supplier'];

// Query update data ke dalam database berdasarkan ID menggunakan prepared statements
$query = "UPDATE kasir SET nama = ?, alamat = ?, npwp = ?, status = ?, email = ?, no_tlp = ? WHERE supplier = ?";

// Mempersiapkan statement
$stmt = $connection->prepare($query);

// Mengikat parameter ke statement
$stmt->bind_param("ssssssi", $nama, $alamat, $npwp, $status, $email, $no_tlp, $id_supplier);

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
