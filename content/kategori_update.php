<?php
    if (!defined('INDEX')) die("");

    // Mengubah data kategori
    $query = mysqli_query($conn,
    "UPDATE kategori
    SET nama_kategori='$_POST[nama]'
    WHERE id_kategori='$_POST[id]'");

    // Mengecek apakah update berhasil
    if($query){

        echo "<script>
                alert('Kategori berhasil diubah');
            </script>";

        echo "<meta http-equiv='refresh'
            content='0; url=?hal=kategori'>";

    }else{

        echo "<script>
                alert('Kategori gagal diubah');
            </script>";

        echo mysqli_error($conn);

    }
?>