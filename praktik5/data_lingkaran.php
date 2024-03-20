<?php
require_once('class_lingkaran.php');
echo "Nilai PHI: " . Lingkaran::PHI;

// instansiasi object Lingkaran
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(8);

// Panggil method
echo "<br> Luas Lingkaran 1: " . $lingkar1->getLuas();
echo "<br> Luas Lingkaran 2: " . $lingkar2->getLuas(); 

// Panggil method
echo "<br> Keliling Lingkaran 1: " . $lingkar1->getKeliling();
echo "<br> Keliling Lingkaran 2: " . $lingkar2->getKeliling(); 