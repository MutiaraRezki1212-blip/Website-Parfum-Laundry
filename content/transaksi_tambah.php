<?php
if (!defined('INDEX')) die("");

// Membuat kode transaksi otomatis
$query = mysqli_query($conn, "SELECT MAX(id_transaksi) AS terakhir FROM transaksi");
$data = mysqli_fetch_array($query);

$nomor = $data['terakhir'] + 1;
$kode = "TRX" . str_pad($nomor, 4, "0", STR_PAD_LEFT);
?>

<h2 class="judul">Tambah Transaksi</h2>
<form action="?hal=transaksi_insert" method="post">

    <div class="form-group">
        <label>Kode Transaksi</label>
        <div class="input">
            <input type="text" name="kode_transaksi" value="<?= $kode; ?>" readonly>
        </div>
    </div>

    <div class="form-group">
        <label>Pelanggan</label>
        <div class="input">
            <select name="id_pelanggan" required>
                <option value="">-- Pilih Pelanggan --</option>
                <?php
                $pelanggan = mysqli_query($conn,
                "SELECT * FROM pelanggan ORDER BY nama_pelanggan");
                while($p=mysqli_fetch_array($pelanggan)){
                    ?>
                    <option value="<?= $p['id_pelanggan']; ?>">
                        <?= $p['nama_pelanggan']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label>Layanan</label>
        <div class="input">
            <select name="id_layanan" required>
                <option value="">-- Pilih Layanan --</option>
                <?php

                $layanan=mysqli_query($conn,
                "SELECT * FROM layanan ORDER BY nama_layanan");
                while($l=mysqli_fetch_array($layanan)){
                ?>
                <option value="<?= $l['id_layanan']; ?>">
                    <?= $l['nama_layanan']; ?>
                </option>
                <?php } ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label>Parfum</label>
        <div class="input">
            <select name="id_parfum" required>
                <option value="">-- Pilih Parfum --</option>
                <?php

                $parfum=mysqli_query($conn,
                "SELECT * FROM parfum
                ORDER BY nama_parfum");
                while($par=mysqli_fetch_array($parfum)){
                ?>
                <option value="<?= $par['id_parfum']; ?>">
                    <?= $par['nama_parfum']; ?>
                </option>
                <?php } ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label>Petugas</label>
        <div class="input">
            <input type="text" value="<?= $_SESSION['nama_karyawan']; ?>" readonly>
        </div>
    </div>

    <div class="form-group">
        <label>Berat (Kg)</label>
        <div class="input">
            <input type="number" name="berat" step="0.1" min="1" required>
        </div>
    </div>

    <div class="form-group">
        <label>Tanggal Masuk</label>
        <div class="input">
            <input type="date" name="tanggal_masuk" value="<?= date('Y-m-d'); ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label>Status</label>

        <div class="input">
            <select name="status">
                <option value="Diproses">Diproses</option>
                <option value="Selesai">Selesai</option>
                <option value="Diambil">Diambil</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="button" value="Batal" class="tombol reset" onclick="history.back();">
    </div>
</form>