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
?>
