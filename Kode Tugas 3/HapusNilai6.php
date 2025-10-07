<?php include "koneksi.php";

$d = $_GET['d'];
$hapus = mysqli_query($conn, "DELETE FROM nilai WHERE id='$d'");

if ($hapus) {
    header("Location: index.php");
    echo "Data berhasil dihapus <a href='index.php'>Kembali</a>";
} else {
    echo "Error: " . $conn->error;
}
?>
