<?php
    if (!defined('INDEX')) die("");

    $id = $_GET['id'];

    mysqli_query($conn,
    "DELETE FROM pelanggan
    WHERE id_pelanggan='$id'
    ");

    echo "<script>
            alert('Data pelanggan berhasil dihapus');
            window.location='?hal=pelanggan';
          </script>";
?>