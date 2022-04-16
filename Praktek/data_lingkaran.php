<?php
require_once 'class_lingkaran.php';

echo Lingkaran::PHI;

echo '<br><br>';

$lingkaran1 = new Lingkaran(10);
$lingkaran2 = new Lingkaran(7);

echo "Luas lingkaran 1 : " . $lingkaran1->hitungLuas();
echo '<br>';
echo "Luas lingkaran 2 : " . $lingkaran2->hitungLuas();

echo '<br><br>';

echo "Keliling lingkaran 1 : " . $lingkaran1->hitungKeliling();
echo '<br>';
echo "Keliling lingkaran 2 : " . $lingkaran2->hitungKeliling();