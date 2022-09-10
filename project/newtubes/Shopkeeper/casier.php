<h2>Selamat datang <?php $admin = $_SESSION['admin']; echo "$admin";?></h2>

<h2>Data Transaksi Pembelian Produk</h2>
<table class="table table-bordered">
   <thead>
      <tr>
         <th>No</th>
         <th>ID pembelian</th>
         <th>username</th>
         <th>ID produk</th>
         <th>Nama produk</th>
         <th>Harga</th>
         <th>Total</th>
         <th>Total Harga</th>
         <th>Date</th>
         <th>Status</th>
         <th>Sdeliv</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
      <?php $nomer = 1; ?>
      <?php $ambil=$koneksi->query("SELECT * FROM pembelian INNER JOIN produk ON produk.id_produk = pembelian.id_produk"); ?>
      <?php while($break = $ambil->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $nomer; ?></td>
         <td><?php echo $break['id_pembelian']; ?></td>
         <td><?php echo $break['username']; ?></td>
         <td><?php echo $break['id_produk']; ?></td>
         <td><?php echo $break['nama_produk']; ?></td>
         <td>Rp <?php echo number_format($break['harga_produk']); ?></td>
         <td><?php echo $break['total_produk']; ?></td>
         <td>Rp <?php echo number_format($break['total_harga']); ?></td>
         <td><?php echo $break['Date']; ?></td>

         <td><?php echo $break['Status']; ?></td>
         <td><?php echo $break['Sdelivery']; ?></td>
         <td>
            <a href="adminpage.php?halaman=statusProduk&id=<?php echo $break['id_pembelian']; ?>" class="btn-danger btn">Selesei</a>
         </td>
      </tr>
      <?php $nomer++; ?>
      <?php } ?>
   </tbody>
</table>
<br>
<br>
<h2>Data Transaksi Penitipan Hewan</h2>

<table class="table table-bordered">
   <thead>
      <tr>
         <th>No</th>
         <th>ID Pemesanan</th>
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
         <th>Sdeliv</th>
         <th>Strainer</th>
         <th>aksi</th>
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
