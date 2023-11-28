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

    // Pastikan sesuai dengan struktur tabel user yang baru
    $query = "INSERT INTO user (username, email, password, uploaded) VALUES ('$username', '$email', '$password', 0)";
    
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query gagal: " . mysqli_error($conn));
    }

    return mysqli_affected_rows($conn);
}


function getFirstName($email) {
    global $conn;

    $email = mysqli_real_escape_string($conn, $email);

    $query = "SELECT username FROM user WHERE email = '$email'";
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
    $email = $_SESSION['username']; // Menggunakan email dari sesi

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
    $sql = "INSERT INTO berkas (name, filename, path, uploaded) VALUES ('$name', '$new_filename', '$target_path', 1)";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query gagal: " . mysqli_error($conn));
    }

    // Perbarui status 'uploaded' pengguna di tabel 'user'
    $updateUserSql = "UPDATE user SET uploaded = 1 WHERE email = '$email'";
    $updateUserResult = mysqli_query($conn, $updateUserSql);

    if (!$updateUserResult) {
        die("Query gagal: " . mysqli_error($conn));
    }

    // Setelah berhasil, arahkan ke dashboard.php
    header("Location: ../dashboard.php");
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


    function generateRandomID($length = 7) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $id = '';
    for ($i = 0; $i < $length; $i++) {
        $id .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $id;
    }

    $id_sertifikat = generateRandomID();



    function getFullName($email) {
        global $conn;
    
        $email = mysqli_real_escape_string($conn, $email);
    
        $query = "SELECT username FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
    
        if (!$result) {
            die("Query gagal: " . mysqli_error($conn));
        }
    
        $fullName = "Nama"; // Default jika tidak ada hasil
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $fullName = $row['username'];
        }
    
        return $fullName;
    }

    function getUserUploadStatus($email) {
        global $conn;
    
        $email = mysqli_real_escape_string($conn, $email);
    
        $query = "SELECT uploaded FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
    
        if (!$result) {
            die("Query gagal: " . mysqli_error($conn));
        }
    
        // Jika ada hasil, kembalikan nilai uploaded
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['uploaded'] == 1;
        }
    
        // Jika tidak ada hasil, pengguna belum mengunggah
        return false;
    }
    
    
?>
