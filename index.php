<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     $mahasiswa = [
        [
            "nama" => "Alvin",
            "nim" => "123",
            "jurusan" => "Teknik Informatika",
            "email" => "alvin@gmail.com",
            "nilai"=> 95,
        ],
        [
            "nama" => "Christoper",
            "nim" => "234",
            "jurusan" => "Teknik Informatika",
            "email" => "christoper@gmail.com",
            "nilai"=> 50,
        ],
        [
            "nama" => "Sebayang",
            "nim" => "1234563",
            "jurusan" => "Teknik Informatika",
            "email" => "sebayang@gmail.com",
            "nilai"=> 80,
        ],
    ];
    
?>
<!-- PHP END -->
<h2 style="text-align:center;">Data Mahasiswa</h2>
<table style="width: 100%; border: 1px solid black">
    <tr style="text-align: left; ">
        <th style="border: 1px solid black">Nama</th>
        <th style="border: 1px solid black">NIM</th>
        <th style="border: 1px solid black">Jurusan</th>
        <th style="border: 1px solid black">Email</th>
        <th style="border: 1px solid black">Nilai</th>
        <th style="border: 1px solid black">Status</th>
    </tr>
    <?php
        foreach ($mahasiswa as $mhs){
            echo "<tr>";
                echo" <td style='border: 1px solid black'>";
                echo "<br>{$mhs['nama']}";
                echo "</td>";
                echo" <td style='border: 1px solid black'>";
                echo "<br>{$mhs['nim']}";
                echo "</td>";
                echo "<td style='border: 1px solid black'>";
                echo "<br>{$mhs['jurusan']}";
                echo "</td>";
                echo "<td style='border: 1px solid black'>";
                echo "<br>{$mhs['email']}";
                echo "</td>";
                echo "<td style='border: 1px solid black'>";
                echo "<br>{$mhs['nilai']}";
                echo "</td>";

                if ($mhs['nilai'] >= 80) {
                    echo "<td>Lulus</td>";
                }
                else{
                    echo "<td>Tidak lulus</td>";
                }
            echo "</tr>";
                } 
            ?>
    
</table>
</body>
</html>