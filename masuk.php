<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="shortcut icon" href="asset/img/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/img/favicon_io/apple-touch-icon.png"> 
    <link rel="icon" type="image/png" sizes="32x32" href="asset/img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/img/favicon_io/favicon-16x16.png">
    <link rel="android-chrome-192x192-icon" sizes="192x192" href="asset/img/favicon_io/android-chrome-192x192.png">
    <link rel="android-chrome-512x512-icon" sizes="512x512" href="asset/img/favicon_io/android-chrome-512x512.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="css/login.css">
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
    </header>
    
    <main>
        <section class="input-section">
            <form id="inputDaftar" action="login_process.php" method="post">
                <div class="contan">
                    <h1>Masuk Akun Ruang Ngoding</h1>

                    <div class="email">
                        <img src="asset/img/mail.svg" alt="">
                        <h3>Email</h3>
                        <input type="text" name="email" id="" placeholder="Masukkan Email" required>
                        <p>Masukkan alamat email kamu yang terdaftar</p>
                    </div>

                    <div class="pass">
                        <img src="asset/img/lock.svg" alt="">
                        <h3>Password</h3>
                        <input type="password" name="password" id="" placeholder="Masukkan Password" required>
                        <p>Masukkan password kamu</p>
                    </div>

                    <div class="tanyaakun">
                        <button type="submit">Masuk</button>
                        <p>atau</p>
                        <p>kamu belum punya akun? Ayo <a href="daftar.php">Daftar</a></p>
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
