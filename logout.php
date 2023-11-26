<?php
// Memulai session
session_start();

// Menghapus semua variabel session
session_unset();

// Menghapus session
session_destroy();

// Mengarahkan pengguna ke halaman login
header("Location: index.php");
exit();
?>
