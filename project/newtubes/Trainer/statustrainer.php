<?php

$koneksi->query("UPDATE transaksi SET Strainer = 'Done' WHERE Kode_Transaksi = '$_GET[id]'");

echo "<script>alert('Transaksi sudah selesei');</script>";
echo "<script>location='adminpage.php';</script>";

 ?>
