<?php
    if (!defined('INDEX')) die("");
?>

<h2 class="judul">Data Pelanggan</h2>
<a href="?hal=pelanggan_tambah" class="tombol">Tambah Pelanggan</a>

<table class="table">
    <tr>
        <th width="50">No</th>
        <th>Nama Pelanggan</th>
        <th>No. HP</th>
        <th>Alamat</th>
        <th width="150">Tanggal Daftar</th>
        <th width="170">Aksi</th>
    </tr>

    <?php

    $no = 1;

    $query = mysqli_query($conn,
    "SELECT *
    FROM pelanggan
    ORDER BY id_pelanggan DESC
    ");
    while($data=mysqli_fetch_array($query)){
    ?>

    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['nama_pelanggan']; ?></td>
        <td><?= $data['no_hp']; ?></td>
        <td><?= $data['alamat']; ?></td>
        <td><?= date('d-m-Y', strtotime($data['tanggal_daftar'])); ?></td>
        <td>
            <a class="tombol edit" href="?hal=pelanggan_edit&id=<?= $data['id_pelanggan']; ?>">Edit</a>
            <a class="tombol hapus" href="?hal=pelanggan_hapus&id=<?= $data['id_pelanggan']; ?>
                "onclick="return confirm('Yakin ingin menghapus data pelanggan?')">Hapus</a>
        </td>
    </tr>

    <?php } ?>

</table>