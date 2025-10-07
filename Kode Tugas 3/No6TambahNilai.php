<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input Nilai Mahasiswa</title>
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
            let mahasiswa_id = document.forms["formMahasiswa"]["mahasiswa_id"].value.trim();
            let mata_kuliah = document.forms["formMahasiswa"]["mata_kuliah"].value.trim();
            let sks = document.forms["formMahasiswa"]["sks"].value.trim();
            let nilai_huruf = document.forms["formMahasiswa"]["nilai_huruf"].value.trim();
            let nilai_angka = document.forms["formMahasiswa"]["nilai_angka"].value.trim();
            let errorMsg = "";

            if (mahasiswa_id === "") {
                errorMsg += "⚠️ NIM tidak boleh kosong.<br>";
            }
            if (mata_kuliah === "") {
                errorMsg += "⚠️ Matakuliah tidak boleh kosong.<br>";
            }
            if (sks === "") {
                errorMsg += "⚠️ SKS tidak boleh kosong.<br>";
            }
            if (nilai_huruf === "") {
                errorMsg += "⚠️ Nilai Huruf tidak boleh kosong.<br>";
            }
            if (nilai_angka === "") {
                errorMsg += "⚠️ Nilai Angka tidak boleh kosong.<br>";
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

<h2>Form Input Nilai Mahasiswa</h2>

<form name="formMahasiswa" method="post" onsubmit="return validateForm()">
    <label>ID Mahasiswa:</label><br>
    <input type="text" name="mahasiswa_id"><br>

    <label>Matakuliah:</label><br>
    <input type="text" name="mata_kuliah"><br>

    <label>SKS:</label><br>
    <input type="text" name="sks"><br>

    <label>Nilai Huruf:</label><br>
    <input type="text" name="nilai_huruf"><br>

    <label>Nilai Angka:</label><br>
    <input type="text" name="nilai_angka"><br>

    <div id="errorMsg" class="error"></div>

    <input type="submit" name="simpan" value="Simpan">
</form>


<?php
if (isset($_POST['simpan'])) {
    $mahasiswa_id = $_POST['mahasiswa_id'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $sks = $_POST['sks'];
    $nilai_huruf = $_POST['nilai_huruf'];
    $nilai_angka = $_POST['nilai_angka'];

    // Validasi tambahan di sisi server (jika user menonaktifkan JS)
    if (empty($mahasiswa_id) || empty($mata_kuliah) || empty($sks) || empty($nilai_huruf) || empty($nilai_angka)) {
        echo "<p class='error'>Semua field wajib diisi!</p>";
    } else {
        $sql = "INSERT INTO nilai (mahasiswa_id, mata_kuliah, sks, nilai_huruf, nilai_angka) VALUES ('$mahasiswa_id', '$mata_kuliah', '$sks', '$nilai_huruf', '$nilai_angka')";
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