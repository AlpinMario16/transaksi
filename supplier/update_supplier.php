<?php

// Include koneksi database
include('C:\laragon\www\transaksi\koneksi.php');


$nama        = $_POST['nama'];
$alamat      = $_POST['alamat'];
$npwp        = $_POST['npwp'];
$status      = $_POST['status'];
$email       = $_POST['email'];
$no_tlp      = $_POST['no_tlp'];
$id_supplier = $_POST['id_supplier'];


$query = "UPDATE supplier SET nama = ?, alamat = ?, npwp = ?, status = ?, email = ?, no_tlp = ? WHERE id_supplier = ?";


$stmt = $connection->prepare($query);


$stmt->bind_param("ssssssi", $nama, $alamat, $npwp, $status, $email, $no_tlp, $id_supplier);

// Kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($stmt->execute()) {
    // Redirect ke halaman index.php
    header("Location: index.php");
} else {
    // Pesan error gagal update data
    echo "Data Gagal Diupdate!";
}


$stmt->close();
$connection->close();

?>
