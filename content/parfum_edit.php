<?php
    if (!defined('INDEX')) die("");

    // Mengambil data parfum berdasarkan ID
    $query = mysqli_query($conn,
    "SELECT * FROM parfum
    WHERE id_parfum='$_GET[id]'");

    $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Parfum Laundry</h2>

<form action="?hal=parfum_update" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['id_parfum']; ?>">
    <input type="hidden" name="foto_lama" value="<?= $data['foto']; ?>">

    <div class="form-group">
        <label>Foto Lama</label>
        <div class="input">
            <img src="images/<?= $data['foto']; ?>" width="120">
        </div>
    </div>

    <div class="form-group">
        <label for="foto">Ganti Foto</label>
        <div class="input">
            <input type="file" id="foto" name="foto">
        </div>
    </div>

    <div class="form-group">
        <label for="nama">Nama Parfum</label>
        <div class="input">
            <input type="text" id="nama" name="nama" value="<?= $data['nama_parfum']; ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label for="aroma">Aroma</label>
        <div class="input">
            <input type="text" id="aroma" name="aroma" value="<?= $data['aroma']; ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label for="harga">Harga</label>
        <div class="input">
            <input type="number" id="harga" name="harga" value="<?= $data['harga']; ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label for="kategori">Kategori</label>
        <div class="input">
            <select name="kategori">
                <?php
                    $kategori = mysqli_query($conn,
                    "SELECT * FROM kategori
                    ORDER BY nama_kategori");

                    while($k = mysqli_fetch_array($kategori)){

                        if($k['id_kategori']==$data['id_kategori']){

                            echo "<option value='$k[id_kategori]' selected>
                            $k[nama_kategori]
                            </option>";

                        }else{

                            echo "<option value='$k[id_kategori]'>
                            $k[nama_kategori]
                            </option>";

                        }
                    }
                ?>

            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <div class="input">
            <textarea id="deskripsi" name="deskripsi" rows="5"><?= $data['deskripsi']; ?></textarea>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset" onclick="history.back()">
    </div>
</form>