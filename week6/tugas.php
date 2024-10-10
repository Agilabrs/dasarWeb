<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <h2>Data Mahasiswa Array Multidimiensi</h2>
    <?php
    $mhs = array (
        array("Dina", 123456, "Teknik Kimia", "dina@gmail.com"),
        array("Dino", 9123124, "Teknik Listrik", "dino@gmail.com")
    );
    ?>
    <ul>
        <?php 
        foreach ($mhs as $mahasiswa) {
                echo "<li>" . $mahasiswa[0] . "</li>";
                echo "<li>" . $mahasiswa[1] . "</li>";
                echo "<li>" . $mahasiswa[2] . "</li>";
                echo "<li>" . $mahasiswa[3] . "</li>";
                echo "<br>";
        }
        ?>
    </ul>
</body>
</html>