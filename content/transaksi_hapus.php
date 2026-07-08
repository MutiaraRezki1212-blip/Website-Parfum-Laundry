<?php
    if (!defined('INDEX')) die("");

    $id = $_GET['id'];

    mysqli_query($conn,
    "DELETE FROM transaksi
    WHERE id_transaksi='$id'
    ");

    echo "<script>
    alert('Transaksi berhasil dihapus');
    window.location='?hal=transaksi';
    </script>";
?>