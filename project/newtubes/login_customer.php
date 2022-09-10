<?php

require_once "core/init.php";
require_once "view/header.php";

if( isset($_POST['submit'])) {

	$nama = $_POST['username'];
	$pass = $_POST['password'];

	if(!empty(trim($nama)) && !empty(trim($pass)) ){
      if(login_cek_username($nama)) {
         if(login_customer($nama, $pass)) {
            $_SESSION['user'] = $nama;
            header('Location: index.php');
         } else {
            echo "password salah";
         }
      } else {
         echo "Username belum terdaftar";
      }
   } else {
      echo "tidak boleh kosong";
   }
}

?>
      <container id="login_container">
         <div id="login">
            <p class="header_login">
               <p class="header_text">LOGIN </p>
            </p>

            <form action="login_customer.php" method="POST">
               <div class="frm">
                  <p>
                     <input type="text" id="username" name="username" placeholder="Masukkan username"/>
                  </p>

                  <p>
                    <input type="Password" id="password" name="password" placeholder="Masukkan password" />
                  </p>

                  <p>
                     <input type="submit" name="submit" id="btn" value="Login" />
                  </p>

                  <p class="unregistered">
                     Belum punya akun ? <p>
											 <a href="Registrasi_Pelanggan.php"><input type="button" class="buttonregistrasi" value="DAFTAR"></a>
                  </p>
               </div>
            </form>

         </div>
      </container>

<?php require_once "view/footer.php"; ?>
