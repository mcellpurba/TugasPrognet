<!DOCTYPE html>
<html>
<head>
    <title>Menu Makanan</title>
</head>
<body>
    <h2>Pilih Menu Makanan</h2>

    <form method="post" action="">
        <label>Pilih Makanan: </label>
        <select name="makanan" required>
            <option value="">-- Pilih --</option>
            <option value="Nasi Goreng">Nasi Goreng</option>
            <option value="Soto">Soto</option>
            <option value="Mie Ayam">Mie Ayam</option>
        </select>
        <button type="submit">Lihat Harga</button>
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $makanan = $_POST["makanan"];
        $harga = "";
        
        switch ($makanan) {
            case "Nasi Goreng":
                $harga = "Rp 20.000";
                break;
            case "Soto":
                $harga = "Rp 15.000";
                break;
            case "Mie Ayam":
                $harga = "Rp 18.000";
                break;
            default:
                $harga = "Menu tidak tersedia";
        }

        echo "<h3>Anda memilih: <b>$makanan</b></h3>";
        echo "<p>Harga: <b>$harga</b></p>";
    }
    ?>
</body>
</html>
