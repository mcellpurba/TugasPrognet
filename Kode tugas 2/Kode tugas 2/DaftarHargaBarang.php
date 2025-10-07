<?php
$harga_barang=["Pisau"  => 31000,
              "Piring" => 14500, 
              "Sendok" => 16000, 
              "Baskom" => 10000, 
              "Gelas"  => 15000];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
    <link rel="stylesheet" href="DaftarHargaBarang.css">
    <style>
          body{
              background-color:#a3b4d4;
            }
    </style>
</head>
<body>
    <h1 align="center">Daftar nama-nama barang beserta harganya</h1>
    <table align="center", border="1", width="40%">
        <tr>
            <th>Nama Barang</th> <th>Harga</th>
        </tr>
         <?php foreach($harga_barang as $nama=>$harga){
          echo "<tr align='center'><td>$nama</td><td>$harga</td></tr>";
          } ?>
    </table>
</body>
</html>
