<h2>Data Penitipan Hewan</h2>

<table class="table table-bordered">
   <thead>
      <tr>
         <th>No</th>
         <th>ID Transaksi</th>
         <th>username</th>
         <th>ID hewan</th>
         <th>Nama Hewan</th>
         <th>Jenis Hewan</th>
         <th>Date</th>
         <th>Status</th>
         <th>Aksi</th>

      </tr>
   </thead>
   <tbody>
      <?php $nomer = 1; ?>
      <?php $ambil=$koneksi->query("SELECT * FROM transaksi INNER JOIN pet ON pet.ID_Hewan = transaksi.ID_HEWAN"); ?>
      <?php while($break = $ambil->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $nomer; ?></td>
         <td><?php echo $break['Kode_Transaksi']; ?></td>
         <td><?php echo $break['Pusername']; ?></td>
         <td><?php echo $break['ID_HEWAN']; ?></td>
         <td><?php echo $break['Nama_Hewan']; ?></td>
         <td><?php echo $break['Jenis_Hewan']; ?></td>
         <td><?php echo $break['Date']; ?></td>
         <td><?php echo $break['Strainer']; ?></td>
         <td>
            <a href="adminpage.php?halaman=statustrainer&id=<?php echo $break['Kode_Transaksi']; ?>" class="btn-danger btn">Selesai</a>
         </td>
      </tr>
      <?php $nomer++; ?>
      <?php } ?>
   </tbody>
</table>
