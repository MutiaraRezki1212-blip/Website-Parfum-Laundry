<?php
    if (!defined('INDEX')) die("");

    $id = $_GET['id'];

    $query = mysqli_query($conn,
        "SELECT * FROM layanan
        WHERE id_layanan='$id'");

    $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Layanan Laundry</h2>

<form action="?hal=layanan_update" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_layanan" value="<?= $data['id_layanan']; ?>">
    <input type="hidden" name="gambar_lama" value="<?= $data['gambar']; ?>">

    <div class="form-group">
        <label>Nama Layanan</label>
        <div class="input">
            <input type="text" name="nama_layanan" value="<?= $data['nama_layanan']; ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label>Gambar Saat Ini</label>
        <div class="input">
            <img src="images/<?= $data['gambar']; ?> "width="150">
        </div>
    </div>

    <div class="form-group">
        <label>Ganti Gambar</label>
        <div class="input">
            <input type="file" name="gambar" accept="image/*">
            <small>Kosongkan jika tidak ingin mengganti gambar.</small>
        </div>
    </div>

    <div class="form-group">
        <label>Harga</label>
        <div class="input">
            <input type="number" name="harga" value="<?= $data['harga']; ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label>Estimasi</label>
        <div class="input">
            <input type="text" name="estimasi" value="<?= $data['estimasi']; ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label>Keterangan</label>
        <div class="input">
            <textarea name="keterangan" rows="5"><?= $data['keterangan']; ?></textarea>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Update" class="tombol simpan">
        <input type="button" value="Batal" class="tombol reset" onclick="history.back();">
    </div>
</form>