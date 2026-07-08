<?php
    session_start();

    include "lib/config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,
    "SELECT *
    FROM karyawan
    WHERE username='$username'
    AND password='$password'
    AND status='Aktif'
    ");


    $data = mysqli_fetch_array($query);

    $jumlahData = mysqli_num_rows($query);


    if($jumlahData > 0){

        $_SESSION['id_karyawan'] = $data['id_karyawan'];
        $_SESSION['nama_karyawan'] = $data['nama_karyawan'];
        $_SESSION['foto'] = $data['foto'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['username'] = $data['username'];


        header("Location:index.php");

    }else{

        echo "
        <script>
        alert('Username atau Password salah!');
        window.location='login.php';
        </script>
        ";

    }
?>