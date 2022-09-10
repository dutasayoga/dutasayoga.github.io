<?php
session_start();
$id_produk = $_GET['id'];
$koneksi = new mysqli("localhost","root","","hypet");

if(isset($_SESSION['keranjang'][$id_produk]))
{
      $_SESSION['keranjang'][$id_produk]+=1;
}
else
{
      $_SESSION['keranjang'][$id_produk] = 1;
}
echo "<script>alert('Produk telah masuk ke keranjang belanja');</script>";
echo "<script>location='keranjang.php';</script>";
 ?>
