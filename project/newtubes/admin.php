
 <!DOCTYPE html>
<html>
<head>
	<title>Hypet</title>
	<link rel="stylesheet" type="text/css" href="view/responsive.css">
	<meta name="viewport" content-type="width=device-width" />
</head>
<body>

<?php

require_once "core/init.php";

if( isset($_POST['submit'])) {

   $nama = $_POST['username'];
   $jpekerjaan = $_POST['jenis_pekerjaan'];
   $gender = $_POST['sex'];
   $password = $_POST['password'];

   $password = password_hash($password, PASSWORD_DEFAULT);

   if(data_pegawai($nama, $jpekerjaan, $gender, $password)) {
      echo "sukses !!!!";
   } else {
      echo "gagal";
   }
}

 ?>
 <container id="registrasi_pegawai">
      <div id="Pendaftaran_pegawai">
         <p class="header_Pendaftaran">
             <p class="header_text">DAFTAR </p>
         </p>

         <form action="admin.php" method="POST">
            <div class="frm">
               <p>
						<input type="text" name="username" placeholder="Nama Pegawai"/>
               </p>
               <p>
						<input class="male" type="radio" name="jenis_pekerjaan" value="Kurir" /> Kurir
            <input class="male" type="radio" name="jenis_pekerjaan" value="Trainer" /> Trainer
            <input class="male" type="radio" name="jenis_pekerjaan" value="Shopkeeper" /> Shopkeeper
               </p>

               <p>
                  <input class="male" type="radio" name="sex" value = "Male" /> Male
                  <input class="female" type="radio" name="sex" value = "female" />Female
               </p>
               <p>
						<input type="password" name="password" placeholder="Password" />
               </p>
               <a href="Login_Pegawai.php"> login </a>
               <p>
                  <input type="submit" name="submit" id="btn" value="DAFTAR" />
               </p>
            </div>
         </form>
      </div>
   </container>

</body>
</html>
