<?php
require_once "class_persegipanjang.php";
$persegiPanjang = new Persegipanjang(10,5);

echo "<br>Luas Persegi Panjang = " . $persegiPanjang->getLuas();
echo "<br>Keliling Persegi Panjang = " . $persegiPanjang->getKeliling();
?>