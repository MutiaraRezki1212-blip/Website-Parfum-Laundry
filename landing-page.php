<?php
    include "lib/config.php";
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Parfum Laundry</title>
        <link rel="stylesheet" href="css/style1.css">
    </head>

    <body>
        <!-- HEADER -->
        <header>
            <h1>Parfum Laundry</h1>
            <nav>
                <ul>
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#layanan">Layanan</a></li>
                    <li><a href="#keunggulan">Keunggulan</a></li>
                    <li><a href="#aroma">Pilihan Aroma</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                    <li><a href="login.php">Login Admin</a></li>
                </ul>
            </nav>
        </header>

        <!-- HERO -->
        <section class="hero">
            <div class="container">
                <h2>Bersih, Wangi, dan Tepat Waktu</h2>
                <p>
                    Parfum Laundry merupakan jasa laundry yang mengutamakan
                    kebersihan, kualitas pelayanan, serta pilihan aroma parfum
                    premium agar pakaian tetap harum, segar, dan nyaman digunakan.
                </p>
                <a href="#layanan" class="btn">Lihat Layanan</a>
            </div>
        </section>

        <!-- TENTANG -->
        <section id="tentang">
            <div class="container">
                <h2>Tentang Kami</h2>
                <p>
                    Parfum Laundry adalah layanan laundry modern yang berkomitmen
                    memberikan hasil cucian yang bersih, rapi, dan harum.
                    Kami menyediakan berbagai layanan laundry dengan proses
                    yang cepat serta berbagai pilihan aroma parfum premium
                    yang dapat dicoba melalui tester di meja kasir sebelum
                    digunakan pada pakaian pelanggan.
                </p>
            </div>
        </section>

        <!-- LAYANAN -->
        <section id="layanan">
            <div class="container">
                <h2>Layanan Kami</h2>
                <div class="layanan">
                <?php
                $query = mysqli_query($conn,"
                    SELECT *
                    FROM layanan
                    ORDER BY id_layanan ASC");
                while($data = mysqli_fetch_array($query)){
                ?>

                    <div class="menu-item">
                        <img src="images/<?= $data['gambar']; ?>" alt="<?= $data['nama_layanan']; ?>">
                        <h3><?= $data['nama_layanan']; ?></h3>
                        <div class="harga">Rp <?= number_format($data['harga'],0,",","."); ?></div>
                        <div class="estimasi">Estimasi : <?= $data['estimasi']; ?></div>
                        <p><?= $data['keterangan']; ?></p>
                    </div>
                <?php } ?>
                </div>
            </div>
        </section>

        <!-- KEUNGGULAN -->
        <section id="keunggulan">
            <div class="container">
                <h2>Mengapa Memilih Parfum Laundry?</h2>
                <div class="fitur">
                    <div class="fitur-item">
                        <h3>✨ Tester Aroma</h3>
                        <p>
                            Pelanggan dapat mencoba tester aroma parfum
                            yang tersedia di meja kasir sebelum memilih.
                        </p>
                    </div>

                    <div class="fitur-item">
                        <h3>⚡ Proses Cepat</h3>
                        <p>
                            Menyediakan layanan reguler maupun express
                            dengan waktu pengerjaan yang efisien.
                        </p>

                    </div>
                    <div class="fitur-item">
                        <h3>🧺 Hasil Berkualitas</h3>
                        <p>
                            Pakaian dicuci dengan bersih,
                            rapi, dan harum sehingga nyaman digunakan.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- AROMA -->
        <section id="aroma">
            <div class="container">
                <h2>Pilihan Aroma Favorit</h2>
                <p>
                    Parfum Laundry menyediakan beberapa varian aroma yang dapat dicoba
                    melalui tester di meja kasir sebelum digunakan pada pakaian pelanggan.
                </p>

                <div class="layanan">
                    <div class="menu-item">
                        <img src="images/ocean-breeze1782733146.jpg" alt="Ocean Breeze">
                        <h3>Ocean Breeze</h3>
                        <p>
                            Aroma segar seperti angin pantai yang memberikan
                            kesan bersih dan menyegarkan.
                        </p>
                    </div>

                    <div class="menu-item">
                        <img src="images/sakura.jpg" alt="Sakura">
                        <h3>Sakura Bloom</h3>
                        <p>
                            Aroma bunga sakura yang lembut dan elegan
                            sehingga pakaian terasa lebih nyaman.
                        </p>
                    </div>

                    <div class="menu-item">
                        <img src="images/rose.jpg" alt="Rose">
                        <h3>Rose Fresh</h3>
                        <p>
                            Aroma mawar yang harum dengan kesan
                            manis dan menyegarkan.
                        </p>
                    </div>

                    <div class="menu-item">
                        <img src="images/lavender.jpg" alt="Lavender">
                        <h3>Lavender</h3>
                        <p>
                            Aroma lavender yang lembut dan
                            memberikan kesan menenangkan.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- KONTAK -->
        <section id="kontak">
            <div class="container">
                <h2>Hubungi Kami</h2>
                <p>
                    <strong>Telepon / WhatsApp</strong><br>
                    08XXXXXXXXXX
                </p>
                <p>
                    <strong>Alamat</strong><br>
                    Romangpolong, Kecamatan Somba Opu,
                    Kabupaten Gowa,
                    Sulawesi Selatan 92113
                </p>

                <p>
                    <strong>Jam Operasional</strong><br>
                    Senin - Minggu<br>
                    08.00 - 20.00 WITA
                </p>
            </div>
        </section>

        <!-- FOOTER -->
        <footer>
            <p>&copy; 2026 Parfum Laundry. Mutiara RA</p>
        </footer>
    </body>
</html>