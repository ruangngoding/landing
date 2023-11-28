<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
    $email = $_SESSION['username'];
    $passwordSekarang = $_POST['passwordSekarang'];
    $passwordBaru = $_POST['passwordBaru'];
    $ulangiPasswordBaru = $_POST['ulangiPasswordBaru'];

    // Validasi password saat ini
    if (cekLogin($email, $passwordSekarang)) {
        // Hash password baru
        $hashedPassword = password_hash($passwordBaru, PASSWORD_DEFAULT);

        // Simpan password baru ke database
        $updatePasswordQuery = "UPDATE user SET password = '$hashedPassword' WHERE email = '$email'";
        $result = mysqli_query($conn, $updatePasswordQuery);

        if ($result) {
            echo "Password berhasil diubah.";

            // Redirect ke dashboard setelah berhasil mengubah password
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Gagal mengubah password: " . mysqli_error($conn);
        }
    } else {
        echo "Password saat ini tidak valid.";
    }
} else {
    echo "Harap login terlebih dahulu.";
}
?>
