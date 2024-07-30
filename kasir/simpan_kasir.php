<?php

// Include koneksi database
include('C:\laragon\www\transaksi\koneksi.php');


$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$no_tlp         = $_POST['no_tlp'];
$email          = $_POST['email'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$jabatan        = $_POST['jabatan'];


$query = $connection->prepare("INSERT INTO kasir (nama, alamat, no_tlp, email, jenis_kelamin, jabatan) VALUES (?, ?, ?, ?, ?, ?)");


$query->bind_param("ssssss", $nama, $alamat, $no_tlp, $email, $jenis_kelamin, $jabatan);


if ($query->execute()) {
    // Redirect ke halaman index.php
    header("Location: index.php");
} else {
    // Pesan error gagal insert data
    echo "Data Gagal Disimpan: " . $query->error;
}


$query->close();


$connection->close();

?>
