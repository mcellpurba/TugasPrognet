<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Bilangan Genap</title>
</head>
<body>
    <h2>Menampilkan Bilangan Genap</h2>
    <form method="post" action="">
        Masukkan n1: <input type="number" name="n1" required><br><br>
        Masukkan n2: <input type="number" name="n2" required><br><br>
        <input type="submit" value="Tampilkan">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        if ($n1 < $n2) {
            echo "<h3>Bilangan Genap dari $n1 sampai $n2:</h3>";
            for ($i = $n1; $i <= $n2; $i++) {
                if ($i % 2 == 0) {
                    echo $i . " ";
                }
            }
        } else {
            echo "<p style='color:red;'>Syarat tidak terpenuhi! Pastikan n1 < n2.</p>";
        }
    }
    ?>
</body>
</html>
