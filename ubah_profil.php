<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
    $email = $_SESSION['username'];
    $namaLengkap = $_POST['namaLengkap'];
    $emailBaru = $_POST['email'];

    // Validasi email baru
    if (!filter_var($emailBaru, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error_message'] = "Email tidak valid.";
        header("Location: settings.php");
        exit();
    }

    // Update nama dan email di database
    $updateProfilQuery = "UPDATE user SET username = '$namaLengkap', email = '$emailBaru' WHERE email = '$email'";
    $result = mysqli_query($conn, $updateProfilQuery);

    if ($result) {
        $_SESSION['success_message'] = "Profil berhasil diperbarui.";
        header("Location: dashboard.php");
        exit();
    } else {
        $_SESSION['error_message'] = "Gagal memperbarui profil: " . mysqli_error($conn);
        header("Location: settings.php");
        exit();
    }
} else {
    $_SESSION['error_message'] = "Harap login terlebih dahulu.";
    header("Location: settings.php");
    exit();
}
?>
