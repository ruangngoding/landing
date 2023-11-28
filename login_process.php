<?php
require 'functions.php';

// Memulai sesi
session_start();

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Misalkan email dan password yang diterima dari formulir login
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Memanggil fungsi cekLogin
if (cekLogin($email, $password)) {
    // Jika login berhasil, atur $_SESSION['username'] dengan email pengguna
    $_SESSION['username'] = $email;
    
    // Redirect ke dashboard.php atau halaman lainnya
    header("Location: dashboard.php");
    exit();
} else {
    // Jika login gagal, lakukan sesuatu (tampilkan pesan kesalahan, dll.)
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    echo mysqli_error($conn);
}

// Menutup koneksi ke database (jika menggunakan mysqli)
mysqli_close($conn);
?>
