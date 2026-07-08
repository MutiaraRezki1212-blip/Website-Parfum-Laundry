<?php
    // Konfigurasi koneksi database
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "db_parfum_laundry";

    // Membuat koneksi
    $conn = mysqli_connect($host, $user, $pass, $db);

    // Mengecek apakah koneksi berhasil
    if (!$conn) {
        die("Koneksi database gagal : " . mysqli_connect_error());
    }
?>