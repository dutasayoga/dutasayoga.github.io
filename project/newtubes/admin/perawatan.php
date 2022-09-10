<h2>List Perawatan</h2>
<table class="table table-bordered">
   <thead>
      <tr>
         <th>Kode Perawatan</th>
         <th>Jenis Perawatan</th>
         <th>Harga Perawatan</th>
         <th>Deskripsi</th>
      </tr>
   </thead>
   <tbody>
      <?php $ambil=$koneksi->query("SELECT * FROM perawatan") ?>
      <?php while($break = $ambil->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $break['Kode_Perawatan']; ?></td>
         <td><?php echo $break['Jenis_Perawatan']; ?></td>
         <td>Rp <?php echo number_format($break['Harga_Perawatan']); ?></td>
         <td><?php echo $break['Deskripsi']; ?></td>

      </tr>
      <?php } ?>
   </tbody>
</table>
