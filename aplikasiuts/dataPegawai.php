<?php
require_once 'models/Pegawai.php';
$obj = new Pegawai();
$rs = $obj->dataPegawai();
?>

<h3>Data Pegawai</h3>
<?php
if (isset($member)) {
?>
<a href="index.php?hal=formPegawai" class="btn btn-primary">Tambah</a>
</br>
<?php } ?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NIP</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Agama</th>
      <th scope="col">Divisi</th>
      <th scope="col">Foto</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $no = 1;
  foreach($rs as $peg){

  ?>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $peg['Nip']; ?></td>
      <td><?= $peg['nama']; ?></td>
      <td><?= $peg['email']; ?></td>
      <td><?= $peg['agama']; ?></td>
      <td><?= $peg['Divisi']; ?></td>
      <td><?= $peg['foto']; ?></td>
      <td>

      <form method="POST" action="controllers/pegawaiController.php">
      <a href="index.php?hal=detailPegawai&id=<?= $peg['id']; ?>" class="btn btn-info">Detail</a>
      <?php
        $role = $member['role'];
        if (isset($member)) {
        ?>
      <a href="index.php?hal=formEditPegawai&id=<?= $peg['id']; ?>" class="btn btn-warning">Edit</a>
      <?php
        if ($role != 'staff') {
        ?>
      <button name="proses" value="hapus" onclick="return confirm('Anda Yakin Akan Menghapus Data?')" class="btn btn-danger">Delete</button>
      <?php } ?>
      <input type="hidden" name="idx" value="<?= $peg['id']; ?>">
      <?php } ?>
      </form>
      </td>
    </tr>
<?php
$no++;
  }
?>  
  </tbody>
</table>