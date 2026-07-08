<?php
    if (!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Karyawan</h2>

<form action="?hal=karyawan_insert" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Karyawan</label>
        <div class="input"><input type="text" name="nama_karyawan" required></div>
    </div>

    <div class="form-group">
        <label>Foto</label>
        <div class="input"><input type="file" name="foto" accept="image/*" required></div>
    </div>

    <div class="form-group">
        <label>Jenis Kelamin</label>
        <div class="input">
            <input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
        </div>
    </div>

    <div class="form-group">
        <label>No HP</label>
        <div class="input"><input type="text" name="no_hp" required></div>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <div class="input"><textarea name="alamat" rows="4"></textarea></div>
    </div>

    <div class="form-group">
        <label>Username</label>
        <div class="input"><input type="text" name="username"></div>
    </div>

    <div class="form-group">
        <label>Password</label>
        <div class="input"><input type="password" name="password"></div>
    </div>

    <div class="form-group">
        <label>Role</label>
        <div class="input">
            <select name="role">
            <option value="admin">Admin</option>
            <option value="kasir">Kasir</option>
            <option value="karyawan">Karyawan</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label>Status</label>
        <div class="input">
            <select name="status">
            <option>Aktif</option>
            <option>Nonaktif</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="button" value="Batal" class="tombol reset "onclick="history.back();">
    </div>
</form>