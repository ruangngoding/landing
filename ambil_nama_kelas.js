 // Fungsi untuk mengambil teks dari elemen dengan id tertentu di file lain
function getTeksKelas() {
    // Buat objek XMLHttpRequest
    var xhr = new XMLHttpRequest();
    
    // Tentukan file yang akan diambil datanya
    var url = 'kelas_login.php';

    // Setel callback function untuk menangani ketika data telah diambil
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Ambil teks dari h1 di file kelas_login.php
            var parser = new DOMParser();
            var htmlDoc = parser.parseFromString(xhr.responseText, 'text/html');
            var judulKelas = htmlDoc.getElementById('judulKelas').innerText;

            // Tempatkan teks ke h2 di sertifikat.php
            document.getElementById('kelas').innerText = judulKelas;
        }
    };

    // Buka koneksi ke file kelas_login.php
    xhr.open('GET', url, true);
    xhr.send();
}

// Panggil fungsi saat dokumen telah dimuat
document.addEventListener('DOMContentLoaded', getTeksKelas);