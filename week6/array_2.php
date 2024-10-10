<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABEL</title>
    <style>
        table,th,td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        table{
            background-color: white;
        }
        th{
            width: 500px;
            background-color: yellow;
        }
    </style>
</head>
<body>
    <center>
    <h2>DATA DOSEN POLINEMA</h2>
    </center>
    
    <?php
    $dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili'=> 'Malang',
        'jenis_kelamin'=> 'Perempuan',
    ];
    ?>
    <table>
        <tr>
            <th>Nama</th>
            <th>Domisili</th>
            <th>Jenis Kelamin</th>
        </tr>
        <tr>
            <td><?php echo"$dosen[nama]";  ?></td>
            <td><?php echo"$dosen[domisili]";  ?></td>
            <td><?php echo"$dosen[jenis_kelamin]";  ?></td>
        </tr>
    </table>
</body>
</html>