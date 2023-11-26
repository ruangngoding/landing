<?php
require 'functions.php';

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Misalkan email dan password yang diterima dari formulir login
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


echo "Email: $email<br>";
echo "Password: $password<br>";

// Memanggil fungsi cekLogin
if (cekLogin($email, $password)) {
    // Jika login berhasil, arahkan ke dashboard.php
    // Setelah autentikasi berhasil
    $_SESSION['username'] = $email; // Gantilah $username dengan nilai sesuai kebutuhan
    // Redirect ke dashboard.php atau halaman lainnya
    header("Location: dashboard.php"); // Pastikan untuk keluar dari skrip setelah mengarahkan pengguna
    exit();
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    echo mysqli_error($conn);
}





// Menutup koneksi ke database (jika menggunakan mysqli)
mysqli_close($conn);

?>
