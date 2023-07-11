<?php
session_start();
include 'koneksi.php';

$nama = $_POST['USERNAME'];
$password = $_POST['PASSWORD'];

$data = mysqli_query($koneksi, "SELECT * FROM user WHERE USERNAME = '$nama' AND PASSWORD = '$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['USERNAME'] = $nama;
    $_SESSION['status'] = "Login";
    header("location:admin_user/index.php");
}else{
    header("location:index.php?pesan=gagal");
}
?>
