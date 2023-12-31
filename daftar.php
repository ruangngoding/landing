<?php
require 'functions.php';

// cek tombol sumbit sudah ditekan atau belum
if (isset($_POST['submit'])) {
    //cek berhasil tambah akun baru
    if (tambah($_POST) > 0 ) {
        echo "
            <Script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'masuk.php';
            </Script>
        ";  
    }else {
        echo "data gagal ditambahkan!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="shortcut icon" href="asset/img/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/img/favicon_io/apple-touch-icon.png"> 
    <link rel="icon" type="image/png" sizes="32x32" href="asset/img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/img/favicon_io/favicon-16x16.png">
    <link rel="android-chrome-192x192-icon" sizes="192x192" href="asset/img/favicon_io/android-chrome-192x192.png">
    <link rel="android-chrome-512x512-icon" sizes="512x512" href="asset/img/favicon_io/android-chrome-512x512.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="css/daftar.css">
</head>
<body>
    <header>
        <div class="logo-container">
        <a href="index.php"><img class="logo" src="asset/img/TI_UNIMA.png" alt="logo"></a>
        </div>
        <nav>
            <ul class="nav-list">
                <li><a href="index.php#kelebihan">Learning Path</a></li>
                <li><a href="index.php#tentangkami">Tentang Kami</a></li>
                <li class="mobile-login"><a href="masuk.php"><button>Masuk</button></a></li>
                <li class="mobile-register"><a href="daftar.php"><button>Daftar</button></a></li>
            </ul>
        </nav>
        <div class="button-container">
            <a class="log" href="masuk.php"><button>Masuk</button></a>
            <a class="sign" href="daftar.php"><button>Daftar</button></a>
        </div>
        <button class="hamburger-menu">&#9776;</button>
    </header>
    
    <main>
        <section class="input-section">
        <form id="inputDaftar" action="daftar.php" method="post">
                <div class="contan">
                    <h1>Daftarkan Akun Ruang Ngoding</h1>
                    
                    <div class="nama">
                        <img src="asset/img/user to.svg" alt="User">
                        <h3>Nama Lengkap</h3>
                        <input type="text" name="username" id="" placeholder="Nama Lengkap" required>
                        <p>Masukkan nama asli kamu, nama akan digunakan pada data sertifikat</p>
                    </div>

                    <div class="email">
                        <img src="asset/img/mail.svg" alt="">
                        <h3>Email</h3>
                        <input type="text" name="email" id="" placeholder="Email" required>
                        <p>Gunakan alamat  email aktif kamu</p>
                    </div>

                    <div class="pass">
                        <img src="asset/img/lock.svg" alt="">
                        <h3>Password</h3>
                        <input type="password" name="password" id="" placeholder="Masukkan password baru" required>
                        <p>Gunakan minimal 8 karakter dengan kombinasi angka dan huruf</p>
                    </div>

                    <div class="tanyaakun">
                        <button type="submit" name="submit">Daftar</button>
                        <p>atau</p>
                        <p>kamu sudah punya akun? Ayo <a href="masuk.php">Masuk</a></p>
                    </div> 
                </div>
            </form>
        </section>
    </main>

    <script src="script.js"></script>
    <footer>
        <div class="footer">
            <hr>
            <div class="Copyright"><p>Copyright ©2023 | Ruang Ngoding</p></div>
        </div>
    </footer>
</body>
</html>
