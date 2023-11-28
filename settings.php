<?php
    session_start();
    require 'functions.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/reset.css">
    <link
      rel="shortcut icon"
      href="asset/img/favicon_io/favicon.ico"
      type="image/x-icon"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="asset/img/favicon_io/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="asset/img/favicon_io/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="asset/img/favicon_io/favicon-16x16.png"
    />
    <link
      rel="android-chrome-192x192-icon"
      sizes="192x192"
      href="asset/img/favicon_io/android-chrome-192x192.png"
    />
    <link
      rel="android-chrome-512x512-icon"
      sizes="512x512"
      href="asset/img/favicon_io/android-chrome-512x512.png"
    />
    <link rel="manifest" href="site.webmanifest" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="settings.css">
  </head>
  <body>
    <header>
      <a href="landingpage.php"
        ><img src="asset/img/ruangngoding.png" alt="Ruang Ngoding"
      /></a>
      <nav>
        <ul>
          <li><a href="dashboard.php">Home</a></li>
        </ul>
      </nav>
      <div class="profil">
        <img id="photo-profil" src="asset/img/user.svg" alt="" />
      </div>
      <div class="arrow-p" id="arrow-down-container">
        <img src="asset/img/arrow_down.svg" alt="" id="arrow-down" />
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
    <main>
      <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">Pengaturan</h4>
        <div class="card overflow-hidden">
          <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-3 pt-0">
              <div class="list-group list-group-flush account-settings-links">
                <a
                  class="list-group-item list-group-item-action active"
                  data-toggle="list"
                  href="#account-general"
                  >Profil</a
                >
                <a
                  class="list-group-item list-group-item-action"
                  data-toggle="list"
                  href="#account-change-password"
                  >Akun</a
                >
              </div>
            </div>
            <div class="col-md-9">
              <div class="tab-content">
                <div class="tab-pane fade active show" id="account-general">
                  <div class="card-body media align-items-center">
                    <img
                      src="asset/img/jehuda-1.jpg"
                      alt
                      class="d-block ui-w-80"
                    />
                    <div class="media-body ml-4">
                      <label class="btn btn-outline-primary">
                        Pilih foto
                        <input type="file" class="account-settings-fileinput" />
                      </label>
                      &nbsp;
                      <div class="text-light small mt-1">
                        Allowed JPG, GIF or PNG. Max size of 800K
                      </div>
                    </div>
                  </div>
                  <hr class="border-light m-0" />
                  <div class="card-body">
                    <?php
                    // Mengambil nama dan email dari database
                    $emailFromSession = $_SESSION['username'];
                    $fullName = getFullName($emailFromSession);

                    // Merubah email menjadi huruf kecil
                    $emailLowerCase = strtolower($emailFromSession);

                    // Merubah setiap huruf depan kata pada nama menjadi huruf besar
                    $fullNameFormatted = ucwords(strtolower($fullName));
                    ?>

                  <form action="ubah_profil.php" method="post">
                      <div class="form-group">
                        <label class="form-label" for="namaLengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" value="<?php echo $fullNameFormatted; ?>" />
                      </div>

                      <div class="form-group">
                        <label class="form-label" for="email">E-mail</label>
                        <input type="text" class="form-control mb-1" id="email" name="email" value="<?php echo $emailLowerCase; ?>" />
                      </div>

                      <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
                </div>
                </div>
                <div class="tab-pane fade" id="account-change-password">
                  <div class="card-body pb-2">
                    <form action="ubah_password.php" method="post">
                      <div class="form-group">
                        <label class="form-label" for="passwordSekarang">Password Sekarang</label>
                        <input type="password" class="form-control" id="passwordSekarang" name="passwordSekarang" title="Password Sekarang" />
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="passwordBaru">Password Baru</label>
                        <input type="password" class="form-control" id="passwordBaru" name="passwordBaru" title="Password Baru" />
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="ulangiPasswordBaru">Ulangi Password Baru</label>
                        <input type="password" class="form-control" id="ulangiPasswordBaru" name="ulangiPasswordBaru" title="Ulangi Password Baru" />
                      </div>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="text-right mt-3">
          <button type="submit" class="btn btn-primary">Simpan</button
          >&nbsp;
          <button type="submit" class="btn btn-default">Batal</button>
        </div> -->
      </div>
      <div class="k"></div>
    </main>
    <script
      data-cfasync="false"
      src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="dashboard.js"></script>
    <footer>
      <div class="footer">
        <hr />
        <div class="Copyright"><p>Copyright ©2023 | Ruang Ngoding</p></div>
      </div>
    </footer>
  </body>
</html>