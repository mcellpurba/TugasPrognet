<?php include "koneksi.php"; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM mahasiswa WHERE id=$id");
$data = $result->fetch_assoc();
?>
<form method="post">
    <style>
        body { font-family: Arial; background: #f2f2f2; padding: 30px; }
        form { background: white; padding: 20px; border-radius: 10px; width: 350px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input, select { width: 100%; padding: 8px; margin: 6px 0; border-radius: 5px; border: 1px solid #ccc; }
        button { background: #2962ff; color: white; border: none; padding: 10px; border-radius: 5px; cursor: pointer; }
        button:hover { background: #0039cb; }
    </style>
NIM: <input type="text" name="nim" value="<?= $data['nim'] ?>"><br>
Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
Prodi: <input type="text" name="prodi" value="<?= $data['prodi'] ?>"><br>
<input type="submit" name="update" value="Update">
</form>
<?php
if (isset($_POST['update'])) {
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi' WHERE
id=$id";
if ($conn->query($sql) === TRUE) {
echo "Data berhasil diperbarui <a href='index.php'>Kembali</a>";
} else {
echo "Error: " . $conn->error;
}
}
?>