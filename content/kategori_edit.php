<?php
    if (!defined('INDEX')) die("");

    // Mengambil data kategori berdasarkan ID
    $query = mysqli_query($conn,
    "SELECT * FROM kategori
    WHERE id_kategori='$_GET[id]'");

    $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Kategori Aroma</h2>

<form action="?hal=kategori_update" method="post">
    <!-- Menyimpan ID kategori -->
    <input type="hidden" name="id" value="<?= $data['id_kategori']; ?>">
    <div class="form-group">
        <label for="nama">Nama Kategori</label>
        <div class="input">
            <input type="text" id="nama" name="nama" value="<?= $data['nama_kategori']; ?>" required></div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset" onclick="history.back()">
    </div>
</form>