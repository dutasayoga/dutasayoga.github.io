<h2>Data Produk</h2>
<table class="table table-bordered">
   <thead>
      <tr>
         <th>No</th>
         <th>ID</th>
         <th>Nama Produk</th>
         <th>Harga</th>
         <th>Picture</th>
         <th>Deskripsi </th>
         <th>aksi </th>

      </tr>
   </thead>
   <tbody>
      <?php $nomer = 1; ?>

      <?php $ambil=$koneksi->query("SELECT * FROM produk") ?>
      <?php while($break = $ambil->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $nomer; ?></td>
         <td><?php echo $break['id_produk']; ?></td>
         <td><?php echo $break['nama_produk']; ?></td>
         <td><?php echo $break['harga_produk']; ?></td>
         <td>
            <img src="../Images/<?php echo $break['pict']; ?>" width="100" height="100">
         </td>
         <td><?php echo $break['deskripsi_produk']; ?></td>
         <td>
            <a href="adminpage.php?halaman=hapusproduk&id=<?php echo $break['id_produk']; ?>"
                class="btn-danger btn">hapus</a>
            <a href="adminpage.php?halaman=ubahproduk&id=<?php echo $break['id_produk']; ?>"
               class="btn btn-warning">ubah</a>
         </td>
      </tr>
      <?php $nomer++; ?>
      <?php } ?>
   </tbody>
</table>
<a href="adminpage.php?halaman=tambahproduk" class="btn btn-primary">Tambah Produk</a>
