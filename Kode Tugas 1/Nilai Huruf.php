<!DOCTYPE html>
<html>
    <head>
    <title>Nilai huruf</title>
</head>
<body>
    <h2>Masukkan nilai:</h2> <br>
     <form method="post" action="">
        <label>Masukkan Nilai (0-100): </label>
        <input type="number" name="nilai" min="0" max="100" required>
        <button type="submit">Cek Grade</button>
    </form>


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST["nilai"];
        $grade = "";

        if ($nilai >= 85) {
            $grade = "A";
        } elseif ($nilai >= 70) {
            $grade = "B";
        } elseif ($nilai >= 55) {
            $grade = "C";
        } elseif ($nilai >= 40) {
            $grade = "D";
        } else {
            $grade = "E";
        }

        echo "<h3>Nilai Anda: <b>$nilai</b></h3>";
        echo "<p>Grade: <b>$grade</b></p>";
    }
    ?>

</body>
</html>