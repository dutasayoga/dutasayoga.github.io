<h2>Data Hewan</h2>
<table class="table table-bordered">
   <thead>
      <tr>
         <th>ID Hewan</th>
         <th>Nama Hewan</th>
         <th>Jenis Hewan</th>
         <th>Warna_Hewan</th>
         <th>Berat_Badan</th>
         <th>Umur_Hewan</th>
         <th>Gender_Hewan</th>
         <th>Pemilik</th>

      </tr>
   </thead>
   <tbody>
      <?php $ambil=$koneksi->query("SELECT * FROM pet") ?>
      <?php while($break = $ambil->fetch_assoc()) { ?>
      <tr>
         <td><?php echo $break['ID_Hewan']; ?></td>
         <td><?php echo $break['Nama_Hewan']; ?></td>
         <td><?php echo $break['Jenis_Hewan']; ?></td>
         <td><?php echo $break['Warna_Hewan']; ?></td>
         <td><?php echo $break['Berat_Badan']; ?> KG</td>
         <td><?php echo $break['Umur_Hewan']; ?> Bulan</td>
         <td><?php echo $break['Gender_Hewan']; ?></td>
         <td><?php echo $break['Cusername']; ?></td>

      </tr>
      <?php } ?>
   </tbody>
</table>
