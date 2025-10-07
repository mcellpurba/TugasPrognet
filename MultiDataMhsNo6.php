//Soal no 6//

<?php
    $Mahasiswa=[
        ["nim"=> 2305551048, "nama"=> "Marcellino Elrobson", "umur" => 20, "prodi"=> "Teknologi Informasi", "nilai"=> 90],
        ["nim"=> 2305551171, "nama"=> "Azka Ilham Ramadhani", "umur" => 21, "prodi"=> "Teknologi Informasi", "nilai"=> 90],
        ["nim"=> 2305551050, "nama"=> "I Kadek Agus Widiantara", "umur" => 21, "prodi"=> "Teknologi Informasi", "nilai"=> 59],
        ["nim"=> 2305551122, "nama"=> "Putu Satria Arya Putra", "umur" => 20, "prodi"=> "Teknologi Informasi", "nilai"=> 90],
        ["nim"=> 2305551138, "nama"=> "Anthony Wisnu Jati", "umur" => 20, "prodi"=> "Teknologi Informasi", "nilai"=> 80],
        ["nim"=> 2305551053, "nama"=> "I Kadek Adi Sunetra", "umur" => 20, "prodi"=> "Teknologi Informasi", "nilai"=> 65],
        ["nim"=> 2305551109, "nama"=> "Chalimus Candra Daniswara Wisam Prakoso", "umur" => 21, "prodi"=> "Teknologi Informasi", "nilai"=> 74],
        ["nim"=> 2305551121, "nama"=> "I Dewa Ketut Cakra Wibawa Diputra", "umur" => 20, "prodi"=> "Teknologi Informasi", "nilai"=> 66],
        ["nim"=> 2305551028, "nama"=> "I Putu Okta Raditya Putra", "umur" => 21, "prodi"=> "Teknologi Informasi", "nilai"=> 69],
        ["nim"=> 2305551076, "nama"=> "Ravi Arnan Irianto", "umur" => 21, "prodi"=> "Teknologi Informasi", "nilai"=> 90],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiDataMhs</title>
    <link rel="stylesheet" href="MultiDataMhsNo6.css">
    <style>
        body{
             background: #ffe53b;
             background: linear-gradient(to right, #ffe53b, #00ffff);
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: blanchedalmond;
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
            <th>Nilai</th>
            <th>Status</th>
        </tr>

<?php foreach($Mahasiswa as $datamahasiswa){         
    if ($datamahasiswa["nilai"] >= 70) {
    $status = "Lulus";
    } 
    else if ($datamahasiswa["nilai"] < 70) {
    $status = "Tidak Lulus";
    }
    echo "<tr>
            <td>{$datamahasiswa["nim"]}</td>
            <td>{$datamahasiswa["nama"]}</td>
            <td>{$datamahasiswa["umur"]}</td>
            <td>{$datamahasiswa["prodi"]}</td>
            <td>{$datamahasiswa["nilai"]}</td>
            <td>$status</td>
          </tr>";
}   
?>
    </table>
</body>
</html>
