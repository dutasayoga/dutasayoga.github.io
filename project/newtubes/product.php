<?php
session_start();

if ( !isset($_SESSION['user'])) {
   header('location: login_customer.php');
}

$koneksi = new mysqli("localhost","root","","hypet");
 ?>
<!DOCTYPE html>
<html>
    <head>

        <title>PetShop | HyPet</title>
        <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
        <link rel="stylesheet" href="view/main.css">
        </head>
    <body>
      <header >
         <div id="header">H y P E T</div>
         </div>
         <div id="subtitle">P e t   S h o p & C a r e</div>

      </header>

      <nav>
         <div id="MenuBar1">
            <ul>
               <li><a href="index.php">Home</a></li>
               <li><a href="product.php">Product</a></li>
               <li><a href="keranjang.php" >Keranjang</a></li>
               <li><a href="mainReserve.php" >Reserve</a></li>
               <li><a href="logout.php" >LOGOUT</a></li>
               <li class="right"><a href="Registrasi_Pelanggan.php">Daftar</a></li>
            </ul>
         </div>
      </nav>
<!-- konten -->
<section class="konten" >
   <div class="container">
      <h1>Produk</h1>

      <div class="row">

      <?php $ambil=$koneksi->query("SELECT * FROM produk"); ?>
      <?php while($perproduk = $ambil->fetch_assoc()){ ?>

         <div class="col-md-3">
           <div class="thumbnail">
             <img src="Images/<?php echo $perproduk['pict']; ?>" >
               <div class="caption">
                 <h3><?php echo $perproduk['nama_produk']; ?></h3>
                 <h5>Rp <?php echo number_format($perproduk['harga_produk']); ?></h5>
                 <a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
               </div>
            </div>
         </div>

      <?php } ?>


    </div>
  </div>
</section>

</body>
</html>
