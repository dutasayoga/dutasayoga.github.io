<?php

require_once "core/init.php";
require_once "view/header.php";
if( isset($_POST['submit'])) {

	$nama = $_POST['username'];
	$pass = $_POST['password'];
	$nlengkap = $_POST['name'];
	$alamat = $_POST['Alamat'];
	$no_telp = $_POST['No_Telepon'];

	if(!empty(trim($nama)) && !empty(trim($pass)) ){
		if( register_cek_nama($nama)){
			if(register_user($nama, $pass, $nlengkap, $alamat, $no_telp)) {
				echo "<script>alert('Login Berhasil');</script>";
			} else {
				echo "<script>alert('Login Gagal');</script>";
			}
		} else {
			echo "<script>alert('Username sudah dipakai');</script>";
		}
	} else {
		echo "<script>alert('Tidak boleh kosong');</script>";
	}
}

 ?>
   <container id="registrasi_customer">
      <div id="Pendaftaran">
         <p class="header_Pendaftaran">
             <p class="header_text">DAFTAR </p>
         </p>

         <form action="Registrasi_Pelanggan.php" method="POST">
            <div class="frm">
               <p>
						<input type="text" name="username" placeholder="Masukkan username"/>
               </p>

               <p>
                  <input type="Password" name="password" placeholder="Masukkan password" />
               </p>

					<p>
						<input type="text" name="name" placeholder="Masukkan nama"/>
					</p>

               <p>
						<input type="Alamat" name="Alamat" placeholder="Masukkan Alamat" />
               </p>

               <p>
						<input type="No Telepon" name="No_Telepon" placeholder="Masukkan No Telepon" />
               </p>

               <p>
                  <input type="submit" name="submit" id="btn" value="DAFTAR" />
               </p>
            </div>
         </form>
      </div>
   </container>

<?php
require_once "view/footer.php";
?>
