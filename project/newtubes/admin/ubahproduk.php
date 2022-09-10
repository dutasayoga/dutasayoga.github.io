<h2>Ubah Produk</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$break = $ambil->fetch_assoc();

 ?>

 <form method="post" enctype="multipart/form-data">
       <div class="form-group">
             <label>Nama Produk</label>
             <input type="text" name="nama" class="form-control" value="<?php echo $break
             ['nama_produk']; ?>">
       </div>
       <div class="form-group">
             <label>Harga</label>
             <input type="number" name="harga" class="form-control" value="<?php echo $break
             ['harga_produk']; ?>">
       </div>

       <div class="form-group">
          <img src="../Images/<?php echo $break ['pict'] ?>" width="200">
       </div>
       <div class="form-group">
             <label>Ganti Gambar</label>
             <input type="file" name="foto" class="form-control">
       </div>
       <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="10">
                <?php echo $break['deskripsi_produk']; ?>
            </textarea>
       </div>
       <button class="btn btn-primary" name="ubah">Ubah</button>
</form>
<?php
if (isset($_POST['ubah']))
{
      $namafoto = $_FILES['foto']['name'];
      $lokasifoto = $_FILES['foto']['tmp_name'];
      if (!empty($lokasifoto))
         {
            move_uploaded_file($lokasifoto, "../Images/$namafoto");

            $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',
               harga_produk='$_POST[harga]',deskripsi_produk='$_POST[deskripsi]',
               pict='$namafoto'
               WHERE id_produk='$_GET[id]'");
         }
         else
         {
            $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',
            harga_produk='$_POST[harga]',deskripsi_produk='$_POST[deskripsi]'
            WHERE id_produk='$_GET[id]'");
         }
         echo "<script>alert('Data produk telah diubah');</script>";
         echo "<script>location='adminpage.php?halaman=produk';</script>";

}

 ?>
