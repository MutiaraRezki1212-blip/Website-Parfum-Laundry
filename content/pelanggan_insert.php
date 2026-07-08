<?php
    if (!defined('INDEX')) die("");

    $nama = mysqli_real_escape_string($conn,$_POST['nama_pelanggan']);
    $hp = mysqli_real_escape_string($conn,$_POST['no_hp']);
    $alamat = mysqli_real_escape_string($conn,$_POST['alamat']);

    mysqli_query($conn,
    "INSERT INTO pelanggan
        (
            nama_pelanggan,
            no_hp,
            alamat,
            tanggal_daftar
        )
        VALUES
        (
            '$nama',
            '$hp',
            '$alamat',
            CURDATE()
        )
    ");

    echo "<script>
            alert('Data pelanggan berhasil ditambahkan');
            window.location='?hal=pelanggan';
          </script>";
?>