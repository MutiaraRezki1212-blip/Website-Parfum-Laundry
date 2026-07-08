<?php
    if (!defined('INDEX')) die("");

    // Mengambil data dari form
    $kode = mysqli_real_escape_string($conn, $_POST['kode_transaksi']);
    $id_pelanggan = $_POST['id_pelanggan'];
    $id_layanan = $_POST['id_layanan'];
    $id_parfum = $_POST['id_parfum'];
    $id_karyawan = $_SESSION['id_karyawan'];
    $berat = $_POST['berat'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $status = $_POST['status'];

    // Mengambil harga layanan
    $query = mysqli_query($conn,
    "SELECT harga
    FROM layanan
    WHERE id_layanan='$id_layanan'");

    $data = mysqli_fetch_array($query);

    $harga = $data['harga'];

    // Menghitung total harga
    $total = $harga * $berat;

    // Jika status langsung selesai
    if($status=="Selesai"){
        $tanggal_selesai = date("Y-m-d");
    }else{
        $tanggal_selesai = NULL;
    }

    // Simpan ke database
    mysqli_query($conn,
    "INSERT INTO transaksi(
        kode_transaksi,
        id_pelanggan,
        id_layanan,
        id_parfum,
        id_karyawan,
        berat,
        total_harga,
        tanggal_masuk,
        tanggal_selesai,
        status
    )
    VALUES(
        '$kode',
        '$id_pelanggan',
        '$id_layanan',
        '$id_parfum',
        '$id_karyawan',
        '$berat',
        '$total',
        '$tanggal_masuk',
        ".($tanggal_selesai ? "'$tanggal_selesai'" : "NULL").",
        '$status'
    )
    ");

    echo "<script>
    alert('Transaksi berhasil ditambahkan');
    window.location='?hal=transaksi';
    </script>";
?>