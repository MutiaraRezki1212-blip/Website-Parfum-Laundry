<?php
    if (!defined('INDEX')) die("");

    // ---- DATA UMUM ----

    // Total pelanggan
    $queryPelanggan = mysqli_query($conn,
    "SELECT COUNT(*) AS total 
    FROM pelanggan
    ");
    $dataPelanggan = mysqli_fetch_array($queryPelanggan);

    // Transaksi total
    $queryTransaksi = mysqli_query($conn,
    "SELECT COUNT(*) AS total
    FROM transaksi
    ");
    $dataTransaksi = mysqli_fetch_array($queryTransaksi);

    // Transaksi diproses
    $queryProses = mysqli_query($conn,
    "SELECT COUNT(*) AS total
    FROM transaksi
    WHERE status='Diproses'
    ");
    $dataProses = mysqli_fetch_array($queryProses);

    // Transaksi selesai
    $querySelesai = mysqli_query($conn,
    "SELECT COUNT(*) AS total
    FROM transaksi
    WHERE status='Selesai'
    ");
    $dataSelesai = mysqli_fetch_array($querySelesai);

    
    // ---- DATA KHUSUS ADMIN ----

    $queryParfum = mysqli_query($conn,
    "SELECT COUNT(*) AS total
    FROM parfum
    ");
    $dataParfum = mysqli_fetch_array($queryParfum);

    $queryKategori = mysqli_query($conn,
    "SELECT COUNT(*) AS total
    FROM kategori
    ");
    $dataKategori = mysqli_fetch_array($queryKategori);

    $queryLayanan = mysqli_query($conn,
    "SELECT COUNT(*) AS total
    FROM layanan
    ");
    $dataLayanan = mysqli_fetch_array($queryLayanan);

    date_default_timezone_set("Asia/Makassar");
?>


<h2 class="judul">
    Dashboard <?= ucfirst($_SESSION['role']); ?>
</h2>

<div class="dashboard">
    <?php if($_SESSION['role']=="admin"){ ?>
        <div class="card">
            <h4>Total Parfum</h4>
            <h1><?= $dataParfum['total']; ?></h1>
        </div>

        <div class="card">
            <h4>Total Kategori</h4>
            <h1><?= $dataKategori['total']; ?></h1>
        </div>

        <div class="card">
            <h4>Total Layanan</h4>
            <h1><?= $dataLayanan['total']; ?></h1>
        </div>
    <?php }else{ ?>

    <div class="card">
        <h4>Total Transaksi</h4>
        <h1><?= $dataTransaksi['total']; ?></h1>
    </div>

    <div class="card">
        <h4>Sedang Diproses</h4>
        <h1><?= $dataProses['total']; ?></h1>
    </div>

    <div class="card">
        <h4>Selesai</h4>
        <h1><?= $dataSelesai['total']; ?></h1>
    </div>
    <?php } ?>
</div>


<div class="info">
    <h3>Selamat Datang, <?= $_SESSION['nama_karyawan']; ?>!</h3>
    <p>
        Selamat datang di 
        <b>Sistem Informasi Parfum Laundry</b>.
        Gunakan menu di sebelah kiri untuk mengelola sistem laundry.
    </p>

    <table class="table-dashboard">
        <tr>
            <td width="220"><b>Total Pelanggan</b></td>
            <td>: <?= $dataPelanggan['total']; ?> Orang</td>
        </tr>

        <tr>
            <td><b>Transaksi Diproses</b></td>
            <td>: <?= $dataProses['total']; ?> Cucian</td>
        </tr>

        <tr>
            <td><b>Transaksi Selesai</b></td>
            <td>: <?= $dataSelesai['total']; ?> Cucian</td>
        </tr>

        <tr>
            <td><b>Tanggal</b></td>
            <td>: <?= date("d F Y"); ?></td>
        </tr>

        <tr>
            <td><b>Jam</b></td>
            <td>: <?= date("H:i:s"); ?> WITA</td>
        </tr>

        <tr>
            <td><b>Status Sistem</b></td>
            <td>: Aktif</td>
        </tr>
    </table>
</div>



<div class="quick-menu">
    <h3>Menu Cepat</h3>
    <a href="?hal=transaksi_tambah" class="btn-dashboard">+ Tambah Transaksi</a>
    <a href="?hal=pelanggan_tambah" class="btn-dashboard">+ Tambah Pelanggan</a>

<?php if($_SESSION['role']=="admin"){ ?>
    <a href="?hal=layanan_tambah" class="btn-dashboard">+ Tambah Layanan</a>
    <a href="?hal=parfum_tambah" class="btn-dashboard">+ Tambah Parfum</a>
    <a href="?hal=kategori_tambah" class="btn-dashboard">+ Tambah Kategori</a>
<?php } ?>
</div>