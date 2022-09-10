<?php
session_start();
$id_ss = $_GET['id'];
$koneksi = new mysqli("localhost","root","","hypet");

$username = $_SESSION['user'];
print_r($username);

//foreach ($_SESSION['keranjang']) as $id_produk => $jumlah):
   //$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$id_produk'");
   //$break = $ambil->fetch_assoc();
//endforeach
//$id_produk = $_SESSION['keranjang'];
//print_r($id_produk);
$ambil = $koneksi->query("SELECT * FROM produk ");
$break = $ambil->fetch_assoc();
$id_produk = $_SESSION['keranjang'][''];

$id_ss = $_GET['id'];

print_r($id_produk);
//print_r($id);
print_r($break["id_produk"]);
//print_r($id_produk["jumlah"]);



 ?>

 <pre>
    <?php print_r($_SESSION['user']); ?>
    <?php print_r($_SESSION['keranjang']); ?>
    <?php print_r($id_ss); ?>
 </pre>
