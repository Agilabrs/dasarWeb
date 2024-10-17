<?php
if (isset($_POST["submit"])) {
    $targetdir = "upload/"; // direktori tujuan untuk menyimpan file
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtention = array("jpg","jpeg","png","gif");
    $maxsize = 5*1024*1024;
    if (in_array($fileType, $allowedExtention)&& $_FILES["myfile"]["size"]<=$maxsize) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            echo"File berhasil diunggah";
        } else {
            echo "Gagal mengunggah file";
        }
    }else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }    
}
?>