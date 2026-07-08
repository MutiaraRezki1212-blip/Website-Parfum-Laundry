<?php
    if (!defined('INDEX')) die("");

    // Mengambil data foto
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $tipefile = $_FILES['foto']['type'];
    $ukuranfile = $_FILES['foto']['size'];

    $error = "";

    // Validasi tipe file
    if($tipefile != "image/jpeg" &&
    $tipefile != "image/jpg" &&
    $tipefile != "image/png"){

        $error = "Tipe file harus JPG atau PNG";

    }

    // Validasi ukuran maksimal 1 MB
    elseif($ukuranfile >= 1000000){

        $error = "Ukuran foto maksimal 1 MB";

    }
    else{

        // Mengganti nama file agar tidak sama
        $ext = strrchr($foto,'.');

        $foto = basename($foto,$ext).time().$ext;

        move_uploaded_file($lokasi,"images/".$foto);

        // Simpan ke database
        $query = mysqli_query($conn,

        "INSERT INTO parfum SET
        nama_parfum='$_POST[nama]',
        aroma='$_POST[aroma]',
        harga='$_POST[harga]',
        foto='$foto',
        deskripsi='$_POST[deskripsi]',
        id_kategori='$_POST[kategori]'");
    }

    if($error != ""){

    echo "<script>
            alert('$error');
          </script>";

    echo "<meta http-equiv='refresh'
        content='0;url=?hal=parfum_tambah'>";

    }

    elseif($query){

        echo "<script>
                alert('Data parfum berhasil disimpan');
            </script>";

        echo "<meta http-equiv='refresh'
            content='0;url=?hal=parfum'>";

    }

    else{

        echo "<script>
                alert('Data parfum gagal disimpan');
            </script>";

        echo mysqli_error($conn);

    }
?>