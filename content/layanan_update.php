<?php
    if (!defined('INDEX')) die("");

    $id = $_POST['id_layanan'];

    $nama = mysqli_real_escape_string($conn,$_POST['nama_layanan']);
    $harga = $_POST['harga'];
    $estimasi = mysqli_real_escape_string($conn,$_POST['estimasi']);
    $keterangan = mysqli_real_escape_string($conn,$_POST['keterangan']);

    $gambar = $_POST['gambar_lama'];

    if($_FILES['gambar']['name'] != ""){
        if(file_exists("images/".$gambar)){
            unlink("images/".$gambar);
        }
        $namaFile = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        $ext = pathinfo($namaFile, PATHINFO_EXTENSION);
        $gambar = time().".".$ext;
        move_uploaded_file($tmp,"images/".$gambar);
    }

    mysqli_query($conn,"
        UPDATE layanan SET
            nama_layanan='$nama',
            gambar='$gambar',
            harga='$harga',
            estimasi='$estimasi',
            keterangan='$keterangan'
        WHERE id_layanan='$id'
    ");

    echo "<script>
            alert('Data layanan berhasil diperbarui');
            window.location='?hal=layanan';
          </script>";
?>