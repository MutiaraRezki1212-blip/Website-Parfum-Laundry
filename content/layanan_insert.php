<?php
    if (!defined('INDEX')) die("");

    $nama = mysqli_real_escape_string($conn, $_POST['nama_layanan']);
    $harga = $_POST['harga'];
    $estimasi = mysqli_real_escape_string($conn, $_POST['estimasi']);
    $keterangan = mysqli_real_escape_string($conn, $_POST['keterangan']);

    // Upload gambar
    $namaFile = $_FILES['gambar']['name'];
    $tmpFile  = $_FILES['gambar']['tmp_name'];

    $ext = pathinfo($namaFile, PATHINFO_EXTENSION);

    $gambar = time() . "." . strtolower($ext);

    move_uploaded_file($tmpFile, "images/" . $gambar);

    mysqli_query($conn, "
        INSERT INTO layanan
        (
            nama_layanan,
            gambar,
            harga,
            estimasi,
            keterangan
        )
        VALUES
        (
            '$nama',
            '$gambar',
            '$harga',
            '$estimasi',
            '$keterangan'
        )
    ");

    echo "<script>
            alert('Data layanan berhasil ditambahkan');
            window.location='?hal=layanan';
          </script>";
?>