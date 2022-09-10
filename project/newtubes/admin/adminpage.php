<?php
$koneksi = new mysqli("localhost","root","","hypet");
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
   <?php

   session_start();

   
?>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">HyPET admin</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  &nbsp; <a href="../Login_Pegawai.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../Images/icon.jpg" class="user-image img-responsive"/>
				</li>


                  <li><a  href="adminpage.php"><i class="fa fa-dashboard fa-3x"></i> Home</a></li>
                  <li><a  href="adminpage.php?halaman=customer"><i class="fa fa-dashboard fa-3x"></i> Customer</a></li>
                  <li><a  href="adminpage.php?halaman=produk"><i class="fa fa-dashboard fa-3x"></i> Produk</a></li>
                  <li><a  href="adminpage.php?halaman=datahewan"><i class="fa fa-dashboard fa-3x"></i> Data Hewan</a></li>
                  <li><a  href="adminpage.php?halaman=perawatan"><i class="fa fa-dashboard fa-3x"></i> Perawatan</a></li>
                  <li><a  href="adminpage.php?halaman=transaksi"><i class="fa fa-dashboard fa-3x"></i> Transaksi Pemesanan</a></li>
                  <li><a  href="adminpage.php?halaman=pembelian"><i class="fa fa-dashboard fa-3x"></i> Transaksi Pembelian</a></li>
                  <li><a  href="adminpage.php?halaman=pegawai"><i class="fa fa-dashboard fa-3x"></i> Data Pegawai</a></li>
               </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
               <?php
                  if (isset($_GET['halaman']))
                  {
                     if ($_GET['halaman']=="customer")
                     {
                        include 'customer.php';
                     }
                     elseif ($_GET['halaman']=="datahewan")
                     {
                        include 'datahewan.php';
                     }
                     elseif ($_GET['halaman']=="perawatan")
                     {
                        include 'perawatan.php';
                     }
                     elseif ($_GET['halaman']=="transaksi")
                     {
                        include 'transaksi.php';
                     }
                     elseif ($_GET['halaman']=="produk")
                     {
                        include 'produk.php';
                     }
                     elseif ($_GET['halaman']=="tambahproduk")
                     {
                        include 'tambahproduk.php';
                     }
                     elseif ($_GET['halaman']=="hapusproduk")
                     {
                        include 'hapusproduk.php';
                     }
                     elseif ($_GET['halaman']=="ubahproduk")
                     {
                        include 'ubahproduk.php';
                     }
                     elseif ($_GET['halaman']=="pembelian")
                     {
                        include 'pembelian.php';
                     }
                     elseif ($_GET['halaman']=="statusProduk")
                     {
                        include 'statusProduk.php';
                     }
                     elseif ($_GET['halaman']=="statusPemesanan")
                     {
                        include 'statusPemesanan.php';
                     }
                     elseif ($_GET['halaman']=="pegawai")
                     {
                        include 'pegawai.php';
                     }

                  }
                  else
                  {
                     include 'home.php';
                  }
               ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
