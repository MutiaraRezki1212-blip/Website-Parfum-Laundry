<?php
    if (!defined('INDEX')) die("");

    $id = $_POST['id_transaksi'];

    $id_pelanggan = $_POST['id_pelanggan'];
    $id_layanan = $_POST['id_layanan'];
    $id_parfum = $_POST['id_parfum'];
    $id_karyawan = $_SESSION['id_karyawan'];

    $berat = $_POST['berat'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $status = $_POST['status'];


    // Ambil harga layanan
    $query = mysqli_query($conn,
    "SELECT harga
    FROM layanan
    WHERE id_layanan='$id_layanan'
    ");

    $data = mysqli_fetch_array($query);

    $harga = $data['harga'];

    $total = $harga * $berat;


    // Mengatur tanggal selesai
    if($status=="Diproses"){
        $tanggal_selesai = "NULL";
    }else{
        $tanggal_selesai = "'" . date("Y-m-d") . "'";
    }

    mysqli_query($conn,
    "UPDATE transaksi SET

    id_pelanggan='$id_pelanggan',
    id_layanan='$id_layanan',
    id_parfum='$id_parfum',
    id_karyawan='$id_karyawan',

    berat='$berat',
    total_harga='$total',

    tanggal_masuk='$tanggal_masuk',
    tanggal_selesai=$tanggal_selesai,

    status='$status'

    WHERE id_transaksi='$id'
    ");

    echo "<script>
    alert('Transaksi berhasil diperbarui');
    window.location='?hal=transaksi';
    </script>";
?>