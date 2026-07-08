<?php
    if (!defined('INDEX')) die("");
?>

<h2 class="judul">Data Layanan Laundry</h2>
<a href="?hal=layanan_tambah" class="tombol">Tambah Layanan</a>

<table class="table">
    <tr>
        <th width="50">No</th>
        <th>Nama Layanan</th>
        <th width="120">Gambar</th>
        <th>Harga</th>
        <th>Estimasi</th>
        <th>Keterangan</th>
        <th width="170">Aksi</th>
    </tr>
    <?php

    $no = 1;

    $query = mysqli_query($conn,
        "SELECT * FROM layanan
        ORDER BY id_layanan DESC");
    while($data = mysqli_fetch_array($query)){
    ?>

    <tr>
        <td><?= $no++; ?></td>
        <td align="center">
            <img src="images/<?= $data['gambar']; ?>" width="90" style="border-radius:8px;">
        </td>

        <td><?= $data['nama_layanan']; ?></td>
        <td>Rp <?= number_format($data['harga'],0,",","."); ?></td>
        <td><?= $data['estimasi']; ?></td>
        <td><?= $data['keterangan']; ?></td>

        <td>
            <a class="tombol edit" href="?hal=layanan_edit&id=<?= $data['id_layanan']; ?>">Edit</a>
            <a class="tombol hapus" href="?hal=layanan_hapus&id=<?= $data['id_layanan']; ?>
                "onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>