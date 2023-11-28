<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis HTML</title>
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="shortcut icon" href="../../asset/img/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="../../asset/img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../asset/img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../asset/img/favicon_io/favicon-16x16.png">
    <link rel="android-chrome-192x192-icon" sizes="192x192" href="../../asset/img/favicon_io/android-chrome-192x192.png">
    <link rel="android-chrome-512x512-icon" sizes="512x512" href="../../asset/img/favicon_io/android-chrome-512x512.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="../../css/modul/kuis/kuishtml.css">
</head>
<body>
    <header id="navbar">
        <div class="back">
            <a href="../../dashboard.php"><img class="back" src="../../asset/img/arrow_left.svg" alt="logo" href="../../kelas.php"></a>
        </div>
        <nav>
            <ul class="nav-list">
                <li><a href="../../kelas_login.php#judulKelas">Belajar Dasar Pemograman Web</a></li>
            </ul>
        </nav>
    </header>
    <div class="conteiner">
        <!-- <div class="sidebar">
            <h2>Daftar Modul</h2>
            <ul>
                <li><a href="pengenalan.html">Pengenalan</a></li>
                <li><a href="html/sejarahhtml.html">Sejarah HTML</a></li>
                <li><a href="html/strukturhtml.html">Struktur HTML</a></li>
                <li><a href="html/elementhtml.html">Element HTML</a></li>
                <li><a href="css/sejarahcss.html">Sejarah CSS</a></li>
                <li><a href="css/elementcss.html">Element CSS</a></li>
                <li><a href="kuishtml.html">Kuis HTML</a></li>
                <li><a href="kuiscss.html">Kuis CSS</a></li>
                <li><a href="">Lorem</a></li>
            </ul>
        </div> -->
        <div class="main_content">
            <div class="app">
                <div class="quiz">
                    <h2 id="question">Pertanyaan ada disini</h2>
                    <div id="answer-buttons">
                        <button class="btn">Jawaban 1</button>
                        <button class="btn">Jawaban 2</button>
                        <button class="btn">Jawaban 3</button>
                        <button class="btn">Jawaban 4</button>
                    </div>
                    <button id="next-btn">Lanjut</button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="arrow_left">
            <a href="../html/elementhtml.html">Previous</a>
        </div>
        <div class="arrow_right">
            <a href="../css/sejarahcss.html">Next</a>
    </div>
    <script src="kuishtml.js"></script>
</body>
</html>