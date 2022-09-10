<?php

function register_user($nama, $pass, $nlengkap, $alamat, $no_telp){

   global $link;

   $nama = mysqli_real_escape_string($link, $nama);
   $pass = mysqli_real_escape_string($link, $pass);
   $nlengkap = mysqli_real_escape_string($link, $nlengkap);
   $alamat = mysqli_real_escape_string($link, $alamat);
   $no_telp = mysqli_real_escape_string($link, $no_telp);

   $pass = password_hash($pass, PASSWORD_DEFAULT);
   $query = "INSERT INTO customer(username, Password, Nama, Alamat, Telepon) VALUES ('$nama', '$pass', '$nlengkap', '$alamat', '$no_telp')";

   if( mysqli_query($link, $query)) {
      return true;
   } else {
      return false;
   }

}

function register_cek_nama($nama) {
   global $link;
   $nama = mysqli_real_escape_string($link, $nama);

   $query = "SELECT * FROM customer WHERE username = '$nama'";

   if( $result = mysqli_query($link, $query) ) {
      if(mysqli_num_rows($result) == 0) return true;
      else return false;
   }
}

function login_customer($nama, $pass) {

   global $link;

   $nama = mysqli_real_escape_string($link, $nama);
   $pass = mysqli_real_escape_string($link, $pass);

   $query = "SELECT Password FROM customer WHERE username = '$nama'";
   $result = mysqli_query($link, $query);
   $hash = mysqli_fetch_assoc($result)['Password'];

   if (password_verify($pass, $hash)) {
      return true;
   } else {
      return false;
   }
}

function login_cek_username($nama) {
   global $link;
   $nama = mysqli_real_escape_string($link, $nama);

   $query = "SELECT * FROM customer WHERE username = '$nama'";

   if( $result = mysqli_query($link, $query) ) {
      if(mysqli_num_rows($result) != 0) return true;
      else return false;
   }
}

function data_pegawai($nama, $jpekerjaan, $gender, $password) {
   global $link;
   $nama = mysqli_real_escape_string($link, $nama);
   $jpekerjaan = mysqli_real_escape_string($link, $jpekerjaan);
   $gender = mysqli_real_escape_string($link, $gender);
   $password = mysqli_real_escape_string($link, $password);

   $query = "INSERT INTO pegawai(Nama_Pegawai, Jenis_Pekerjaan, Gender, Password) VALUES ('$nama', '$jpekerjaan', '$gender', '$password')";
   if( mysqli_query($link, $query)) {
      return true;
   } else {
      return false;
   }
}

function login_pegawai($nama, $password) {
   global $link;

   $nama = mysqli_real_escape_string($link, $nama);
   $password = mysqli_real_escape_string($link, $password);

   $query = "SELECT Password FROM pegawai WHERE Nama_Pegawai = '$nama'";

   $result = mysqli_query($link, $query);
   $hash = mysqli_fetch_assoc($result)['Password'];

   if (password_verify($password, $hash)) {
      return true;
   } else {
      return false;
   }
}

function login_cek_pegawai($nama) {
   global $link;
   $nama = mysqli_real_escape_string($link, $nama);

   $query = "SELECT * FROM pegawai WHERE Nama_Pegawai = '$nama'";

   if( $result = mysqli_query($link, $query) ) {
      if(mysqli_num_rows($result) != 0) return true;
      else return false;
   }
}

function data_hewan($nama_hewan, $jenis_hewan, $warna_hewan, $berat_hewan, $umur_hewan, $gender_hewan, $id) {
   global $link;
   $nama_hewan = mysqli_real_escape_string($link, $nama_hewan);
   $jenis_hewan = mysqli_real_escape_string($link, $jenis_hewan);
   $warna_hewan = mysqli_real_escape_string($link, $warna_hewan);
   $berat_hewan = mysqli_real_escape_string($link, $berat_hewan);
   $umur_hewan = mysqli_real_escape_string($link, $umur_hewan);
   $gender_hewan = mysqli_real_escape_string($link, $gender_hewan);
   $id = mysqli_real_escape_string($link, $id);


   $query = "INSERT INTO pet(Nama_Hewan, Jenis_Hewan, Warna_Hewan, Berat_Badan, Umur_Hewan, Gender_Hewan, Cusername)
            VALUES ('$nama_hewan', '$jenis_hewan', '$warna_hewan', '$berat_hewan', '$umur_hewan', '$gender_hewan', '$id') ";
   var_dump($query);
   if( mysqli_query($link, $query)) {
         return true;

      } else {
         return false;
      }
}

?>
