<?php
include 'koneksi.php';

$nominal = $_POST['amount'];
$keterangan = $_POST['desc'];

$sql = "INSERT INTO pemasukan (nominal, keterangan) VALUES ('$nominal', '$keterangan')";
if (mysqli_query($conn, $sql)) {
    header("Location: pemasukan.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
