<?php
$pattern = '/[a-z]/'; //cocokkan huruf kecil
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
}else{
    echo "Tidak ada huruf kecil!";
}
$pattern = '/[0-9]+/'; //cocokkan satu atau lebih digit
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: ".$matches[0];
}else{
    echo "Tidak ada yang cocok!";
}
'<br>';
$pattern = '/[apple]/'; 
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;
$pattern = '/[go*d]/'; //cocokkan "god", "good", dll
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: ". $matches[0];
}else{
    echo "Tidak ada yang cocok!";
}
?>