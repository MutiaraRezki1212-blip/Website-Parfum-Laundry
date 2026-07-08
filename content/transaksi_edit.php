<?php
if (!defined('INDEX')) die("");

$id = $_GET['id'];

$query = mysqli_query($conn,"
SELECT *
FROM transaksi
WHERE id_transaksi='$id'
");

$data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Transaksi</h2>

<form action="?hal=transaksi_update" method="post">
    <input type="hidden" name="id_transaksi" value="<?= $data['id_transaksi']; ?>">

    <div class="form-group">
        <label>Kode Transaksi</label>
        <div class="input">
            <input type="text" value="<?= $data['kode_transaksi']; ?>" readonly>
        </div>
    </div>

    <div class="form-group">
        <label>Pelanggan</label>
        <div class="input">
            <select name="id_pelanggan" required>
                <?php
                $pelanggan = mysqli_query($conn,"SELECT * FROM pelanggan ORDER BY nama_pelanggan");
                while($p=mysqli_fetch_array($pelanggan)){
                ?>

                <option value="<?= $p['id_pelanggan']; ?>"
                <?= ($data['id_pelanggan']==$p['id_pelanggan']) ? "selected" : ""; ?>>
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
                <?php
                $layanan=mysqli_query($conn,"SELECT * FROM layanan ORDER BY nama_layanan");
                while($l=mysqli_fetch_array($layanan)){
                ?>

                <option value="<?= $l['id_layanan']; ?>"
                <?= ($data['id_layanan']==$l['id_layanan']) ? "selected" : ""; ?>>

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
                <?php
                
                $parfum=mysqli_query($conn,
                "SELECT *
                FROM parfum
                ORDER BY nama_parfum");
                while($par=mysqli_fetch_array($parfum)){
                ?>
                <option value="<?= $par['id_parfum']; ?>"
                <?= ($data['id_parfum']==$par['id_parfum']) ? "selected" : ""; ?>>
                    <?= $par['nama_parfum']; ?>
                </option>
                <?php } ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label>Berat (Kg)</label>
        <div class="input">
            <input type="number" name="berat" step="0.1" value="<?= $data['berat']; ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label>Tanggal Masuk</label>
        <div class="input">
            <input type="date" name="tanggal_masuk" value="<?= $data['tanggal_masuk']; ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label>Tanggal Selesai</label>
        <div class="input">
            <input type="date" name="tanggal_selesai" value="<?= $data['tanggal_selesai']; ?>">
        </div>
    </div>

    <div class="form-group">
        <label>Status</label>
        <div class="input">
            <select name="status">
                <option value="Diproses" <?= ($data['status']=="Diproses") ? "selected" : ""; ?>>Diproses</option>
                <option value="Selesai" <?= ($data['status']=="Selesai") ? "selected" : ""; ?>>Selesai</option>
                <option value="Diambil" <?= ($data['status']=="Diambil") ? "selected" : ""; ?>>Diambil</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" value="Update" class="tombol simpan">
        <input type="button" value="Batal" class="tombol reset" onclick="history.back();">
    </div>
</form>