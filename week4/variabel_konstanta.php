<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.<br>"; // added a line break for better formatting

$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah: $salah<br>"; // fixed typo: $bener -> $benar

// Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "Websiteku.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".<br>"; // added concatenation for better string formatting
?>