<?php
include '../koneksi.php';

$id = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$detail_produk = $_POST['detail_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

mysqli_query($koneksi, "INSERT INTO produk VALUES ('$id', '$nama_produk', '$detail_produk', '$harga', '$stok')");

header("location: product.php");
?>