<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "ruangngoding";

// Menghubungkan ke database MySQL
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function cekLogin($email, $password) {
    global $conn;

    $email = mysqli_real_escape_string($conn, trim($email));

    $query = "SELECT * FROM user WHERE email = '$email'";
    echo "Query: $query<br>";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query gagal: " . mysqli_error($conn));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        // Verifikasi password menggunakan password_verify
        if (password_verify($password, $row['password'])) {
            return true; // Email dan password cocok
        }
    }

    // Jika loop selesai tanpa return, berarti password tidak cocok
    echo "Login gagal: Password tidak cocok untuk email yang diberikan.";
    return false;
}

function tambah($data) {
    global $conn;

    $username = htmlspecialchars($data['username']);
    $email = htmlspecialchars($data['email']);
    $password = password_hash(htmlspecialchars($data['password']), PASSWORD_DEFAULT);

    $query = "INSERT INTO user VALUES ('','$username','$email','$password')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query gagal: " . mysqli_error($conn));
    }

    return mysqli_affected_rows($conn);
}

function getFirstName($username) {
    global $conn;

    $username = mysqli_real_escape_string($conn, $username);

    $query = "SELECT username FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query gagal: " . mysqli_error($conn));
    }

    $namaDepan = "Nama";

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $namaDepan = explode(' ', $row['username'])[0];
    }

    return $namaDepan;
}

function tambahhtml($data) {
    global $conn;

    $name = htmlspecialchars($data['name']);
    $file = $_FILES['htmlFile'];

    // Direktori untuk menyimpan file
    $upload_dir = 'uploads/';

    // Periksa apakah direktori sudah ada, jika tidak, buat
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Ambil data file
    $filename = $file['name'];
    $tmp_path = $file['tmp_name'];

    // Tentukan nama file baru berdasarkan input nama
    $new_filename = $name . '_' . uniqid() . '.html';
    $target_path = $upload_dir . $new_filename;

    // Simpan file ke direktori server
    move_uploaded_file($tmp_path, $target_path);

    // Simpan informasi file ke database
    $sql = "INSERT INTO berkas (name, filename, path) VALUES ('$name', '$new_filename', '$target_path')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query gagal: " . mysqli_error($conn));
    }

    // Setelah berhasil, arahkan ke dashboard.php
    header("Location: dashboard.php");
    exit(); // Pastikan tidak ada output setelah header
}

function getHtmlFiles() {
    global $conn;

    $sql = "SELECT * FROM berkas";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query gagal: " . mysqli_error($conn));
    }

    $htmlFiles = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $htmlFiles[] = $row;
    }

    return $htmlFiles;
}
?>
