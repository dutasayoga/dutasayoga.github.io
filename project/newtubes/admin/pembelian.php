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
         <th>SDeliv</th>
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
