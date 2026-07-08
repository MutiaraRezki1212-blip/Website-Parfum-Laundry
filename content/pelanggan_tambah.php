<?php
    if (!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Pelanggan</h2>
<form action="?hal=pelanggan_insert" method="post">

    <div class="form-group">
        <label>Nama Pelanggan</label>
        <div class="input">
            <input type="text" name="nama_pelanggan" required>
        </div>
    </div>

    <div class="form-group">
        <label>No. HP</label>
        <div class="input">
            <input type="text" name="no_hp" required>
        </div>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <div class="input">
            <textarea name="alamat" rows="5"></textarea>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="button" value="Batal" class="tombol reset" onclick="history.back();">
    </div>

</form>