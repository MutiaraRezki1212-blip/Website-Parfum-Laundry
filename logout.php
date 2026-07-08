<?php
    session_start();

    // Menghapus semua data session
    session_destroy();

    // Menampilkan pesan
    echo "<script>
            alert('Anda berhasil logout');
            window.location='login.php';
        </script>";
?>