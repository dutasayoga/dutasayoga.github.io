<h2>Data Transaksi Penitipan Hewan</h2>

<table class="table table-bordered">
   <thead>
      <tr>
         <th>No</th>
         <th>ID</th>
         <th>Username</th>
         <th>Jenis Perawatan</th>
         <th>Biaya</th>
         <th>ID_Hewan</th>
         <th>Jenis </th>
         <th>Nama Hewan</th>
         <th>Lama Perawatan</th>
         <th>Biaya total</th>
         <th>Date</th>
         <th>Status</th>
         <th>SDeliv</th>
         <th>STrainer</th>
         <th>Aksi</th>

      </tr>
   </thead>
   <tbody>
      <?php $nomer = 1; ?>
      <?php $ambil=$koneksi->query("SELECT * FROM transaksi INNER JOIN pet ON pet.ID_Hewan = transaksi.ID_HEWAN") ?>
      <?php while($break = $ambil->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $nomer; ?></td>
         <td><?php echo $break['Kode_Transaksi']; ?></td>
         <td><?php echo $break['Pusername']; ?></td>
         <td><?php echo $break['Jenis_PER']; ?></td>
         <td>Rp <?php echo number_format($break['Biaya']); ?></td>
         <td><?php echo $break['ID_HEWAN']; ?></td>
         <td><?php echo $break['Jenis_Hewan']; ?></td>
         <td><?php echo $break['Nama_Hewan']; ?></td>
         <td><?php echo $break['Lama_Perawatan']; ?> Hari</td>
         <td>Rp <?php echo number_format($break['Biaya_Total']); ?></td>
         <td><?php echo $break['Date']; ?></td>
         <td><?php echo $break['Status']; ?></td>
         <td><?php echo $break['Sdelivery']; ?></td>
         <td><?php echo $break['Strainer']; ?></td>
         <td>
            <a href="adminpage.php?halaman=statusPemesanan&id=<?php echo $break['Kode_Transaksi']; ?>" class="btn-danger btn">Selesei</a>
         </td>
      </tr>
      <?php $nomer++; ?>
      <?php } ?>
   </tbody>
</table>
