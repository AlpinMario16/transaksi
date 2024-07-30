<?php

// Include koneksi database
include('C:\laragon\www\transaksi\koneksi.php');


$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$no_tlp         = $_POST['no_tlp'];
$email          = $_POST['email'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$jabatan        = $_POST['jabatan'];
$id_kasir       = $_POST['id_kasir'];


$query = "UPDATE kasir SET nama = ?, alamat = ?, no_tlp = ?, email = ?, jenis_kelamin = ?, jabatan = ? WHERE id_kasir = ?";


$stmt = $connection->prepare($query);


$stmt->bind_param("ssssssi", $nama, $alamat, $no_tlp, $email, $jenis_kelamin, $jabatan, $id_kasir);

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
