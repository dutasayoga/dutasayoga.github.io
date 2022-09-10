<?php
session_start();
$kodeper = $_GET['id'];
$koneksi = new mysqli("localhost","root","","hypet");
echo "<script>alert('Jenis perawatan telah dipilih');</script>";
echo "<script>location='transaksi.php';</script>";
 ?>
