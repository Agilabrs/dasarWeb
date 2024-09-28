<?php
for ($i=1; $i <=25 ; $i++) { 
    echo "Perulangan ke-{$i} <br>";
}
function tampilAngka(int $jumlah, int $indeks =1){
    echo"Perulangan ke indeks {$indeks} <br>";

    if ($indeks < $jumlah) {
        tampilAngka($jumlah, $indeks + 1);
    }
}
tampilAngka(20);

function tampilkanHaloDunia(){
    echo"Halo Dunia!";

}

tampilkanHaloDunia();
?>