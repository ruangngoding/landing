<?php
session_start();
require 'functions.php';

// Pengecekan apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman masuk.php
    header('Location: masuk.php');
    exit(); // Pastikan untuk menghentikan eksekusi skrip setelah melakukan redirect
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="shortcut icon" href="asset/img/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/img/favicon_io/favicon-16x16.png">
    <link rel="android-chrome-192x192-icon" sizes="192x192" href="asset/img/favicon_io/android-chrome-192x192.png">
    <link rel="android-chrome-512x512-icon" sizes="512x512" href="asset/img/favicon_io/android-chrome-512x512.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="kelas_login.css">
</head>
<body>
    <header>
        <div class="logo-container">
            <img class="logo" src="asset/img/TI_UNIMA.png" alt="logo" href="index.php">
        </div>
        <nav>
            <ul class="nav-list">
                <li><a href="landingpage.php#kelebihan">Learning Path</a></li>
                <li><a href="landingpage.php#tentangkami">Tentang Kami</a></li>
            </ul>
        </nav>
        <div class="profil"><img id="photo-profil" src="asset/img/user.svg" alt=""></div>
        <div class="arrow-p" id="arrow-down-container">
            <img src="asset/img/arrow_down.svg" alt="" id="arrow-down">
        </div>
        <div class="dropdown-menu" id="dropdown-menu">
            <!-- Add your dropdown menu content here -->
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="settings.php">Settings</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </div>
    </header> 
    <div class="card">
        <div class="profil">
            <img src="asset/img/profil33.jpg" alt="Profil">
            <div class="button-container">
                <a href="modul/pengenalan.php"><button>Mulai Kelas</button></a>
            </div>
        </div>
        <div class="ket">
            <h1 id="judulKelas">Belajar Dasar Pemrograman Web</h1>
            <p>Teknologi : <span>Web</span></p>
            <p>Pelajari dasar HTML & CSS yang merupakan fondasi utama <br>untuk menjadi front-end web developer</p>
        </div>
    </div>
    <div class="cont">
        <p class="apa">Apa yang akan kamu dapatkan</p>
        <div class="sertifikat">
            <img src="asset/img/certificate.png" alt="Sertifikat">
            <h5>Sertifikat</h5>
            <p>Dapatkan sertifikat setelah menyelesaikan kelas ini</p>
        </div>
        <div class="modul">
            <img src="asset/img/folder.png" alt="Modul">
            <h5>Modul</h5>
            <p>Materi bacaan elektronik yang mudah dipahami</p>
        </div>
        <div class="kuis">
            <img src="asset/img/file.png" alt="Kuis">
            <h5>Kuis</h5>
            <p>Kuis pilihan ganda yang membantu memahami materi</p>
        </div>
        <div class="submission">
            <img src="asset/img/browser.png" alt="Submission">
            <h5>Submission</h5>
            <p>Uji kemampuan kamu dengan mengerjakan tugas submission</p>
        </div>
        <h3>Deskripsi</h3>
        <p>Kelas Belajar Dasar Pemrograman Web ini cocok untuk pemula yang ingin memulai perjalanan mereka dalam pengembangan web. 
            Setelah menyelesaikan kelas ini, peserta akan memiliki dasar yang kuat dalam pemrograman web dan akan dapat membuat situs web sederhana dengan 
            tampilan menarik dan fungsionalitas dasar. Ini adalah langkah awal yang penting bagi mereka yang ingin mengejar karir menjadi front-end web developer.</p>
    </div>

    <script src="script.js"></script>
    <script src="dashboard.js"></script>
    <footer>
        <div class="footer">
            <hr>
            <div class="Copyright"><p>Copyright ©2023 | Ruang Ngoding</p></div>
        </div>
    </footer>
</body>
</html>
