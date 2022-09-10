<?php

$koneksi->query("UPDATE pembelian SET Sdelivery = 'Delivered' WHERE id_pembelian = '$_GET[id]'");

echo "<script>alert('Transaksi sudah selesei');</script>";
echo "<script>location='adminpage.php';</script>";

 ?>
