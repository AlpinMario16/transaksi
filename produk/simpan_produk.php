<?php

//include koneksi database
include('C:\laragon\www\transaksi\koneksi.php');



$gambar           = $_POST['gambar'];
$nama_produk         = $_POST['nama_produk'];
$harga         = $_POST['harga'];
$stok          = $_POST['stok'];
$kategori_produk  = $_POST['kategori_produk'];


$query = "INSERT INTO produk ( gambar, nama_produk, harga, stok, kategori_produk) VALUES ( '$gambar', '$nama_produk', '$harga' ,'$stok',  '$kategori_produk')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>