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

        <title>Reserve</title>
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
      <section class="konten" >
         <div class="container">
            <h1 class="text-center">JENIS PERAWATAN</h1>
            <br />
            <div class="row">

            <?php $ambil=$koneksi->query("SELECT * FROM perawatan"); ?>
            <?php while($perpw = $ambil->fetch_assoc()){ ?>

               <div class="col-md-4">
                 <div class="thumbnail">
                    <img src="Images/<?php echo $perpw['picture']; ?>" >
                     <div class="caption">
                       <h1 class="text-center"><?php echo $perpw['Jenis_Perawatan']; ?></h1>
                       <br />
                       <h5><?php echo $perpw['Deskripsi']; ?></h5>
                       <h5>Rp <?php echo number_format($perpw['Harga_Perawatan']); ?></h5>
                       <a href="transaksi.php?id=<?php echo $perpw['Kode_Perawatan']; ?>" class="btn btn-primary">Pilih</a>
                     </div>
                  </div>
               </div>

            <?php } ?>


          </div>
        </div>
      </section>

   </body>
</html>
