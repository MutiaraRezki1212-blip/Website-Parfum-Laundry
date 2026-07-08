<?php
    if (!defined('INDEX')) die("");

    // Menyimpan data ke tabel kategori
    $query = mysqli_query($conn,
    "INSERT INTO kategori
    SET nama_kategori='$_POST[nama]'");

    // Mengecek apakah berhasil disimpan
    if($query){

        echo "<script>
                alert('Kategori berhasil ditambahkan');
            </script>";

        echo "<meta http-equiv='refresh'
            content='0; url=?hal=kategori'>";

    }else{

        echo "<script>
                alert('Kategori gagal ditambahkan');
            </script>";

        echo mysqli_error($conn);

    }
?>