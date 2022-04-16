<?php
require_once 'class_mahasiswa.php';

$mahasiswa1 = new Mahasiswa('01101', 'Faiz Fikri');
$mahasiswa1->prodi = 'TI';
$mahasiswa1->thn_angkatan = 2011;
$mahasiswa1->ipk = 3.8;

$mahasiswa2 = new Mahasiswa('01102', 'Yanti');
$mahasiswa2->prodi = 'SI';
$mahasiswa2->thn_angkatan = 2012;
$mahasiswa2->ipk = 2.5;

$mahasiswa3 = new Mahasiswa('01103', 'Yanto');
$mahasiswa3->prodi = 'TI';
$mahasiswa3->thn_angkatan = 2013;
$mahasiswa3->ipk = 3.12;

$mahasiswa4 = new Mahasiswa('01104', 'Yatno');
$mahasiswa4->prodi = 'Bisnis Digital';
$mahasiswa4->thn_angkatan = 2022;
$mahasiswa4->ipk = 3.9;

$data_mahasiswa = [
    $mahasiswa1,
    $mahasiswa2,
    $mahasiswa3,
    $mahasiswa4,
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <table width="100%" border="1">
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Tahun Angkatan</th>
            <th>IPK</th>
            <th>Predikat IPK</th>
        </tr>
        <?php
        foreach ($data_mahasiswa as $key => $value) {
        ?>
        <tr>
            <td><?=$key+1?></td>
            <td><?=$value->nim?></td>
            <td><?=$value->nama?></td>
            <td><?=$value->prodi?></td>
            <td><?=$value->thn_angkatan?></td>
            <td><?=$value->ipk?></td>
            <td><?=$value->predikat_ipk()?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
