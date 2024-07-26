<?php

// Include koneksi database
include('C:\laragon\www\transaksi\koneksi.php');

// Get data dari form
$nominal = $_POST['nominal'];
$tanggal = $_POST['tanggal'];
$total = $_POST['total'];
$kembalian = $_POST['kembalian'];
// Assuming you are getting this from the form as well

$query = "INSERT INTO transaksi ( nominal, tanggal, total, kembalian) VALUES ( '$nominal', '$tanggal', '$total' ,'$kembalian')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>