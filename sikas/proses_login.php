<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user['password'])) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        header("Location: index.html");
        exit();
    } else {
        echo "Password salah!";
    }
} else {
    echo "Username tidak ditemukan!";
}
?>
