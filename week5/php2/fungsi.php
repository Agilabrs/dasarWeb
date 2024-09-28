<?php
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;

}
function perkenalan($nama, $salam = "Assalamualaikum"){
    echo $salam .", ";
    echo " perkenalkan nama saya " .$nama. "<br/>";
    echo "senang berkenalan dengan anda <br/>";

    //memanggil fungsi lain
    echo"Saya berusia ". hitungUmur(1998,2023). " tahun<br/>";
    echo "Senang berkenalan dengan anda";
}
perkenalan("Nabeel");
echo "<br><hr>";


echo"Umur saya adalah ". hitungUmur(2005,2024) ." tahun";
echo "<br><hr>";

perkenalan("Hamdana", "halo");
echo ("<hr>");

$saya = "Nabeel";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya,"$ucapanSalam");
echo ("<hr>");

perkenalan($saya);

?>