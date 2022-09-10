<!DOCTYPE html>
<html>
<head>
	<title>Pegawai | HyPET</title>
	<link rel="stylesheet" type="text/css" href="view/responsive.css">
	<meta name="viewport" content-type="width=device-width" />
</head>
<body>

<?php

require_once "core/init.php";

if( isset($_POST['submit'])) {

   $nama = $_POST['username'];
   $password = $_POST['password'];
	 $jpekerjaan = $_POST['jenis_pekerjaan'];

if(!empty(trim($nama)) && !empty(trim($password)) ){
   if(login_cek_pegawai($nama)) {
      if(login_pegawai($nama, $password)) {
			$_SESSION['admin'] = $nama;
			if($jpekerjaan == "Trainer") {
					header('Location: Trainer/adminpage.php');
					}	elseif($jpekerjaan == "Kurir") {
					header('Location: Kurir/adminpage.php');
					} elseif($jpekerjaan == "Shopkeeper") {
					header('Location: Shopkeeper/adminpage.php');
					}
      }  elseif($nama == "Admin" && $password == "Admin") {
				header('Location: admin/adminpage.php');
      } else {
          echo "<script>alert('Password salah !');</script>";
      }
    } else {
      echo "<script>alert('Belum terdaftar');</script>";
   }
} else {
	echo "<script>alert('Massukan ID dan Password');</script>";
}
}




?>
     <container id="login_container">
         <div id="login">
            <p class="header_login">
               <p class="header_text">LOGIN </p>
            </p>

            <form action="Login_Pegawai.php" method="POST">
               <div class="frm">
                  <p>
                     <input type="text" id="username" name="username" placeholder="Massukan ID Pegawai"/>
                  </p>

                  <p>
                    <input type="Password" id="password" name="password" placeholder="Masukkan password" />
                  </p>
									<p>
										<select class="jobOption" name="jenis_pekerjaan">
											<option name ="jenis_pekerjaan" value="Kurir">Kurir</option>
											<option name ="jenis_pekerjaan" value="Trainer">Trainer</option>
											<option name ="jenis_pekerjaan" value="Shopkeeper">Shopkeeper</option>
										</select>

									</p>
                  <p>
                     <input type="submit" name="submit" id="btn" value="Login" />
                  </p>

               </div>
            </form>

         </div>
      </container>
</body>
</html>
