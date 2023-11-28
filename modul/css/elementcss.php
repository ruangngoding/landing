<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Element CSS</title>
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="shortcut icon" href="../../asset/img/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="../../asset/img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../asset/img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../asset/img/favicon_io/favicon-16x16.png">
    <link rel="android-chrome-192x192-icon" sizes="192x192" href="../../asset/img/favicon_io/android-chrome-192x192.png">
    <link rel="android-chrome-512x512-icon" sizes="512x512" href="../../asset/img/favicon_io/android-chrome-512x512.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="../../css/modul/css/sejarahcss.css">
</head>
<body>
    <header id="navbar">
        <div class="back">
            <img class="back" src="../../asset/img/arrow_left.svg" alt="logo" href="#">
        </div>
        <nav>
            <ul class="nav-list">
                <li><a href="#Belajar_Dasar_Pemograman_Web">Belajar Dasar Pemograman Web</a></li>
            </ul>
        </nav>
    </header>
    <div class="conteiner">
        <div class="sidebar">
            <h2>Daftar Modul</h2>
            <ul>
                <li><a href="../pengenalan.php">Pengenalan</a></li>
                <li><a href="../html/sejarahhtml.php">Sejarah HTML</a></li>
                <li><a href="../html/strukturhtml.php">Struktur HTML</a></li>
                <li><a href="../html/elementhtml.php">Element HTML</a></li>
                <li><a href="sejarahcss.php">Sejarah CSS</a></li>
                <li><a href="elementcss.php">Element CSS</a></li>
                <li><a href="">Lorem</a></li>
                <li><a href="">Lorem</a></li>
                <li><a href="">Lorem</a></li>
            </ul>
        </div>
        <div class="main_content">
            <div class="title">
                <h3>Element CSS</h3>
            </div>
            <div class="isi">
                <ul>
                    <li><h4>Selektor</h4>
                        <p><b>Selektor</b> adalah cara untuk memilih elemen HTML yang ingin Anda gayakan. Selektor paling umum adalah selektor elemen, selektor kelas, dan selektor ID. Misalnya, <b>p</b> akan memilih semua elemen paragraf, <b>.nama-kelas</b> akan memilih semua elemen dengan kelas "nama-kelas", dan <b>#id-elemen</b> akan memilih elemen dengan ID "id-elemen". Selektor ini membantu Anda menyegmentasikan dan menerapkan gaya pada bagian-bagian tertentu dari dokumen HTML.</p>
                        <img class="center-image" src="../../asset/img/modul/css/element_css/selektor.png" alt="Selektor"></li>
                    <li><h4>Properti Dasar</h4>
                        <p>Properti dasar termasuk warna teks, warna latar belakang, dan ukuran font. Dengan mengatur properti ini, Anda dapat memberikan tampilan dasar untuk elemen-elemen di halaman Anda. Misalnya, mengatur <b>color</b> untuk menentukan warna teks, <b>background-color</b> untuk latar belakang, dan <b>font-size</b> untuk ukuran font.</p>
                        <img class="center-image" src="../../asset/img/modul/css/element_css/properti_dasar.png" alt="Properti Dasar"></li>
                    <li><h4>Box Model</h4>
                        <p>Konsep Box Model terdiri dari margin (ruang di luar elemen), border (garis batas elemen), padding (ruang di dalam elemen), dan content (isi elemen). Mengatur properti seperti <b>width</b>, <b>height</b>, <b>margin</b>, <b>padding</b>, dan <b>border</b> memungkinkan Anda mengendalikan tata letak dan ruang di sekitar elemen.</p>
                        <img class="center-image" src="../../asset/img/modul/css/element_css/box_model.png" alt="Box Model"></li>
                    <li><h4>Flexbox</h4>
                        <p>Flexbox adalah teknik tata letak yang fleksibel untuk mengatur elemen-elemen di dalam wadah. Dengan properti seperti <b>display: flex</b>, <b>justify-content</b>, dan <b>align-items</b>, Anda dapat dengan mudah mengatur elemen-elemen dalam satu dimensi (baris atau kolom) dan mengontrol penyebaran dan penempatan mereka.</p>
                        <img class="center-image" src="../../asset/img/modul/css/element_css/flexbox.png" alt="Flexbox"></li>
                    <li><h4>Grid</h4>
                        <p>CSS Grid memperkenalkan tata letak dua dimensi yang memungkinkan Anda membuat struktur tata letak yang lebih kompleks. Dengan properti seperti <b>display: grid</b> dan <b>grid-template-columns</b>, Anda dapat menentukan sejumlah kolom dan baris, serta mengatur ruang antara elemen-elemen.</p>
                        <img class="center-image" src="../../asset/img/modul/css/element_css/grid.png" alt="Grid"></li>
                    <li><h4>Transisi dan Animasi</h4>
                        <p>Properti transisi dan animasi memberikan elemen kehalusan perubahan gaya saat berinteraksi dengan pengguna. Misalnya, properti <b>transition</b> digunakan untuk mengatur durasi, fungsi-timing, dan properti yang akan berubah, sementara pseudokelas <b>:hover</b> dapat memicu efek perubahan tersebut.</p>
                        <img class="center-image" src="../../asset/img/modul/css/element_css/transisi_animasi.png" alt="Transisi dan Animasi"></li>
                    <li><h4>Media Queries</h4>
                        <p>Media queries memungkinkan Anda membuat desain responsif dengan merespons perubahan ukuran layar perangkat. Dengan menentukan aturan CSS untuk kondisi tertentu, seperti lebar maksimum layar, Anda dapat mengoptimalkan tampilan halaman web untuk berbagai perangkat.</p>
                        <img class="center-image" src="../../asset/img/modul/css/element_css/media_queri.png" alt="Media Queries"></li>
                    <li><h4>Komentar</h4>
                    <p>Komentar adalah cara untuk menambahkan catatan atau menjelaskan bagian-bagian dari kode CSS Anda. Ini membantu dalam pemahaman dan kolaborasi antara pengembang.</p>
                    <img class="center-image" src="../../asset/img/modul/css/element_css/komentar.png" alt="Komentar"></li>
                </ul>
                <p>Dengan memahami dan menguasai konsep-konsep ini, Anda dapat membuat halaman web yang lebih dinamis, responsif, dan menarik. Setiap elemen memberikan alat yang kuat untuk mengelola dan menyusun tampilan elemen HTML di halaman web Anda.</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="arrow_left">
            <img src="../../asset/img/arrow_left.svg" alt="Left">
            <a href="">Previous</a>
        </div>
        <div class="arrow_right">
            <a href="">Next</a>
            <img src="../../asset/img/arrow_right.svg" alt="Right">
        </div>
    </div>
</body>
</html>