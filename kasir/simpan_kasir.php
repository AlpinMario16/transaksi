<?php

// Include koneksi database
include('C:\laragon\www\transaksi\koneksi.php');

// Get data dari form
$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$no_tlp         = $_POST['no_tlp'];
$email          = $_POST['email'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$jabatan        = $_POST['jabatan'];

// Prepare the SQL statement with placeholders
$query = $connection->prepare("INSERT INTO kasir (nama, alamat, no_tlp, email, jenis_kelamin, jabatan) VALUES (?, ?, ?, ?, ?, ?)");

// Bind the parameters to the placeholders
$query->bind_param("ssssss", $nama, $alamat, $no_tlp, $email, $jenis_kelamin, $jabatan);

// Execute the query and check if it was successful
if ($query->execute()) {
    // Redirect ke halaman index.php
    header("Location: index.php");
} else {
    // Pesan error gagal insert data
    echo "Data Gagal Disimpan: " . $query->error;
}

// Close the prepared statement
$query->close();

// Close the database connection
$connection->close();

?>
