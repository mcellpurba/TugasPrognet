<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata Singkat</title>
</head>
<body>
    <h2>Form Biodata Singkat</h2>

    <form method="post" action="">
        <label>Nama: </label>
        <input type="text" name="nama" required><br><br>

        <label>Umur: </label>
        <input type="number" name="umur" required><br><br>

        <label>Jenis Kelamin: </label>
        <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jk" value="Perempuan" required> Perempuan
        <br><br>

        <label>Alamat: </label><br>
        <textarea name="alamat" rows="4" cols="30" required></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama   = htmlspecialchars($_POST["nama"]);
        $umur   = htmlspecialchars($_POST["umur"]);
        $jk     = htmlspecialchars($_POST["jk"]);
        $alamat = htmlspecialchars($_POST["alamat"]);

        echo "<h3>Hasil Biodata:</h3>";
        echo "Halo, nama saya <b>$nama</b>. ";
        echo "Umur saya <b>$umur</b> tahun. ";
        echo "Saya seorang <b>$jk</b>. ";
        echo "Saya tinggal di <b>$alamat</b>.";
    }
    ?>
</body>
</html>
