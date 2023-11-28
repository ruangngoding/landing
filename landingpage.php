<?php
session_start();
require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Ngoding</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="asset/img/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/img/favicon_io/apple-touch-icon.png"> 
    <link rel="icon" type="image/png" sizes="32x32" href="asset/img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/img/favicon_io/favicon-16x16.png">
    <link rel="android-chrome-192x192-icon" sizes="192x192" href="asset/img/favicon_io/android-chrome-192x192.png">
    <link rel="android-chrome-512x512-icon" sizes="512x512" href="asset/img/favicon_io/android-chrome-512x512.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="landingpage.css">
</head>
<body>
    <header>
        <div class="logo-container">
            <img class="logo" src="asset/img/TI_UNIMA.png" alt="logo" href="landingpage.php">
        </div>
        <nav>
            <ul class="nav-list">
                <li><a href="#kelebihan">Learning Path</a></li>
                <li><a href="#tentangkami">Tentang Kami</a></li>
                <li class="mobile-login"><a href="masuk.php"><button>Masuk</button></a></li>
                <li class="mobile-register"><a href="daftar.php"><button>Daftar</button></a></li>
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
        <div id="content">
            <div class="content-desc">
                <h1>Nikmatilah pembelajaran yang <br>mendalam dan bermakna</h1>
                <p>Belajar terarah dengan learning path mendalam dan bermakna<p>
                <button type="button">Belajar Sekarang</button>
            </div>
            <div class="content-img">
                <img class="content" src="asset/img/orang.png" alt="">
            </div>
        </div>
        <div id="kelebihan" class="kelebihan">
            <h2>Kenapa Ruang Ngoding berbeda</h2>
            <p>Ruang Ngoding menghadirkan materi yang sesuai </p>
            <p>dengan dunia kerja, serta instruktur yang berpengalaman dibidangnya</p>
            
            <div class="kel">
                <span class="keu">
                    <div class="kurikurum">Kurikulum terstruktur</div>
                    <div class="blajarflex">Belajar Fleksibel</div>
                    <div class="sertifikat">Sertifikat Penyelesaian</div>
                </span>
                <span><img src="asset/img/logo.png" alt=""></span>
            </div>
    
        </div>
    
        <div id="learningpath">
            <h2>Learning Path</h2>
            <div class="learningpathstyle">
                <div class="path-item">
                    <img src="asset/img/front.jpg" alt="">
                    <p class="item-desc">Pelajari dasar HTML & CSS yang merupakan fondasi utama untuk menjadi front-end web developer</p>
                </div>
                <div class="path-item">
                    <img src="asset/img/back.jpg" alt="">
                    <p class="item-desc">Pelajari dasar JavaScript, dari fundamental, sintaks dan fitur ES6, hingga konsep automation test menggunakan framework populer.</p>
                </div>
                <div class="path-item">
                    <img src="asset/img/android.jpg" alt="">
                    <p class="item-desc">Buat aplikasi pertamamu pada Android Studio dengan mempelajari dasar Activity, Intent, View & ViewGroup, Style & Theme sampai RecyclerView.</p>
                </div>
                <div class="path-item">
                    <img src="asset/img/ios.jpg" alt="">
                    <p class="item-desc">Belajar bahasa Swift buat kamu yang ingin mempelajari konsep dasar pemrograman dalam mengembangkan aplikasi iOS, iPadOS, dan macOS.</p>
                </div>
            </div>
        </div>
        <div id="arrow-learning">
            <img src="asset/img/arrow_left.svg" alt="arrow-left">
            <img src="asset/img/arrow_right.svg" alt="arrow-right">
        </div>
        <br>
        <br>
        <div id="tentangkami">
            <ul class="cur">
                <li class="card">
                    <span class="profil">
                        <img class="pp" src="asset/img/agung-pp.jpg" alt="">
                    </span>
                    <span class="kt">
                        <div class="tprofil">
                            <p class="lorempp">“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel earum delectus unde ab ratione odit reprehenderit, eius neque debitis architecto ipsa, iste sint laudantium tempora a sequi ipsum aliquid! Ullam sint error nobis quo, suscipit optio sequi voluptas blanditiis iste impedit possimus odio, facere, quasi consequatur.”</p>
                            <br>
                            <p class="p">Agustinus Henan</p>
                            <p class="p">Founder Ruang Ngoding</p>
                            <br>
                            <hr>
                            <br>
                        </div>
                        <div class="pmedsos">
                            <span><a href="https://www.instagram.com/agung.henan/"><img class="logomedsos" src="asset/img/medsos/6929237_instagram_icon.svg" alt="Ig"></a></span>
                            <span><a href="mailto:agustinushenan01@gmail.com?subject=Subjek%20Email&body=Isi%20Email"><img class="logomedsos" src="asset/img/medsos/7089163_gmail_google_icon.svg" alt="Gmail"></a></span>
                            <span><a href="https://www.linkedin.com/in/agustinus-henan-641b53217/"><img class="logomedsos" src="asset/img/medsos/341103_linkedin_icon.svg" alt="Linkedin"></a></span>
                        </div>
                    </span>
                </li>
                <li class="card">
                    <span class="profil">
                        <img src="asset/img/jehuda-pp.jpg" alt="">
                    </span>
                    <span class="kt">
                        <div class="tprofil">
                            <p class="lorempp">“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel earum delectus unde ab ratione odit reprehenderit, eius neque debitis architecto ipsa, iste sint laudantium tempora a sequi ipsum aliquid! Ullam sint error nobis quo, suscipit optio sequi voluptas blanditiis iste impedit possimus odio, facere, quasi consequatur.”</p>
                            <br>
                            <p class="p">Jehuda Wuwungan</p>
                            <p class="p">Founder Ruang Ngoding</p>
                            <br>
                            <hr>
                            <br>
                        </div>
                        <div class="pmedsos">
                            <span><a href="https://www.instagram.com/jehudavd/"><img class="logomedsos" src="asset/img/medsos/6929237_instagram_icon.svg" alt="Ig"></a></span>
                            <span><a href="mailto:jehudavd@gmail.com?subject=Subjek%20Email&body=Isi%20Email"><img class="logomedsos" src="asset/img/medsos/7089163_gmail_google_icon.svg" alt="Gmail"></a></span>
                            <span><a href="https://www.linkedin.com/in/jehuda-wuwungan"><img class="logomedsos" src="asset/img/medsos/341103_linkedin_icon.svg" alt="Linkedin"></a></span>
                        </div>
                    </span>
                </li>
            </ul>
            
        </div>
        <div id="arrow-profil">
            <img id="arrow-left" src="asset/img/arrow_left.svg" alt="arrow-left">
            <img id="arrow-right" src="asset/img/arrow_right.svg" alt="arrow-right">
        </div>
    </main>

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