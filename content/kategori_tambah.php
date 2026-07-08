<?php
    if (!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Kategori Aroma</h2>

<form action="?hal=kategori_insert" method="post">
    <div class="form-group">
        <label for="nama">Nama Kategori</label>
        <div class="input">
            <input type="text" id="nama" name="nama" required
                oninvalid="this.setCustomValidity('Nama kategori tidak boleh kosong')"
                oninput="setCustomValidity('')">
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset" onclick="window.location='?hal=kategori'">
    </div>
</form>