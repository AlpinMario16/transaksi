<?php

//include koneksi database
include('C:\laragon\www\transaksi\koneksi.php');

//get data dari form

$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$npwp  = $_POST['npwp'];
$status        = $_POST['status'];
$email          = $_POST['email'];
$no_tlp         = $_POST['no_tlp'];

//query insert data ke dalam database
$query = "INSERT INTO supplier ( nama, alamat, npwp, status, email, no_tlp) VALUES ( '$nama', '$alamat', '$npwp' ,'$status',              '$email', '$no_tlp')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>