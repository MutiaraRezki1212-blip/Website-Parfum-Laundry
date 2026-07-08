<?php
    if (!defined('INDEX')) die("");
?>

<h2 class="judul">Data Parfum Laundry</h2>
<a class="tombol" href="?hal=parfum_tambah">Tambah Parfum</a>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama Parfum</th>
            <th>Aroma</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php
            $query = mysqli_query($conn,

            "SELECT *
            FROM parfum
            LEFT JOIN kategori
            ON parfum.id_kategori = kategori.id_kategori
            ORDER BY id_parfum DESC");

            $no = 0;
            
            while($data = mysqli_fetch_array($query)){
            $no++;
        ?>
    <tr>
        <td><?= $no ?></td>
        <td><img src="images/<?= $data['foto'] ?>" width="80"></td>
        <td><?= $data['nama_parfum'] ?></td>
        <td><?= $data['aroma'] ?></td>
        <td>Rp <?= number_format($data['harga'],0,",",".") ?></td>
        <td><?= $data['nama_kategori'] ?></td>
        <td><?= $data['deskripsi'] ?></td>
        <td><a class="tombol edit" href="?hal=parfum_edit&id=<?= $data['id_parfum'] ?>">Edit</a>
            <a class="tombol hapus" href="?hal=parfum_hapus&id=<?= $data['id_parfum']; ?>
            "onclick="return confirm('Yakin ingin menghapus parfum <?= $data['nama_parfum']; ?> ?')">Hapus</a>
        </td>
    </tr>    
    <?php
    }
    ?>
    </tbody>
</table>