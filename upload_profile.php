<!-- <?php
session_start();
require 'functions.php';

// Pastikan user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Folder tempat menyimpan gambar profil
$uploadDir = 'profile_images/';

// Nama file gambar profil yang diupload
$uploadFile = $uploadDir . basename($_FILES['fileToUpload']['name']);

// Memeriksa apakah file yang diupload memiliki format yang diizinkan
$allowedFormats = ['jpg', 'jpeg', 'png', 'gif'];
$uploadedFileFormat = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));

if (!in_array($uploadedFileFormat, $allowedFormats)) {
    die("Format file tidak diizinkan.");
}

// Memeriksa apakah ukuran file tidak melebihi batas
if ($_FILES['fileToUpload']['size'] > 800000) {
    die("Ukuran file terlalu besar. Max size: 800K.");
}

// Memindahkan file yang diupload ke folder yang ditentukan
if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadFile)) {
    // Mengupdate path gambar profil ke database
    $email = $_SESSION['username'];
    $updateImagePathSql = "UPDATE user SET image_path = '$uploadFile' WHERE email = '$email'";
    $updateImagePathResult = mysqli_query($conn, $updateImagePathSql);

    if (!$updateImagePathResult) {
        die("Query gagal: " . mysqli_error($conn));
    }

    // Redirect ke halaman pengaturan setelah berhasil upload
    header("Location: dashboard.php");
    exit();
} else {
    echo "Gagal mengunggah file.";
}
?> -->
