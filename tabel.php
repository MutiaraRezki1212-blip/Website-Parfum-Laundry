<!DOCTYPE html>
<html>
<head>
    <title>Data Produk - Parfum Laundry</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        Data Produk Parfum Laundry
    </header>

    <div class="container">

        <!-- SIDEBAR -->
        <aside>
            <ul class="menu">
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="tabel.html">Data Produk</a></li>
                <li><a href="form.html">Tambah Produk</a></li>
                <li><a href="login.html">Logout</a></li>
            </ul>
        </aside>

        <!-- KONTEN -->
        <section class="main">
            <h2 class="judul">Data Produk</h2>

            <a href="form.html" class="tombol">Tambah</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Aroma</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                
                    <tr>
                        <td>1</td>
                        <td><img src="src/sakura.jpg" width="80"></td>
                        <td>Sakura Bliss</td>
                        <td>Sakura</td>
                        <td>Rp 30.000</td>
                        <td>
                            <a href="#" class="tombol edit">Edit</a>
                            <a href="#" class="tombol hapus">Hapus</a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><img src="src/lavender.jpg" width="80"></td>
                        <td>Lavender Calm</td>
                        <td>Lavender</td>
                        <td>Rp 28.000</td>
                        <td>
                            <a href="#" class="tombol edit">Edit</a>
                            <a href="#" class="tombol hapus">Hapus</a>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td><img src="src/rose.jpg" width="80"></td>
                        <td>Rose Fresh</td>
                        <td>Mawar</td>
                        <td>Rp 25.000</td>
                        <td>
                            <a href="#" class="tombol edit">Edit</a>
                            <a href="#" class="tombol hapus">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </section>

    </div>

</body>
</html>