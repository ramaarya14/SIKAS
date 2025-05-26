<?php
include 'koneksi.php';

$nominal = $_POST['amount'];
$keterangan = $_POST['desc'];

$sql = "INSERT INTO pengeluaran (nominal, keterangan) VALUES ('$nominal', '$keterangan')";
if (mysqli_query($conn, $sql)) {
    header("Location: pengeluaran.php"); 
    exit();
} else {
    echo "Gagal input: " . mysqli_error($conn);
}
?>
