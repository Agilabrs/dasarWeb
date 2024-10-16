<?php
$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES,'UTF-8');
//Memeriksa apakah input adalah email yang valid
$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email = filter_input(INPUT_POST,'email');
}else{
    echo "Inputan Tidak Valid";
}
?>