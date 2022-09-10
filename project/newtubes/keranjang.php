<?php
session_start();

if( !isset($_SESSION['user'])) {
   header('location: login_customer.php');
}

$koneksi = new mysqli("localhost","root","","hypet");

if (empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])) {
   echo "<script>alert('keranjang anda kosong');</script>";
   echo "<script>location='product.php';</script>";

}
 ?>
 <!DOCTYPE html>
 <html>
     <head>

         <title>Keranjang Belanja</title>
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
         <section claass="konten">
               <div class="container">
                     <h1>Keranjang Belanja</h1>
                     <hr>
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>No</th>
                              <th>Product</th>
                              <th>Harga</th>
                              <th>Jumlah</th>
                              <th>Total Harga</th>
                              <th>aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $nomor=1; ?>
                           <?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
                           <?php
                           $ambil =$koneksi->query("SELECT * FROM produk
                           WHERE id_produk='$id_produk'");
                           $break = $ambil->fetch_assoc();
                           $totharga = $break["harga_produk"]*$jumlah;
                           ?>
                           <tr>
                              <td><?php echo $nomor; ?></td>
                              <td><?php echo $break["nama_produk"]; ?> </td>
                              <td>Rp.<?php echo number_format($break["harga_produk"]); ?></td>
                              <td name="jumlah"><?php echo $jumlah;  ?></td>
                              <td name= "totharga">Rp. <?php echo number_format($totharga); ?></td>
                              <td>
                                 <a href="hapuskeranjang.php?id=<?php echo $id_produk?>" class="btn btn-danger btn-xs">hapus</a>
                                 <form method="post"  >
                                    <button name="submit" class="btn btn-primary" >pesan</button>
                                 </form>
                                 <?php
                                    if (isset($_POST['submit'])) {
                                       $user = $_SESSION['user'];


                                       $koneksi->query("INSERT INTO pembelian(id_produk, username, total_produk, total_harga, Date)
                                       VALUES('$id_produk','$user','$jumlah','$totharga', now()) ");


                                       echo "<script>alert('pesanan sudah masuk');</script>";

                                    }
                                  ?>
                              </td>
                           </tr>
                           <?php $nomor++; ?>

                        <?php endforeach ?>
                        </tbody>
                     </table>
                     <a href="product.php" class="btn btn-default">Lanjutkan belanja</a>
               </div>
         </section>




         </body>
</html>
