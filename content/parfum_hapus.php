<?php
    if (!defined('INDEX')) die("");

    // Mengambil data parfum berdasarkan ID
    $query = mysqli_query($conn,
    "SELECT * FROM parfum
    WHERE id_parfum='$_GET[id]'");

    $data = mysqli_fetch_array($query);

    // Hapus file foto jika ada
    if (!empty($data['foto'])) {

        if (file_exists("images/" . $data['foto'])) {

            unlink("images/" . $data['foto']);

        }

    }

    // Hapus data dari database
    $hapus = mysqli_query($conn,
    "DELETE FROM parfum
    WHERE id_parfum='$_GET[id]'");

    if ($hapus) {
        echo "<script>alert('Data parfum berhasil dihapus')</script>";
        echo "<meta http-equiv='refresh'
            content='0; url=?hal=parfum'>";

    } else {
        echo "<script>alert('Data parfum gagal dihapus')</script>";
        echo mysqli_error($conn);
    }
?>