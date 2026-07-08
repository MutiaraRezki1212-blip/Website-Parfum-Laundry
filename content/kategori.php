<?php
    if (!defined('INDEX')) die("");
?>

<h2 class="judul">Data Kategori Aroma</h2>
<a class="tombol" href="?hal=kategori_tambah">Tambah Kategori</a>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php
            $query = mysqli_query($conn,
            "SELECT * FROM kategori
            ORDER BY id_kategori DESC");
            $no = 0;
            while($data = mysqli_fetch_array($query)){
            $no++;
        ?>

        <tr>
            <td><?= $no ?></td>
            <td><?= $data['nama_kategori'] ?></td>
            <td><a class="tombol edit" href="?hal=kategori_edit&id=<?= $data['id_kategori'] ?>">Edit</a>
                <a class="tombol hapus" href="?hal=kategori_hapus&id=<?= $data['id_kategori'] ?>
                "onclick="return confirm('Yakin ingin menghapus kategori ini?')">Hapus</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>