<!DOCTYPE html>
<html?>
<head>
    <title>SISTEM TOKO BAROKAH</title>
    
    <link rel="stylesheet" type="text/css" href="assets1/css/style.css">
    <script type="text/javascript" src="assets1/js/jquery.js"></script>
    <script type="text/javascript" src="assets1/js/bootstrap.js"></script>

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>
<?php
session_start();
if ($_SESSION['status'] != "Login") {
    header("location:../index.php?pesan=belum_login");
}
?>
    <div class="container">
        <div class="sidebar">
            <div class="header">
                <div class="list-item">
                    <a href="#">
                        <img src="assets1/calculator.png" alt="" class="icon">
                        <span class="description-header">TOKO BAROKAH</span>
                    </a>
                </div>
                <br/>
                <div class="illustration">
                    <img src="assets1/barokah.png" alt="" class="logo">
                </div>
                <br/><br/>
            </div>
            <div class="main">
                <div class="list-item">
                    <a href="index.php">
                        <img src="assets1/home.png" alt="" class="icon">
                        <span class="description"></i> <strong>Home</strong></span>
                    </a>
                </div>
                <br/>
                <div class="list-item">
                    <a href="pesanan.php">
                        <img src="assets1/pesanan.png" alt="" class="icon">
                        <span class="description"></i> <strong>Order</strong></span>
                    </a>
                </div>
                <br/>
                <div class="list-item">
                    <a href="product.php">
                        <img src="assets1/product.png" alt="" class="icon">
                        <span class="description"></i> <strong>Stock Barang</strong></span>
                    </a>
                </div>
                <br/>
                <div class="list-item">
                    <a href="masuk.php">
                        <img src="assets1/icons8-enter-24.png" alt="" class="icon" width="35px" height="33px">
                        <span class="description"></i> <strong>Barang Masuk</strong></span>
                    </a>
                </div>
                <br/>
            </div>
        </div>
    
