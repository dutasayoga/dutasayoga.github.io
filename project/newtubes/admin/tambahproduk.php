<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
      <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" />
      </div>
      <div class="form-group">
         <label>Harga</label>
         <input type="number" class="form-control" name="harga">
      </div>
      <div class="form-group">
         <label>Deskripsi</label>
         <textarea class="form-control" name="deskripsi" rows="10"></textarea>
      </div>
      <div class="form-group">
         <label>Picture</label>
         <input type="file" class="form-control" name="picture">
      </div>
      <button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
   $nama = $_FILES['picture']['name'];
   $lokasi = $_FILES['picture']['tmp_name'];
   move_uploaded_file($lokasi,"../Images/".$nama);
   $koneksi->query("INSERT INTO produk
      (nama_produk,harga_produk,pict,deskripsi_produk)
      VALUES('$_POST[nama]','$_POST[harga]','$nama','$_POST[deskripsi]')");

   echo "<div ckass=alert alert-info'>Data tersimpan</div>";
   echo "<meta http-quiv='refresh' content='1;url=index.php?halaman=produk'>";
}
?>
