<?php
    if (!defined('INDEX')) die("");

    $id = $_POST['id_karyawan'];

    $nama = mysqli_real_escape_string($conn,$_POST['nama_karyawan']);
    $jk = mysqli_real_escape_string($conn,$_POST['jenis_kelamin']);
    $hp = mysqli_real_escape_string($conn,$_POST['no_hp']);
    $alamat = mysqli_real_escape_string($conn,$_POST['alamat']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $role = mysqli_real_escape_string($conn,$_POST['role']);
    $status = mysqli_real_escape_string($conn,$_POST['status']);

    // Ambil data lama
    $query = mysqli_query($conn,"
        SELECT *
        FROM karyawan
        WHERE id_karyawan='$id'
    ");

    $lama = mysqli_fetch_array($query);

    $foto = $lama['foto'];

    // Upload foto baru
    if($_FILES['foto']['name']!=""){

        $namaFile = $_FILES['foto']['name'];
        $tmpFile  = $_FILES['foto']['tmp_name'];

        $ext = strtolower(pathinfo($namaFile,PATHINFO_EXTENSION));
        $boleh = array("jpg","jpeg","png");

        if(in_array($ext,$boleh)){

            if($foto!="default.png" && file_exists("images/".$foto)){
                unlink("images/".$foto);
            }

            $foto = time()."_".$namaFile;

            move_uploaded_file(
                $tmpFile,
                "images/".$foto
            );

        }

    }

    // Password
    if($_POST['password']==""){

        mysqli_query($conn,"
            UPDATE karyawan SET
                nama_karyawan='$nama',
                foto='$foto',
                jenis_kelamin='$jk',
                no_hp='$hp',
                alamat='$alamat',
                username='$username',
                role='$role',
                status='$status'
            WHERE id_karyawan='$id'
        ");

    }else{

        $password = md5($_POST['password']);

        mysqli_query($conn,"
            UPDATE karyawan SET
                nama_karyawan='$nama',
                foto='$foto',
                jenis_kelamin='$jk',
                no_hp='$hp',
                alamat='$alamat',
                username='$username',
                password='$password',
                role='$role',
                status='$status'
            WHERE id_karyawan='$id'
        ");

    }

    echo "<script>
            alert('Data berhasil diperbarui');
            window.location='?hal=karyawan';
          </script>";
?>