<?php
include "koneksi.php";

// Proses pencarian
$cari = "";
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $query = mysqli_query($conn, "SELECT * FROM mahasiswa 
                WHERE nim LIKE '%$cari%' 
                OR nama LIKE '%$cari%' 
                OR prodi LIKE '%$cari%' 
                ORDER BY id ASC");
} else {
    $query = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY id ASC");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pencarian Mahasiswa</title>
    <style>
        body {
            font-family: "Poppins", Arial, sans-serif;
            background: #f2f6ff;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 950px;
            margin: auto;
            background: #fff;
            border-radius: 15px;
            padding: 25px 35px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            animation: fadeIn 0.6s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            text-align: center;
            color: #2962ff;
            margin-bottom: 25px;
            font-size: 28px;
        }

        /* 🔍 Kotak pencarian */
        .search-box {
            text-align: right;
            margin-bottom: 20px;
        }

        .search-box input[type="text"] {
            width: 270px;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 14px;
            transition: 0.3s;
            outline: none;
        }

        .search-box input[type="text"]:focus {
            border-color: #2962ff;
            box-shadow: 0 0 6px rgba(41,98,255,0.4);
        }

        .search-box button {
            padding: 10px 15px;
            background: #2962ff;
            border: none;
            color: white;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        .search-box button:hover {
            background: #0039cb;
        }

        /* 📊 Tabel */
        table {
            border-collapse: collapse;
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 14px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #2962ff;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        tr:hover {
            background: #e3f2fd;
            transition: 0.3s;
        }

        /* ✨ Highlight hasil pencarian */
        .highlight {
            background-color: #bbdefb !important;
            animation: pulse 1.5s ease-in-out;
        }

        @keyframes pulse {
            0% { background-color: #bbdefb; }
            50% { background-color: #e3f2fd; }
            100% { background-color: #bbdefb; }
        }

        /* Tombol Edit & Hapus */
        .btn {
            padding: 6px 10px;
            border-radius: 8px;
            color: white;
            text-decoration: none;
            font-size: 13px;
        }

        .btn-edit {
            background: #00bfa5;
        }

        .btn-edit:hover {
            background: #009e88;
        }

        .btn-hapus {
            background: #e53935;
        }

        .btn-hapus:hover {
            background: #c62828;
        }

        /* Pesan hasil pencarian */
        .result-info {
            text-align: left;
            margin-bottom: 10px;
            font-size: 15px;
            color: #555;
        }

        .notfound {
            text-align: center;
            color: #888;
            font-style: italic;
            padding: 25px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>📘 Data Pencarian Mahasiswa</h2>

    <div class="search-box">
        <form method="get" action="">
            <input type="text" name="cari" placeholder="Cari ID, Matakuliah, atau Nilai..." value="<?= htmlspecialchars($cari) ?>">
            <button type="submit">Cari</button>
        </form>
    </div>

    <?php if ($cari != ""): ?>
        <div class="result-info">
            Menampilkan hasil untuk: <b>"<?= htmlspecialchars($cari) ?>"</b>
        </div>
    <?php endif; ?>

    <table>
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr>

        <?php
        if (mysqli_num_rows($query) > 0) {
            while ($data = mysqli_fetch_array($query)) {
                // Tambahkan highlight pada baris hasil yang cocok dengan kata kunci
                $highlightClass = "";
                if ($cari != "" && (
                    stripos($data['nim'], $cari) !== false ||
                    stripos($data['nama'], $cari) !== false ||
                    stripos($data['prodi'], $cari) !== false
                )) {
                    $highlightClass = "highlight";
                }

                echo "
                <tr class='$highlightClass'>
                    <td>{$data['id']}</td>
                    <td>{$data['nim']}</td>
                    <td>{$data['nama']}</td>
                    <td>{$data['prodi']}</td>
                    <td>
                        <a href='EditNilai6.php?id={$data['id']}' class='btn btn-edit'>Edit</a>
                        <a href='HapusNilai6.php?id={$data['id']}' class='btn btn-hapus' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>
                    </td>
                </tr>
                ";
            }
        } else {
            echo "<tr><td colspan='7' class='notfound'>Data tidak ditemukan.</td></tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
