<?php
if (isset($_GET['file'])) {
    $file = 'uploads' . $_GET['file']; // Sesuaikan path ke folder file HTML Anda
    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: text/html');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit;
    } else {
        echo "File tidak ditemukan";
    }
}
?>
