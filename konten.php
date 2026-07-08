<?php
    if (!defined('INDEX')) die("");

    // Daftar halaman yang boleh dibuka
    $halaman = array(
        "dashboard",

        "parfum",
        "parfum_tambah",
        "parfum_insert",
        "parfum_edit",
        "parfum_update",
        "parfum_hapus",

        "kategori",
        "kategori_tambah",
        "kategori_insert",
        "kategori_edit",
        "kategori_update",
        "kategori_hapus",

        "layanan",
        "layanan_tambah",
        "layanan_insert",
        "layanan_edit",
        "layanan_update",
        "layanan_hapus",

        "pelanggan",
        "pelanggan_tambah",
        "pelanggan_insert",
        "pelanggan_edit",
        "pelanggan_update",
        "pelanggan_hapus",

        "karyawan",
        "karyawan_tambah",
        "karyawan_insert",
        "karyawan_edit",
        "karyawan_update",
        "karyawan_hapus",

        "transaksi",
        "transaksi_tambah",
        "transaksi_insert",
        "transaksi_edit",
        "transaksi_update",
        "transaksi_hapus"
    );

    // Halaman yang dipilih
    if (isset($_GET['hal'])) {
        $hal = $_GET['hal'];
    } else {
        $hal = "dashboard";
    }

    // Memanggil file sesuai halaman
    foreach ($halaman as $h) {
        if ($hal == $h) {
            include "content/$h.php";
        }
    }
?>