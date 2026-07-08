<?php
    if (!defined('INDEX')) die("");

    $id=$_GET['id'];

    $query=mysqli_query($conn,"
        SELECT foto
        FROM karyawan
        WHERE id_karyawan='$id'
    ");

    $data=mysqli_fetch_array($query);

    if($data['foto']!="default.png"){
        if(file_exists("images/".$data['foto'])){
            unlink("images/".$data['foto']);
        }
    }

    mysqli_query($conn,"
        DELETE FROM karyawan
        WHERE id_karyawan='$id'
    ");

    echo "<script>
            alert('Data berhasil dihapus');
            window.location='?hal=karyawan';
          </script>";
?>