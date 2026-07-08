<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk - Parfum Laundry</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        Tambah Produk Parfum Laundry
    </header>

    <div class="container">

        <!-- SIDEBAR -->
        <aside>
            <ul class="menu">
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="index.php?hal=layanan">Layanan Laundry</a></li>
                <li><a href="tabel.html">Data Produk</a></li>
                <li><a href="form.html">Tambah Produk</a></li>
                <li><a href="login.html">Logout</a></li>
            </ul>
        </aside>

        <!-- KONTEN -->
        <section class="main">
            <h2 class="judul">Tambah Produk</h2>

            <form action="?hal=parfum_update" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Gambar</label>
                    <div class="input">
                        <input type="file">
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama Produk</label>
                    <div class="input">
                        <input type="text" placeholder="Masukkan nama parfum">
                    </div>
                </div>

                <div class="form-group">
                    <label>Aroma</label>
                    <div class="input">
                        <select>
                            <option>Mawar</option>
                            <option>Sakura</option>
                            <option>Lavender</option>
                            <option>Melati</option>
                            <option>Anggrek</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Jenis</label>
                    <input type="radio" name="jenis"> Premium
                    <input type="radio" name="jenis"> Reguler
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <div class="input">
                        <input type="number" placeholder="Masukkan harga">
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Simpan" class="tombol simpan">
                    <input type="reset" value="Batal" class="tombol reset">
                </div>

            </form>

        </section>

    </div>

    <footer>&copy; 2026 Parfum Laundry. Mutiara RA</footer>
</body>
</html>