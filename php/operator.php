<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisabagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

$hasilIdentik = $a === $b;
$hasilTakIdentik = $a !== $b;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Penambahan: {$hasilTambah} <br>";
echo "Pengurangan: {$hasilKurang} <br>";
echo "Perkalian: {$hasilKali} <br>";
echo "Pembagian: {$hasilBagi} <br>";
echo "Sisa Bagi: {$sisabagi} <br>";
echo "Perpangkatan: {$pangkat} <br>";

echo "Persamaan: {$hasilSama} <br>";
echo "Pertidaksamaan: {$hasilTidakSama} <br>";
echo "Kurang dari: {$hasilLebihKecil} <br>";
echo "Lebih dari: {$hasilLebihBesar} <br>";
echo "Kurang dari sama: {$hasilLebihKecilSama} <br>";
echo "Lebih dari sama: {$hasilLebihBesarSama} <br>";

echo "AND : {$hasilAnd} <br>";
echo "OR: {$hasilOr} <br>";
echo "NOT A: {$hasilNotA} <br>";
echo "NOT B: {$hasilNotB} <br>";

echo "A += B: {$a} <br>";
echo "A -= B: {$a} <br>";
echo "A *= B: {$a} <br>";
echo "A /= B: {$a} <br>";
echo "A %= B: {$a} <br>";

echo "Indentik: {$hasilIdentik} <br>";
echo "Tak indentik: {$hasilTakIdentik} <br>";
?>