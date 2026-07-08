<?php
    if (!defined('INDEX')) die("");
?>

<h2 class="judul">Data Transaksi Laundry</h2>
<a href="?hal=transaksi_tambah" class="tombol">Tambah Transaksi</a>

<table class="table">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Pelanggan</th>
        <th>Layanan</th>
        <th>Parfum</th>
        <th>Kasir</th>
        <th>Berat (Kg)</th>
        <th>Total</th>
        <th>Tgl Masuk</th>
        <th>Tgl Selesai</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

    <?php

    $no = 1;

    $query = mysqli_query($conn,
    "SELECT
        transaksi.*,
        pelanggan.nama_pelanggan,
        layanan.nama_layanan,
        parfum.nama_parfum,
        karyawan.nama_karyawan

    FROM transaksi

    JOIN pelanggan
    ON transaksi.id_pelanggan = pelanggan.id_pelanggan

    JOIN layanan
    ON transaksi.id_layanan = layanan.id_layanan

    JOIN parfum
    ON transaksi.id_parfum = parfum.id_parfum

    JOIN karyawan
    ON transaksi.id_karyawan = karyawan.id_karyawan

    ORDER BY transaksi.id_transaksi DESC
    ");

    while($data=mysqli_fetch_array($query)){
    ?>

    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['kode_transaksi']; ?></td>
        <td><?= $data['nama_pelanggan']; ?></td>
        <td><?= $data['nama_layanan']; ?></td>
        <td><?= $data['nama_parfum']; ?></td>
        <td><?= $data['nama_karyawan']; ?></td>
        <td><?= $data['berat']; ?></td>
        <td>Rp <?= number_format($data['total_harga'],0,",","."); ?></td>
        <td><?= $data['tanggal_masuk']; ?></td>
        <td><?= $data['tanggal_selesai']; ?></td>
        <td><?php $status = strtolower($data['status']);
            echo "<span class='badge $status'>".$data['status']."</span>";?>
        </td>
        <td><a href="?hal=transaksi_edit&id=<?= $data['id_transaksi']; ?>"
            class="tombol edit">Edit</a>
            <a href="?hal=transaksi_hapus&id=<?= $data['id_transaksi']; ?>" class="tombol hapus" onclick="return confirm('Yakin ingin menghapus transaksi?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>