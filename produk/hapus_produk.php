<?php

include('C:\laragon\www\transaksi\koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM produk WHERE id_produk = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>