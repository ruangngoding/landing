<?php
session_start();
require 'functions.php';

$namaDepan = isset($_SESSION['username']) ? getFirstName($_SESSION['username']) : 'Pengunjung';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="shortcut icon" href="asset/img/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/img/favicon_io/favicon-16x16.png">
    <link rel="android-chrome-192x192-icon" sizes="192x192" href="asset/img/favicon_io/android-chrome-192x192.png">
    <link rel="android-chrome-512x512-icon" sizes="512x512" href="asset/img/favicon_io/android-chrome-512x512.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <header>
        <a href="landingpage.php"><img src="asset/img/ruangngoding.png" alt="Ruang Ngoding" ></a>
        <nav>
            <ul>
                <li><a href="dashboard.html">Home</a></li>
            </ul>
        </nav>
        <div class="profil"><img id="photo-profil" src="asset/img/user.svg" alt=""></div>
        <div class="arrow-p" id="arrow-down-container">
            <img src="asset/img/arrow_down.svg" alt="" id="arrow-down">
        </div>
        <div class="dropdown-menu" id="dropdown-menu">
            <!-- Add your dropdown menu content here -->
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="container">
            <h1>Selamat datang <?php echo $namaDepan; ?></h1>
            <h2>Semoga belajar kamu menyenangkan</h2>
        </div>
    
        <div class="aktivitas">
            <img src="asset/img/activity_feed.svg" alt="" style="height: 24px;">
            <h5>Aktivitas</h5>
            <div class="aktivitasc">
                <h6>Belajar</h6>
                <p>Belajar Dasar Promograman Web</p>
                <a href="">Lanjutkan</a>
            </div>
            <div class="aktivitasc">
                <h6>Belajar</h6>
                <p>Belajar Lanjutan Promograman Web</p>
                <a href="">Lanjutkan</a>
            </div>
        </div>
    
        <div class="sertifikat">
            <img src="asset/img/certificate.png" alt="" style="height: 24px;">
            <h5>Sertifikat</h5>
            <div class="sertifikatc">
                <h6>Selamat</h6>
                <p>Sertifikat untuk kelas Belajar Dasar Promograman Web</p>
                <a href=""><button>Lihat Sertifikat</button></a>
            </div>
            <div class="sertifikatc">
                <h6>Selamat</h6>
                <p>Sertifikat untuk kelas Belajar Lanjutan Promograman Web</p>
                <a href=""><button>Lihat Sertifikat</button></a>
            </div>
        </div>
        <div class="k"></div>
    </main>
    <script src="dashboard.js"></script>
    <footer>
        <div class="footer">
            <hr>
            <div class="Copyright"><p>Copyright ©2023 | Ruang Ngoding</p></div>
        </div>
    </footer>
</body>
</html>

