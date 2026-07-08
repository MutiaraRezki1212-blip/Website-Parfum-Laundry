<?php
    if (!defined('INDEX')) die("");
?>

<h2 class="judul">Data Karyawan</h2>
<a href="?hal=karyawan_tambah" class="tombol">Tambah Karyawan</a>

<table class="table">
    <tr>
        <th width="50">No</th>
        <th width="90">Foto</th>
        <th>Nama</th>
        <th>Role</th>
        <th>No HP</th>
        <th>Status</th>
        <th width="170">Aksi</th>
    </tr>

    <?php

    $no=1;

    $query=mysqli_query($conn,"
    SELECT *
    FROM karyawan
    ORDER BY id_karyawan DESC
    ");
    while($data=mysqli_fetch_array($query)){

    ?>

    <tr>
        <td><?= $no++; ?></td>
        <td align="center">
            <img src="images/<?= $data['foto']; ?>" width="70" style="border-radius:8px;">
        </td>
        <td><?= $data['nama_karyawan']; ?></td>
        <td><?= ucfirst($data['role']); ?></td>
        <td><?= $data['no_hp']; ?></td>
        <td><?= $data['status']; ?></td>
        <td>
            <a class="tombol edit" href="?hal=karyawan_edit&id=<?= $data['id_karyawan']; ?>">Edit</a>
            <a class="tombol hapus" href="?hal=karyawan_hapus&id=<?= $data['id_karyawan']; ?> "onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>