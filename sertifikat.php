<?php
    session_start();
    require 'functions.php';

    // ... (proses login, pengaturan $_SESSION['username'], dll.)
    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="shortcut icon" href="asset/img/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/img/favicon_io/favicon-16x16.png">
    <link rel="android-chrome-192x192-icon" sizes="192x192" href="asset/img/favicon_io/android-chrome-192x192.png">
    <link rel="android-chrome-512x512-icon" sizes="512x512" href="asset/img/favicon_io/android-chrome-512x512.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="sertifikat.css">
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
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="sertifikat">
                <img class="logo" src="asset/img/ruangngoding.png" alt="Ruang Ngoding">
                <h1 class="title">SERTIFIKAT KELULUSAN</h1>
                <p>Diberikan kepada:</p>
                <h2 id="nama"><?php echo strtoupper(getFullName($_SESSION['username'])); ?></h2>
                <p>Atas kelulusannya pada kelas:</p>
                <h2 id="kelas"></h2>
                <p class="tgl">Tanggal diberikan: <?php echo date('j F, Y'); ?></p>
                <h2 id="id-sertifikat">ID SERTIFIKAT: <br><p><?php echo $id_sertifikat; ?></p></h2>
            </div>
        </div>

        <div class="selamat">
            <button id="unduhSertifikat">Unduh Sertifikat</button>
            <p>Selamat atas partisipasimu dalam menyelesaikan kelas ini, <br> semoga apa yang kamu peroleh dari kelas ini bisa menjadi bekal di masa depanmu</p>
        </div>

        <div class="k"></div>
    </main>
    <script src="dashboard.js"></script>
    <script src="ambil_nama_kelas.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="scriptunduh.js"></script>
    <footer>
        <div class="footer">
            <hr>
            <div class="Copyright"><p>Copyright ©2023 | Ruang Ngoding</p></div>
        </div>
    </footer>
</body>
</html>