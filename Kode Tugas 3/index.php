<?php include "koneksi.php"; ?>
<h3>Daftar Mahasiswa</h3>
<link rel="stylesheet" href="index.css">

<br>
<a href="cari-mahasiswa.php">Cari Mahasiswa</a>
<br>

<a href="tambah.php">Tambah Mahasiswa</a>
<br>
<br>
<table border="1" cellpadding="5">
    <link rel="stylesheet" href="index.css">
<tr>
<th>ID</th><th>NIM</th><th>Nama</th><th>Prodi</th><th>Aksi</th>
</tr>
<?php
$result = $conn->query("SELECT * FROM mahasiswa");
while ($row = $result->fetch_assoc()) {
echo "<tr>
<td>{$row['id']}</td>
<td>{$row['nim']}</td>
<td>{$row['nama']}</td>
<td>{$row['prodi']}</td>
<td>
<a href='edit.php?id={$row['id']}'>Edit</a> |
<a href='hapus.php?id={$row['id']}'>Hapus</a>
</td>
</tr>";
}
?>

</table>
<br>
<a href="No6TambahNilai.php">Tambah Nilai Mahasiswa</a>
<br>
<br>
<table border="1" cellpadding="5">
    <link rel="stylesheet" href="index.css">
<tr>
<th>ID</th><th>ID Mahasiswa</th><th>Matakuliah</th><th>SKS</th><th>Nilai Huruf</th><th>Nilai Angka</th><th>Aksi</th>
</tr>
<?php
$result = $conn->query("SELECT * FROM nilai");
while ($row = $result->fetch_assoc()) {
echo "<tr>
<td>{$row['id']}</td>
<td>{$row['mahasiswa_id']}</td>
<td>{$row['mata_kuliah']}</td>
<td>{$row['sks']}</td>
<td>{$row['nilai_huruf']}</td>
<td>{$row['nilai_angka']}</td>
<td>
<a href='EditNilai6.php?d={$row['id']}'>Edit</a> |
<a href='HapusNilai6.php?d={$row['id']}'>Hapus</a>
</td>
</tr>";
}
?>
</table>
