<?php

$koneksi->query("UPDATE pembelian SET Status = 'Sukses' WHERE id_pembelian = '$_GET[id]'");

echo "<script>alert('Transaksi sudah selesei');</script>";
echo "<script>location='adminpage.php';</script>";

 ?>
