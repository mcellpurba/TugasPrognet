//Soal no 5 array dimensi//

<?php
    $Mahasiswa=[
        ["nim"=> 2305551048, "nama"=> "Marcellino Elrobson", "umur" => 20, "prodi"=> "Teknologi Informasi"],
        ["nim"=> 2305551171, "nama"=> "Azka Ilham Ramadhani", "umur" => 21, "prodi"=> "Teknologi Informasi"],
        ["nim"=> 2305551050, "nama"=> "I Kadek Agus Widiantara", "umur" => 21, "prodi"=> "Teknologi Informasi"],
        ["nim"=> 2305551122, "nama"=> "Putu Satria Arya Putra", "umur" => 20, "prodi"=> "Teknologi Informasi"],
        ["nim"=> 2305551138, "nama"=> "Anthony Wisnu Jati", "umur" => 20, "prodi"=> "Teknologi Informasi"],
        ["nim"=> 2305551053, "nama"=> "I Kadek Adi Sunetra", "umur" => 20, "prodi"=> "Teknologi Informasi"],
        ["nim"=> 2305551109, "nama"=> "Chalimus Candra Daniswara Wisam Prakoso", "umur" => 21, "prodi"=> "Teknologi Informasi"],
        ["nim"=> 2305551121, "nama"=> "I Dewa Ketut Cakra Wibawa Diputra", "umur" => 20, "prodi"=> "Teknologi Informasi"],
        ["nim"=> 2305551028, "nama"=> "I Putu Okta Raditya Putra", "umur" => 21, "prodi"=> "Teknologi Informasi"],
        ["nim"=> 2305551076, "nama"=> "Ravi Arnan Irianto", "umur" => 21, "prodi"=> "Teknologi Informasi"],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiDataMhs</title>
    <link rel="stylesheet" href="MultiDataMhs.css">
    <style>
        body{
             background: #00e1fd;
             background: linear-gradient(to right, #00e1fd, #fc007a);
            }
    </style>
</head>
<body>
    <h1 align="center">Data-data Mahasiswa</h1>
    <table align="center", border="1", width="60%">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Prodi</th>
        </tr>
        <?php foreach($Mahasiswa as $datamahasiswa){
            echo "<tr>";
            echo "<td>" . $datamahasiswa["nim"] . "</td>";
            echo "<td>" . $datamahasiswa["nama"] . "</td>";
            echo "<td>" . $datamahasiswa["umur"] . "</td>";
            echo "<td>" . $datamahasiswa["prodi"] . "</td>";
            echo "</tr>";
        } ?>
    </table>
</body>
</html>
