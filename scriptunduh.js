document.getElementById('unduhSertifikat').addEventListener('click', function() {
    // Menggunakan library html2canvas untuk mengonversi HTML/CSS menjadi gambar
    html2canvas(document.querySelector('.container')).then(canvas => {
        // Membuat tautan untuk mengunduh gambar PNG
        const link = document.createElement('a');
        link.href = canvas.toDataURL('image/png');
        link.download = 'sertifikat.png';
        // Menambahkan tautan ke DOM dan memicu klik
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
});