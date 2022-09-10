<h2>Data Pegawai</h2>
<table class="table table-bordered">
   <thead>
      <tr>
         <th>No</th>
         <th>ID pegawai</th>
         <th>Nama Pegawai</th>
         <th>Jenis Pegawai</th>
         <th>Gender</th>
         <th>Gaji Pegawai</th>
         <th>Alamat</th>
      </tr>
   </thead>
   <tbody>
      <?php $nomer = 1; ?>
      <?php $ambil=$koneksi->query("SELECT * FROM pegawai WHERE gaji_pegawai > 1"); ?>
      <?php while($break = $ambil->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $nomer; ?></td>
         <td><?php echo $break['ID_Pegawai']; ?></td>
         <td><?php echo $break['Nama_Pegawai']; ?></td>
         <td><?php echo $break['Jenis_Pekerjaan']; ?></td>
         <td><?php echo $break['Gender']; ?></td>
         <td>Rp <?php echo number_format($break['gaji_pegawai']); ?></td>
         <td height=50px;><?php echo $break['alamat']; ?></td>
      </tr>
      <?php $nomer++; ?>
      <?php } ?>
   </tbody>
</table>
