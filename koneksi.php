<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'siakaduser');
    define('DB_PASS', 'siakad123');
    define('DB_NAME', 'siakad_unm');

    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (!$link) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>