<?php
    if (!defined('INDEX')) die("");

    // Menghapus data kategori berdasarkan ID
    $query = mysqli_query($conn,
    "DELETE FROM kategori
    WHERE id_kategori='$_GET[id]'");

    // Mengecek apakah berhasil dihapus
    if($query){

        echo "<script>
                alert('Kategori berhasil dihapus');
            </script>";

        echo "<meta http-equiv='refresh'
            content='0; url=?hal=kategori'>";

    }else{

        echo "<script>
                alert('Kategori gagal dihapus');
            </script>";

        echo mysqli_error($conn);

    }
?>