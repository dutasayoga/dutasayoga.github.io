<h2>Data Customer</h2>

<table class="table table-bordered">
   <thead>
      <tr>
         <th>No</th>
         <th>Username</th>
         <th>Nama</th>
         <th>Alamat</th>
         <th>NO telepon</th>
      </tr>
   </thead>
   <tbody>
      <?php $nomor = 1; ?>
      <?php $ambil=$koneksi->query("SELECT * FROM customer") ?>
      <?php while($break = $ambil->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $nomor; ?></td>
         <td><?php echo $break['username']; ?></td>
         <td><?php echo $break['Nama']; ?></td>
         <td><?php echo $break['Alamat']; ?></td>
         <td><?php echo $break['Telepon']; ?></td>
      </tr>
      <?php $nomor++; ?>
      <?php } ?>
   </tbody>
</table>
