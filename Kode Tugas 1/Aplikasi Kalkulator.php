<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana PHP</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>

    
    <form method="post" action="">
        <label>Angka 1: </label>
        <input type="number" name="angka1" required><br><br>

        <label>Angka 2: </label>
        <input type="number" name="angka2" required><br><br>

        <label>Operator: </label>
        <select name="operator" required>
            <option value="tambah">Tambah (+)</option>
            <option value="kurang">Kurang (-)</option>
            <option value="kali">Kali (×)</option>
            <option value="bagi">Bagi (÷)</option>
        </select><br><br>

        <button type="submit">Hitung</button>
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka1 = $_POST["angka1"];
        $angka2 = $_POST["angka2"];
        $operator = $_POST["operator"];
        $hasil = 0;

        
        switch ($operator) {
            case "tambah":
                $hasil = $angka1 + $angka2;
                break;
            case "kurang":
                $hasil = $angka1 - $angka2;
                break;
            case "kali":
                $hasil = $angka1 * $angka2;
                break;
            case "bagi":
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    $hasil = "Error! Tidak bisa dibagi dengan nol.";
                }
                break;
            default:
                $hasil = "Operator tidak dikenal.";
        }

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "<p>$angka1 $operator $angka2 = <b>$hasil</b></p>";
    }
    ?>
</body>
</html>
