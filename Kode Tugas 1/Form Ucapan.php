<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ucapan</title>
</head>
<body>
    <h2>Masukkan Nama</h2>
     <form method="post" action="">
        <input type="text" name="Nama" required>
        <button type="summit">
            Kirimkan
        </button>
     </form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = isset($_POST['Nama']) ? htmlspecialchars($_POST['Nama']) : '';
    echo "Halo, {$nama} selamat belajar PHP!";
} else {
    echo "Form belum dikirim.";
}
?>

</body>
</html>