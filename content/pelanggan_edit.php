<?php
    if (!defined('INDEX')) die("");

    $id = $_GET['id'];

    $query = mysqli_query($conn,
    "SELECT *
    FROM pelanggan
    WHERE id_pelanggan='$id'
    ");

    $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Pelanggan</h2>

<form action="?hal=pelanggan_update" method="post">
    <input type="hidden" name="id_pelanggan" value="<?= $data['id_pelanggan']; ?>">

    <div class="form-group">
        <label>Nama Pelanggan</label>

        <div class="input">
            <input type="text" name="nama_pelanggan" value="<?= $data['nama_pelanggan']; ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label>No. HP</label>

        <div class="input">
            <input type="text" name="no_hp" value="<?= $data['no_hp']; ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label>Alamat</label>

        <div class="input">
            <textarea name="alamat" rows="5"><?= $data['alamat']; ?></textarea>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Update" class="tombol simpan">
        <input type="button" value="Batal" class="tombol reset" onclick="history.back();">
    </div>
</form>