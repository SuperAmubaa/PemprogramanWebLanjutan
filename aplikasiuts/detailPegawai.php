<?php
require_once 'models/Pegawai.php';
//tangkap id di url
$id = $_REQUEST['id'];
$obj = new Pegawai();
$rs = $obj->getPegawai($id);
?>

<div class="card" style="width: 22rem;">
    <?php
    $gambar = (!empty($rs['foto'])) ? $rs['foto'] : "people.jpg";
    ?>
    <img src="images/<?= $gambar ?>" width="40%" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title"><?= $rs['nama'] ?></h5>
        <p class="card-text">
            NIP : <?= $rs['Nip'] ?>
            <br />Email : <?= $rs['email'] ?>
            <br />Agama : <?= $rs['agama'] ?>
            <br />Divisi: <?= $rs['Divisi'] ?>
        </p>
        <a href="index.php?hal=dataPegawai" class="btn btn-primary">Back</a>
    </div>
</div>