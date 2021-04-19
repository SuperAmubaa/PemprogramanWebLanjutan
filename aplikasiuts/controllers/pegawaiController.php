<?php
require_once '../koneksi.php';
require_once '../models/Pegawai.php';

//tangkap request element form
$Nip = $_POST['Nip'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$agama = $_POST['agama'];
$iddivisi = $_POST['divisi'];
$foto = $_POST['foto'];
$button = $_POST['proses'];

//menyimpan data ke sebuah array
$data = [
    $Nip, // ? 1
    $nama, // ? 2
    $email, // ? 3
    $agama, // ? 4
    $iddivisi, // ? 5
    $foto // ? 6
];

//menciptakan object
$obj = new Pegawai();
switch ($button) {
    case 'simpan':
        $obj->simpan($data);
        break;

    case 'ubah':
      
        $data[] = $_POST['idx'];
        $obj->ubah($data);
        break;

    case 'hapus':
       
        $id[] = $_POST['idx'];
        $obj->hapus($id);
        break;

    default:
        header('location:http://localhost/aplikasiuts/index.php?hal=dataPegawai');
        break;
}

//landing page
header('location:http://localhost/aplikasiuts/index.php?hal=dataPegawai');