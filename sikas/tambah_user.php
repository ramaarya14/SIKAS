<?php
include 'koneksi.php';


$username = 'zaky'; 
$password_plain = 'zaky123'; 

$password_hashed = password_hash($password_plain, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password_hashed')";

if (mysqli_query($conn, $sql)) {
    echo "User berhasil ditambahkan!";
} else {
    echo "Gagal menambahkan user: " . mysqli_error($conn);
}
?>
