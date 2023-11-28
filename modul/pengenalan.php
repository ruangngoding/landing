<?php
session_start();
require '../functions.php';

// Pengecekan apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman masuk.php
    header('Location: ../masuk.php');
    exit(); // Pastikan untuk menghentikan eksekusi skrip setelah melakukan redirect
}

if (isset($_POST['unggah'])) {
    tambahhtml($_POST);
}

$htmlFiles = getHtmlFiles();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengenalan</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="shortcut icon" href="../asset/img/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="../asset/img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../asset/img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../asset/img/favicon_io/favicon-16x16.png">
    <link rel="android-chrome-192x192-icon" sizes="192x192" href="../asset/img/favicon_io/android-chrome-192x192.png">
    <link rel="android-chrome-512x512-icon" sizes="512x512" href="../asset/img/favicon_io/android-chrome-512x512.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="../css/modul/pengenalan.css">
</head>
<body>
    <header id="navbar">
        <div class="back">
            <a href="../dashboard.php"><img class="back" src="../asset/img/arrow_left.svg" alt="logo" href="../kelas.php"></a>
        </div>
        <nav>
            <ul class="nav-list">
                <li><a href="../kelas_login.php#judulKelas">Belajar Dasar Pemograman Web</a></li>
            </ul>
        </nav>
    </header>
    <div class="conteiner">
        <div class="sidebar">
            <h2>Daftar Modul</h2>
            <ul>
                <li><a href="pengenalan.php">Pengenalan</a></li>
                <li><a href="html/sejarahhtml.html">Sejarah HTML</a></li>
                <li><a href="html/strukturhtml.html">Struktur HTML</a></li>
                <li><a href="html/elementhtml.html">Element HTML</a></li>
                <li><a href="kuis/kuishtml.html">Kuis HTML</a></li>
                <li><a href="css/sejarahcss.html">Sejarah CSS</a></li>
                <li><a href="css/elementcss.html">Element CSS</a></li>
                <li><a href="kuis/kuiscss.html">Kuis CSS</a></li>
                <li><a href="submission.php">Submission</a></li>
            </ul>
        </div>
        <div class="main_content">
            <div class="title">
                <h3>Pengenalan</h3>
            </div>
            <div class="isi">
                <h4>Pengenalan Kelas</h4>
                <p>Kelas ini adalah tahap awal dalam jalur pembelajaran <b>Front End Web Developer</b> yang akan memandu Anda dalam memahami bagaimana aplikasi berbasis web dirancang dan dibangun melalui sebuah kode program. Pada kelas ini anda akan diperkenalkan dengan HTML (Hypertext Markup Language) dan CSS (Cascading Style Sheets) yang dimana mereka merupakan dasar dalam pembangunan sebuah website.</p>
                <h4>Peralatan Kelas</h4>
                <p>Untuk mengikuti kelas ini, ada beberapa alat yang diperlukan. Untuk lebih rincinya dapat dilihat sebagai berikut.</p>
                <h4>Code Editor atau IDE</h4>
                <p>Dalam proses pengembangan aplikasi, termasuk situs web dan platform lainnya, developer pasti akan menggunakan bahasa seperti HTML, CSS, dan JavaScript. Saat aplikasi semakin kompleks, jumlah kode yang perlu ditulis juga akan bertambah. Oleh karena itu, diperlukan alat yang disebut Code Editor atau Integrated Development Environment (IDE). Saat ini, banyak code editors canggih yang dapat digunakan. Berikut ini dua code editor yang kami rekomendasikan untuk kamu belajar di kelas ini.</p>
                <h4>Visual Studio Code</h4>
                <img src="../asset/img/modul/pengenalan/vs code.png" alt="">
                <p><b>Visual Studio Code (VS Code)</b> adalah editor kode sumber yang ringan namun kuat yang berjalan di desktop Anda dan tersedia untuk Windows, macOS, dan Linux. Dibuat oleh Microsoft, dan memiliki dukungan bawaan untuk JavaScript, TypeScript, dan Node.js serta memiliki ekosistem ekstensi yang kaya untuk bahasa dan runtime lainnya. Namun, Visual Studio Code mungkin lebih lambat dan mengkonsumsi banyak memori dan daya baterai pada komputer dengan sumber daya terbatas. Link <a href="https://code.visualstudio.com/download" target="_blank" rel="noopener">Download</a>.</p>
                <h4>Brackets</h4>
                <img src="../asset/img/modul/pengenalan/brackets.png" alt="">
                <p><b>Brackets</b> adalah editor kode sumber terbuka yang modern dan memahami desain web. Dibuat oleh Adobe dan dikembangkan secara aktif oleh komunitas pengembang web. Ditujukan khusus untuk pengembangan web dan front-end. Namun, Brackets mungkin tidak sepopuler Visual Studio Code dan mungkin lambat pada mesin yang lebih tua. Link <a href="https://brackets.io/" target="_blank" rel="noopener">Download</a>.</p>
                <h4>WebStorm (Jetbrains)</h4>
                <img src="../asset/img/modul/pengenalan/webStorm_Jetbrains.png" alt="">
                <p><b>WebStorm (Jetbrains)</b> adalah lingkungan pengembangan terintegrasi (IDE) untuk pengkodean dalam JavaScript dan teknologi terkait. Dibuat oleh JetBrains, pengembang perangkat lunak produktivitas. Menyediakan fitur-fitur yang berguna untuk pengembang seperti kerangka kerja terkemuka, dukungan TypeScript, stylesheet, refactoring dan navigasi, deteksi kesalahan langsung, dan penyelesaian kode. Namun, ulasan dari pengguna WebStorm menunjukkan bahwa IDE ini mungkin memerlukan sedikit perhatian lebih pada bug, lebih sedikit fitur dan lebih banyak stabilitas/kinerja. <b><i>Harap dicatat bahwa WebStorm adalah perangkat lunak berbayar</i></b>. Link <a href="https://www.jetbrains.com/webstorm/download/#section=windows" target="_blank" rel="noopener">Download</a>.</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="arrow_left">
            <a href="">Previous</a>
        </div>
        <div class="arrow_right">
            <a href="html/sejarahhtml.html">Next</a>
    </div>
</body>
</html>