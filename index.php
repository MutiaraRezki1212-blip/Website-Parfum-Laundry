<?php
    session_start();
    ob_start();

    include "lib/config.php";

    // Cek login
    if(!isset($_SESSION['role'])){
        echo "
        <script>
            alert('Anda harus login terlebih dahulu!');
            window.location='login.php';
        </script>";
        exit;
    }

    $role = $_SESSION['role'];
    define("INDEX", true);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard - Parfum Laundry</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <header>
            <div class="header-left">
                <h1>Dashboard Parfum Laundry</h1>
            </div>


            <div class="header-right">
                <img src="images/<?= $_SESSION['foto']; ?>" class="foto-user">
                <div>
                    <strong><?= $_SESSION['nama_karyawan']; ?></strong>
                    <small><?= ucfirst($_SESSION['role']); ?></small>
                </div>
            </div>
        </header>

        <div class="container">
            <!-- SIDEBAR -->
            <aside>
                <ul class="menu">
                    <li><a href="?hal=dashboard">Dashboard</a></li>
                    <li><a href="?hal=transaksi">Transaksi</a></li>
                    <li><a href="?hal=pelanggan">Pelanggan</a></li>
                    <!-- MENU KHUSUS ADMIN -->
                    <?php if($_SESSION['role']=="admin"){ ?>
                        <li><a href="?hal=parfum">Parfum</a></li>
                        <li><a href="?hal=layanan">Layanan</a></li>
                        <li><a href="?hal=kategori">Kategori</a></li>
                        <li><a href="?hal=karyawan">Karyawan</a></li>
                    <?php } ?>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </aside>

            <!-- KONTEN -->
            <section class="main"> <?php include "konten.php"; ?></section>
        </div>

        <footer>
            &copy; 2026 Parfum Laundry. Mutiara RA
        </footer>
    </body>
</html>