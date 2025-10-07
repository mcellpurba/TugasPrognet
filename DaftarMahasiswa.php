<?php
$nama_mahasiswa= [2305551048 =>"Marcellino",
                  2305551105 => "Elroy",
                  2305551109 => "Chalimus",
                  2305551138 => "Anthony",
                  2305551053 => "Adi"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="DaftarMahasiswa.css">
    <style>
        body{
             background-color: #A5CAD2;
            }

        table{
             position: relative;
             top: 50px;
            }
    </style>
</head>
<body>
    <h1 align="center">Berikut nama-nama Mahasiswa</h1>

    <table align="center", border="1", width="50%">
     <tr>
         <th> <?= "Nim" ?> </th>
         <th>Nama</th>
     </tr>
          <?php foreach($nama_mahasiswa as $nama=>$nim){
          echo "<tr align='center'><td>$nama</td><td>$nim</td></tr>";
          } ?>
    </table>

</body>
</html>