<?php



$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$break = $ambil->fetch_assoc();
$fotoproduk = $break['pict'];
if (file_exists("../Images/$fotoproduk"))
{
      unlink("../Images/$fotoproduk");
}

$koneksi->query("DELETE FROM produk WHERE id_produk='$_GET[id]'");

echo "<script>alert('Produk Terhapus');</script>";
echo "<script>location='adminpage.php?halaman=produk';</script>";

 ?>
