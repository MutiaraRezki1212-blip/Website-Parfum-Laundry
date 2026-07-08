<?php
    if (!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Layanan Laundry</h2>

<form action="?hal=layanan_insert" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label>Nama Layanan</label>
        <div class="input">
            <input type="text" name="nama_layanan" required>
        </div>
    </div>

    <div class="form-group">
        <label>Gambar</label>
        <div class="input">
            <input type="file" name="gambar" accept="image/*" required>
        </div>
    </div>

    <div class="form-group">
        <label>Harga</label>
        <div class="input">
            <input type="number" name="harga" required>
        </div>
    </div>

    <div class="form-group">
        <label>Estimasi</label>
        <div class="input">
            <input type="text" name="estimasi"
                placeholder="Contoh: 2 Hari atau 6 Jam" required>
        </div>
    </div>

    <div class="form-group">
        <label>Keterangan</label>
        <div class="input">
            <textarea name="keterangan" rows="5"></textarea>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="button" value="Batal" class="tombol reset" onclick="history.back();">
    </div>
</form>