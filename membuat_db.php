<?php

    $host = "localhost";
    $user = "root";
    $pass = "";

    // Membuat koneksi
    $conn = mysqli_connect($host, $user, $pass);

    // Cek koneksi
    if (!$conn) {
        die("Koneksi gagal : " . mysqli_connect_error());
    }

    // Membuat database
    $sql = "CREATE DATABASE db_parfum_laundry";

    if (mysqli_query($conn, $sql)) {
        echo "Database berhasil dibuat";
    } else {
        echo "Database gagal dibuat : " . mysqli_error($conn);
    }

    mysqli_close($conn);

?>