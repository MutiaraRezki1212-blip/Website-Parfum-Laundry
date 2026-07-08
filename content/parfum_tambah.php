<?php
    if (!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Parfum Laundry</h2>

<form action="?hal=parfum_insert" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="foto">Foto Parfum</label>
        <div class="input">
            <input type="file" id="foto" name="foto" required>
        </div>
    </div>

    <div class="form-group">
        <label for="nama">Nama Parfum</label>
        <div class="input">
            <input type="text" id="nama" name="nama" required>
        </div>
    </div>

    <div class="form-group">
        <label for="aroma">Aroma</label>
        <div class="input">
            <input type="text" id="aroma" name="aroma" required>
        </div>
    </div>

    <div class="form-group">
        <label for="harga">Harga</label>
        <div class="input">
            <input type="number" id="harga" name="harga" required>
        </div>
    </div>

    <div class="form-group">
        <label for="kategori">Kategori Aroma</label>
        <div class="input">
            <select id="kategori" name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                    <?php
                        $queryKategori = mysqli_query($conn,
                        "SELECT * FROM kategori
                        ORDER BY nama_kategori ASC");

                        while($k = mysqli_fetch_array($queryKategori)){

                            echo "<option value='$k[id_kategori]'>
                                    $k[nama_kategori]
                                </option>";
                        }
                    ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <div class="input">
            <textarea id="deskripsi" name="deskripsi" rows="5"></textarea>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset" onclick="window.location='?hal=parfum'">
    </div>
</form>