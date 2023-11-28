<?php
require '../functions.php';

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
    <title>Submission</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="shortcut icon" href="../asset/img/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="../asset/img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../asset/img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../asset/img/favicon_io/favicon-16x16.png">
    <link rel="android-chrome-192x192-icon" sizes="192x192" href="../asset/img/favicon_io/android-chrome-192x192.png">
    <link rel="android-chrome-512x512-icon" sizes="512x512" href="../asset/img/favicon_io/android-chrome-512x512.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="submission.css">
</head>
<body>
    <header>
        <a href="landingpage.php"><img src="../asset/img/ruangngoding.png" alt="Ruang Ngoding" ></a>
        <nav>
            <ul>
                <li><a href="dashboard.html">Home</a></li>
            </ul>
        </nav>
        <div class="profil"><img id="photo-profil" src="../asset/img/user.svg" alt=""></div>
        <div class="arrow-p" id="arrow-down-container">
            <img src="../asset/img/arrow_down.svg" alt="" id="arrow-down">
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
            <h1>Tugas Akhir</h1>
            <p>Buatkanlah website sederhana menggunakan html dan css dengan konsep yaitu website biografi atau profl diri anda ataupun karakter lain seperti film dan lain-lain.</p>
            <div class="berkas">
                <p>Tolong menggunakan internal css karena file yang diunggah hanya file html</p>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="name">Name File: </label>
                    <input type="text" name="name" id="name" placeholder="Masukan nama file html anda" required>
                    <label for="htmlFile">Pilih file HTML:</label>
                    <input type="file" id="htmlFile" name="htmlFile" accept=".html, .htm">
                    <button type="submit" name="unggah">Unggah</button>
                </form>

            </div>
        </div>

        <div class="k"></div>
    </main>

    <script src="../dashboard.js"></script>
    <footer>
        <div class="footer">
            <hr>
            <div class="Copyright"><p>Copyright ©2023 | Ruang Ngoding</p></div>
        </div>
    </footer>
</body>
</html>