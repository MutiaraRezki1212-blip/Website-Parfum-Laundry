<?php
    if (!defined('INDEX')) die("");

    $nama = mysqli_real_escape_string($conn,$_POST['nama_karyawan']);
    $jk = mysqli_real_escape_string($conn,$_POST['jenis_kelamin']);
    $hp = mysqli_real_escape_string($conn,$_POST['no_hp']);
    $alamat = mysqli_real_escape_string($conn,$_POST['alamat']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = md5($_POST['password']);
    $role = mysqli_real_escape_string($conn,$_POST['role']);
    $status = mysqli_real_escape_string($conn,$_POST['status']);

    // Upload Foto
    $namaFile = $_FILES['foto']['name'];
    $tmpFile  = $_FILES['foto']['tmp_name'];

    if($namaFile != ""){

        $ext = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));
        $boleh = array("jpg","jpeg","png");

        if(in_array($ext,$boleh)){
            $foto = time()."_".$namaFile;
            move_uploaded_file($tmpFile,"images/".$foto);

        }else{

            echo "<script>
                    alert('Format gambar harus JPG, JPEG atau PNG');
                    history.back();
                  </script>";
            exit;

        }

    }else{

        $foto="default.png";

    }

    mysqli_query($conn,"
        INSERT INTO karyawan
        (
            nama_karyawan,
            foto,
            jenis_kelamin,
            no_hp,
            alamat,
            username,
            password,
            role,
            status
        )

        VALUES
        (
            '$nama',
            '$foto',
            '$jk',
            '$hp',
            '$alamat',
            '$username',
            '$password',
            '$role',
            '$status'
        )
    ");

    echo "<script>
            alert('Data karyawan berhasil ditambahkan');
            window.location='?hal=karyawan';
          </script>";
?>