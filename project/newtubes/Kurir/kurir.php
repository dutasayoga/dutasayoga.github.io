<h2>Selamat datang <?php $admin = $_SESSION['admin']; echo "$admin";?></h2>

<h2>Data Delivery</h2>
<br>
<br>
<h2>Data Penitipan Hewan</h2>

<table class="table table-bordered">
   <thead>
      <tr>
         <th>No</th>
         <th>ID Transaksi</th>
         <th>username</th>
         <th>nama penerima</th>
         <th>no telepon</th>
         <th>Alamat</th>
         <th>ID hewan</th>
         <th>Nama Hewan</th>
         <th>Biaya total</th>
         <th>Date</th>
         <th>Status</th>
         <th>Aksi</th>

      </tr>
   </thead>
   <tbody>
      <?php $nomer = 1; ?>
      <?php $ambil=$koneksi->query("SELECT * FROM transaksi INNER JOIN customer ON transaksi.Pusername = customer.username"); ?>
      <?php while($break = $ambil->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $nomer; ?></td>
         <td><?php echo $break['Kode_Transaksi']; ?></td>
         <td><?php echo $break['Pusername']; ?></td>
         <td><?php echo $break['Nama']; ?></td>
         <td><?php echo $break['Telepon']; ?></td>
         <td><?php echo $break['Alamat']; ?></td>
         <td><?php echo $break['ID_HEWAN']; ?></td>
         <td><?php echo $break['Nama_Hewan']; ?></td>
         <td>Rp <?php echo number_format($break['Biaya_Total']); ?></td>
         <td><?php echo $break['Date']; ?></td>
         <td><?php echo $break['Sdelivery']; ?></td>
         <td>
            <a href="adminpage.php?halaman=statusPemesanan&id=<?php echo $break['Kode_Transaksi']; ?>" class="btn-danger btn">Selesei</a>
         </td>
      </tr>
      <?php $nomer++; ?>
      <?php } ?>
   </tbody>
</table>
<br>
<h2>Data barang</h2>

<table class="table table-bordered">
   <thead>
      <tr>
         <th>No</th>
         <th>ID Pembelian</th>
         <th>username</th>
         <th>nama penerima</th>
         <th>no telepon</th>
         <th>Alamat</th>
         <th>ID Product</th>
         <th>jumlah Produk</th>
         <th>Biaya total</th>
         <th>Date</th>
         <th>Status</th>
         <th>Aksi</th>

      </tr>
   </thead>
   <tbody>
      <?php $nomer = 1; ?>
      <?php $ambil=$koneksi->query("SELECT * FROM pembelian INNER JOIN customer ON pembelian.username = customer.username"); ?>
      <?php while($break = $ambil->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $nomer; ?></td>
         <td><?php echo $break['id_pembelian']; ?></td>
         <td><?php echo $break['username']; ?></td>
         <td><?php echo $break['Nama']; ?></td>
         <td><?php echo $break['Telepon']; ?></td>
         <td><?php echo $break['Alamat']; ?></td>
         <td><?php echo $break['id_produk']; ?></td>
         <td><?php echo $break['total_produk']; ?></td>
         <td>Rp <?php echo number_format($break['total_harga']); ?></td>
         <td><?php echo $break['Date']; ?></td>
         <td><?php echo $break['Sdelivery']; ?></td>
         <td>
           <a href="adminpage.php?halaman=statusProduk&id=<?php echo $break['id_pembelian']; ?>" class="btn-danger btn">Selesei</a>
         </td>
      </tr>
      <?php $nomer++; ?>
      <?php } ?>
   </tbody>
</table>
