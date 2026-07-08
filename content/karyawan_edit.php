<?php
    if (!defined('INDEX')) die("");

    $id=$_GET['id'];

    $query=mysqli_query($conn,"
        SELECT *
        FROM karyawan
        WHERE id_karyawan='$id'
    ");

    $data=mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Karyawan</h2>

<form action="?hal=karyawan_update" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_karyawan" value="<?= $data['id_karyawan']; ?>">
    
    <div class="form-group">
        <label>Nama</label>
        <div class="input"><input type="text" name="nama_karyawan" value="<?= $data['nama_karyawan']; ?>" required></div>
    </div>

    <div class="form-group">
        <label>Foto Lama</label>
        <div class="input"><img src="images/<?= $data['foto']; ?>" width="120"></div>
    </div>

    <div class="form-group">
        <label>Foto Baru</label>
        <div class="input"><input type="file" name="foto"></div>
    </div>

    <div class="form-group">
        <label>Jenis Kelamin</label>
        <div class="input">
            <input type="radio" name="jenis_kelamin" value="Laki-laki" <?=($data['jenis_kelamin']=="Laki-laki")?"checked":"";?>>Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan" <?=($data['jenis_kelamin']=="Perempuan")?"checked":"";?>>Perempuan
        </div>
    </div>

    <div class="form-group">
        <label>No HP</label>
        <div class="input"><input type="text" name="no_hp" value="<?= $data['no_hp']; ?>"></div>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <div class="input"><textarea name="alamat" rows="4"><?= $data['alamat']; ?></textarea></div>
    </div>

    <div class="form-group">
        <label>Username</label>
        <div class="input"><input type="text" name="username" value="<?= $data['username']; ?>"></div>
    </div>

    <div class="form-group">
        <label>Password Baru</label>
        <div class="input"><input type="password" name="password">
            <small>Kosongkan jika tidak diubah.</small>
        </div>
    </div>

    <div class="form-group">
        <label>Role</label>
        <div class="input">
            <select name="role">
                <option value="admin" <?=($data['role']=="admin")?"selected":"";?>>Admin</option>
                <option value="kasir" <?=($data['role']=="kasir")?"selected":"";?>>Kasir</option>
                <option value="karyawan" <?=($data['role']=="karyawan")?"selected":"";?>>Karyawan</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label>Status</label>
        <div class="input">
            <select name="status">
                <option <?=($data['status']=="Aktif")?"selected":"";?>>Aktif</option>
                <option <?=($data['status']=="Nonaktif")?"selected":"";?>>Nonaktif</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Update" class="tombol simpan">
        <input type="button" value="Batal" class="tombol reset" onclick="history.back();">
    </div>
</form>