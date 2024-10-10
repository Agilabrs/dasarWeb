<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <script src="jquery-3.7.1.js"></script>
    </head>
    <body>
        <h2>Data Siswa</h2>
        <div id="flip">Klik untuk Efek Slide</div>
        <div id="kotak2">
            <table id="siswa-table">
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                </tr>
                <?php
                $siswa = array(
                                array("Budi", 16, "10 B", "Mojokerto"),
                                array("Ucup", 17, "11 C", "Kediri"),
                                array("Gita", 16, "10 A", "Sragen"),
                                array("Ira", 17, "11 D", "Lamongan")
                );

                $totalUmur = 0; 
                $jumlahSiswa = count($siswa); 
                
                foreach ($siswa as $data) {
                    echo "<tr>";
                    echo "<td>" . $data[0] . "</td>";
                    echo "<td>" . $data[1] . "</td>";
                    echo "<td>" . $data[2] . "</td>";
                    echo "<td>" . $data[3] . "</td>";
                    echo "</tr>";
                    
                    $totalUmur += $data[1];
                }

                $rataUmur = $totalUmur / $jumlahSiswa;
                ?>
            </table>
            <p><strong>Rata-rata Umur: </strong><?php echo round($rataUmur, 2); ?> tahun</p>
        </div>

        <script>
            $(document).ready(function () {
                $("#flip").click(function () {
                    $("#kotak2").slideDown("slow");
                });
            });
        </script>
    </body>
</html>
