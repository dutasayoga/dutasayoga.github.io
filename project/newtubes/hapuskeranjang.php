<?php

session_start();
$koneksi = new mysqli("localhost","root","","hypet");


unset($_SESSION["keranjang"][$id_produk]);

echo "<script>alert('produk dihapus dari keranjang');</script>";
echo "<script>location='keranjang.php';</script>";

 ?>

 
