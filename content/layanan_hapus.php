<?php
    if (!defined('INDEX')) die("");

    $id = $_GET['id'];

    $query = mysqli_query($conn,
        "SELECT gambar
        FROM layanan
        WHERE id_layanan='$id'");

    $data = mysqli_fetch_array($query);

    if(file_exists("images/".$data['gambar'])){
        unlink("images/".$data['gambar']);
    }

    mysqli_query($conn,
        "DELETE FROM layanan
        WHERE id_layanan='$id'");

    echo "<script>
            alert('Data layanan berhasil dihapus');
            window.location='?hal=layanan';
          </script>";
?>