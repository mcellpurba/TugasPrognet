<!DOCTYPE html>
<html>
<head>
    <title>Menentukan Bilangan Ganjil atau Genap</title>
</head>
<body>
    <h2>Cek Bilangan Ganjil/Genap</h2>

    <form method="post" action="">
        <label>Masukkan Angka: </label>
        <input type="number" name="angka" required>
        <button type="submit">Cek</button>
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka = $_POST["angka"];

        if ($angka % 2 == 0) {
            echo "<h3>Angka $angka adalah <b>Genap</b></h3>";
        } else {
            echo "<h3>Angka $angka adalah <b>Ganjil</b></h3>";
        }
    }
    ?>
</body>
</html>
