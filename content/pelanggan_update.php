<?php
    if (!defined('INDEX')) die("");

    $id = $_POST['id_pelanggan'];

    $nama = mysqli_real_escape_string($conn,$_POST['nama_pelanggan']);
    $hp = mysqli_real_escape_string($conn,$_POST['no_hp']);
    $alamat = mysqli_real_escape_string($conn,$_POST['alamat']);

    mysqli_query($conn,
    "UPDATE pelanggan
        SET
            nama_pelanggan='$nama',
            no_hp='$hp',
            alamat='$alamat'
        WHERE id_pelanggan='$id'
    ");

    echo "<script>
            alert('Data pelanggan berhasil diperbarui');
            window.location='?hal=pelanggan';
          </script>";
?>