<?php
require_once "core/init.php";

if( !isset($_SESSION['user'])) {
   header('location: login_customer.php');
}

if( isset($_POST['submit'])) {

   $nama_hewan = $_POST['username'];
   $jenis_hewan = $_POST['jenis'];
   $warna_hewan = $_POST['warna'];
   $berat_hewan = $_POST['berat'];
   $umur_hewan = $_POST['umur'];
   $gender_hewan = $_POST['sex'];
   $id = $_SESSION['user'];

   //id_pet($namapemesan);
   if(data_hewan($nama_hewan, $jenis_hewan, $warna_hewan, $berat_hewan, $umur_hewan, $gender_hewan, $id)) {
      $last_id_pet = mysqli_insert_id($link);
      $_SESSION['hewan'] = $last_id_pet;
      header('location: main_reserve.php');
   } else {
      echo "failed";
   }
}

?>
<!DOCTYPE html>
<html>
    <head>

        <title>Keranjang Belanja</title>
        <link rel="stylesheet" href="view/responsive.css">
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
      <container id="main_reserve">
         <div id="resev">
            <p class="header_login">
               <p class="header_text">R E S E R V E </p>
            </p>

            <form action="mainReserve.php" method="POST">
               <div class="frm">
                  <p>
                     <input type="text" id="username" name="username" placeholder="Masukkan nama hewan"/>
                  </p>

                  <p>
                    <input type="text" id="password" name="jenis" placeholder="Masukkan Jenis Hewan" />
                  </p>

                  <p>
                    <input type="text" id="password" name="warna" placeholder="Masukkan Warna hewan" />
                  </p>

                  <p>
                    <input type="text" id="password" name="berat" placeholder="Masukkan berat Hewan" />
                  </p>

                  <p>
                    <input type="text" id="password" name="umur" placeholder="Masukkan umur Hewan" />
                  </p>

                  <p>
                    <select class="petSexChoice" name="sex">
                      <option value="Jantan">Jantan</option>
                      <option value="Betina">Betina</option>
                    </select>
                  </p>

                  <p>
                     <input type="submit" name="submit" id="btn" value="Lanjutkan" />
                  </p>

               </div>
            </form>

         </div>
      </container>

<?php require_once "view/footer.php"; ?>
