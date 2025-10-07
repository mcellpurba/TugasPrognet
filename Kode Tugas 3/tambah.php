<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        form {
            background: #f9f9f9;
            padding: 20px;
            width: 320px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        input[type=text] {
            width: 100%;
            padding: 8px;
            margin: 6px 0;
            box-sizing: border-box;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-size: 14px;
        }
        .success {
            color: green;
            font-weight: bold;
        }
    </style>

    <script>
        function validateForm() {
            let nim = document.forms["formMahasiswa"]["nim"].value.trim();
            let nama = document.forms["formMahasiswa"]["nama"].value.trim();
            let prodi = document.forms["formMahasiswa"]["prodi"].value.trim();
            let errorMsg = "";

            if (nim === "") {
                errorMsg += "⚠️ NIM tidak boleh kosong.<br>";
            }
            if (nama === "") {
                errorMsg += "⚠️ Nama tidak boleh kosong.<br>";
            }
            if (prodi === "") {
                errorMsg += "⚠️ Prodi tidak boleh kosong.<br>";
            }

            if (errorMsg !== "") {
                document.getElementById("errorMsg").innerHTML = errorMsg;
                return false; // hentikan submit
            } else {
                document.getElementById("errorMsg").innerHTML = "";
                return true; // lanjutkan submit ke PHP
            }
        }
    </script>
</head>
<body>

<h2>Form Input Data Mahasiswa</h2>

<form name="formMahasiswa" method="post" onsubmit="return validateForm()">
    <label>NIM:</label><br>
    <input type="text" name="nim"><br>

    <label>Nama:</label><br>
    <input type="text" name="nama"><br>

    <label>Prodi:</label><br>
    <input type="text" name="prodi"><br>

    <div id="errorMsg" class="error"></div>

    <input type="submit" name="simpan" value="Simpan">
</form>

<?php
if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    // Validasi tambahan di sisi server (jika user menonaktifkan JS)
    if (empty($nim) || empty($nama) || empty($prodi)) {
        echo "<p class='error'>Semua field wajib diisi!</p>";
    } else {
        $sql = "INSERT INTO mahasiswa (nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi')";
        if ($conn->query($sql) === TRUE) {
            echo "<p class='success'>Data berhasil disimpan! <a href='index.php'>Kembali</a></p>";
        } else {
            echo "<p class='error'>Error: " . $conn->error . "</p>";
        }
    }
}
?>

</body>
</html>
