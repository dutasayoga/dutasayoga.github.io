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
            <h1 class="text-center">Detail Transaksi </h1>

            <br />
            <form  method="post">
               <p>
                  Lama Perawatan : <input type="text" name="lama_perawatan" value=""> hari </input>
                  <input type="submit" name="submit" value="submit">
               </p>
            </form>

            <?php
               if( isset($_POST['submit'])) {
                  $jumlah_hari = $_POST['lama_perawatan'];
                  $query = "DELETE FROM transaksi WHERE Lama_Perawatan = '0'";

                  if(mysqli_query($koneksi,$query)) {
                     echo "sukses";
                  }
               }
             ?>

            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>username</th>
                     <th>Jenis Perawatan</th>
                     <th>Biaya</th>
                     <th>Nama Hewan</th>
                     <th>Lama Perawatan</th>
                     <th>Total Harga</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     $user = $_SESSION['user'];
                     $ambil_id_hewan = $_SESSION['hewan'];
                     $kodeper = $_GET['id'];
                     $ambil = $koneksi->query("SELECT * FROM perawatan
                     WHERE Kode_Perawatan = '$kodeper'");
                     $ambil2 = $koneksi->query("SELECT * FROM pet
                     WHERE ID_Hewan = '$ambil_id_hewan'");
                     $break = $ambil->fetch_assoc();
                     $break2 = $ambil2->fetch_assoc();
                     $idhewan = $break2['ID_Hewan'];
                     $num = (int) "$jumlah_hari";
                     $jperaw = $break['Jenis_Perawatan'];
                     $hper = $break['Harga_Perawatan'];
                     $nhewan = $break2['Nama_Hewan'];
                     $tot_biaya = $break['Harga_Perawatan'] * $num;

                   ?>
                  <tr>
                     <td><?php echo $user; ?></td>
                     <td><?php echo $break['Jenis_Perawatan']; ?></td>
                     <td>Rp <?php echo number_format($break['Harga_Perawatan']); ?></td>
                     <td><?php echo $break2['Nama_Hewan'] ?></td>
                     <td><?php echo $num; ?> Hari</td>
                     <td>Rp <?php echo number_format($tot_biaya); ?></td>
                  </tr>
                  <?php $koneksi->query("INSERT INTO transaksi(Pusername, Kode_Perawatan, Jenis_PER,
                  Biaya, ID_HEWAN, Nama_Hewan, Lama_Perawatan, Biaya_Total, Date) VALUES (
                     '$user','$kodeper','$jperaw','$hper',
                     '$idhewan','$nhewan',
                     '$num','$tot_biaya', now()
                  )");
                  ?>


               </tbody>
            </table>
         </div>
      </section>

   </body>
</html>
