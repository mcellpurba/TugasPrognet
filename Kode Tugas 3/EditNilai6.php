<?php
include "koneksi.php";
$id = $_GET['d'];
$ambil_data = mysqli_query($conn, "SELECT * FROM nilai WHERE id='$id'");
$data = mysqli_fetch_array($ambil_data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Nilai</title>
    <style>
        body { font-family: Arial; background: #f2f2f2; padding: 30px; }
        form { background: white; padding: 20px; border-radius: 10px; width: 350px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input, select { width: 100%; padding: 8px; margin: 6px 0; border-radius: 5px; border: 1px solid #ccc; }
        button { background: #2962ff; color: white; border: none; padding: 10px; border-radius: 5px; cursor: pointer; }
        button:hover { background: #0039cb; }
    </style>
</head>
<body>

<h2>Edit Data Nilai Mahasiswa</h2>

<form method="post">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    <label>ID Mahasiswa:</label>
    <input type="text" name="mahasiswa_id" value="<?php echo $data['mahasiswa_id'] ?>" required>

    <label>Matakuliah:</label>
    <input type="text" name="mata_kuliah" value="<?php echo $data['mata_kuliah'] ?>" required>

    <label>SKS:</label>
    <input type="number" name="sks" value="<?php echo $data['sks'] ?>" required>

    <label>Nilai Huruf:</label>
    <select name="nilai_huruf" required>
        <option value="A" <?php ($data['nilai_huruf']=='A')?'selected':'' ?>>A</option>
        <option value="B" <?php ($data['nilai_huruf']=='B')?'selected':'' ?>>B</option>
        <option value="C" <?php ($data['nilai_huruf']=='C')?'selected':'' ?>>C</option>
        <option value="D" <?php ($data['nilai_huruf']=='D')?'selected':'' ?>>D</option>
        <option value="E" <?php ($data['nilai_huruf']=='E')?'selected':'' ?>>E</option>
    </select>

    <label>Nilai Angka:</label>
    <input type="text" name="nilai_angka" value="<?php echo $data['nilai_angka'] ?>" required>

    <button type="submit" name="update">Simpan Perubahan</button>
</form>

</body>
</html>

<?php
 if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $mahasiswa_id = $_POST['mahasiswa_id'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $sks = $_POST['sks'];
    $nilai_huruf = $_POST['nilai_huruf'];
    $nilai_angka = $_POST['nilai_angka'];

    $update = mysqli_query($conn, "UPDATE nilai SET 
        mahasiswa_id='$mahasiswa_id',
        mata_kuliah='$mata_kuliah',
        sks='$sks',
        nilai_huruf='$nilai_huruf',
        nilai_angka='$nilai_angka'
        WHERE id='$id'");

    if ($update) {
        echo "<script>alert('Data berhasil diupdate'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate data'); window.location='index.php';</script>";
    }
 }
?>