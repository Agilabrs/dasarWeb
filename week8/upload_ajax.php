<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $extensions = array("png", "jpg", "jpeg", "gif");
    $total_files = count($_FILES['files']['name']);
    
    for ($i = 0; $i < $total_files; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        
        if (!in_array($file_ext, $extensions)) {
            $errors[] = "File '$file_name' memiliki ekstensi yang tidak diizinkan. Hanya PNG, JPG, JPEG, dan GIF yang diizinkan.";
        }

        if ($file_size > 2097152) {
            $errors[] = "File '$file_name' melebihi ukuran maksimum 2 MB.";
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "<br>File " . $file_name . " berhasil diunggah.";
        }
    }

    if (empty($errors)) {
        echo "<br><br>Semua file berhasil diunggah.";
    } else {
        echo implode("<br>", $errors);
    }
}
?>