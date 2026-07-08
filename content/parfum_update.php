<?php
    if (!defined('INDEX')) die("");

    $error = "";

    // Mengambil data foto
    $foto       = $_FILES['foto']['name'];
    $lokasi     = $_FILES['foto']['tmp_name'];
    $tipefile   = $_FILES['foto']['type'];
    $ukuranfile = $_FILES['foto']['size'];

// ===============================
// JIKA FOTO TIDAK DIGANTI
// ===============================
    if ($foto == "") {

        $query = mysqli_query($conn, 
        "UPDATE parfum SET
            nama_parfum = '$_POST[nama]',
            aroma       = '$_POST[aroma]',
            harga       = '$_POST[harga]',
            deskripsi   = '$_POST[deskripsi]',
            id_kategori = '$_POST[kategori]'
        WHERE id_parfum = '$_POST[id]'
        ");

    }
// ===============================
// JIKA FOTO DIGANTI
// ===============================
    else {

        if ($tipefile != "image/jpeg" &&
            $tipefile != "image/jpg" &&
            $tipefile != "image/png") {

            $error = "Tipe file harus JPG atau PNG.";

        }
        elseif ($ukuranfile >= 1000000) {

            $error = "Ukuran foto maksimal 1 MB.";

        }
        else {

            // Hapus foto lama
            if (file_exists("images/" . $_POST['foto_lama'])) {
                unlink("images/" . $_POST['foto_lama']);
            }

            // Rename foto
            $ext = strrchr($foto, '.');
            $fotoBaru = basename($foto, $ext) . time() . $ext;

            move_uploaded_file($lokasi, "images/" . $fotoBaru);

            $query = mysqli_query($conn, 
            "UPDATE parfum SET
                nama_parfum = '$_POST[nama]',
                aroma       = '$_POST[aroma]',
                harga       = '$_POST[harga]',
                foto        = '$fotoBaru',
                deskripsi   = '$_POST[deskripsi]',
                id_kategori = '$_POST[kategori]'
            WHERE id_parfum = '$_POST[id]'
            ");

        }

    }

// ===============================
// HASIL
// ===============================

    if ($error != "") {

        echo "<script>alert('$error')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?hal=parfum'>";

    }
    elseif ($query) {

        echo "<script>alert('Data parfum berhasil diperbarui')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?hal=parfum'>";

    }
    else {

        echo "<script>alert('Data gagal diperbarui')</script>";
        echo mysqli_error($conn);

    }
?>