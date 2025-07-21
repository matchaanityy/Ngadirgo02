<?php

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD Negeri Ngadirgo 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <img src="../image/logo.jpeg" alt="Logo Sekolah" class="logo">
            <div class="header-text">
            <h1>WELCOME TO WEBSITE</h1>
            <h2>SD NEGERI NGADIREGO 02</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed eu aliquam tempor.</p>
            </div>
        </header>

        <!-- Navigasi -->
        <nav>
            <a href="http://localhost/ngadirgo02/">BERANDA</a>
                <div class="dropdown">
                    <a href="#" class="dropbtn">PROFIL</a>
                    <div class="dropdown-content">
                    <a href = "http://localhost/ngadirgo02/user/profile.php"> Profil Sekolah</a>
                    <a href = "http://localhost/ngadirgo02/user/profile%20guru.php"> Profil Guru</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" class="dropbtn">GALERI</a>
                    <div class="dropdown-content">
                    <a href = "http://localhost/ngadirgo02/user/galeri.php"> Galeri Foto </a>
                    <a href = "http://localhost/ngadirgo02/user/galerivideo.php"> Galeri Video </a>
                    </div>
                </div>
            <a href="http://localhost/ngadirgo02/user/fasilitas.php">FASILITAS</a>
            <a href="http://localhost/ngadirgo02/user/ekstra.php">EKSTRAKURIKULER</a>
            <a href="http://localhost/ngadirgo02/user/ekstra.php">BERITA</a>
            <a href="http://localhost/ngadirgo02/user/ppdb.php">PPDB</a>
            <a href="http://localhost/ngadirgo02/user/perpus.html">PERPUSTAKAAN</a>
            <a href="http://localhost/ngadirgo02/user/about%20us.php">ABOUT US</a>
        </nav>

    <div class = "container">
        <div class = "ppdb">
        <h2> INFORMASI PENDAFTARAN MURID BARU SD NEGERI NGADIRGO 02 TAHUN PELAJARAN 2025/2026 </h2>
    </div>

    <div class="mt-3">
    <div class="d-flex justify-content-between align-items-center px-3 py-3"
        style="background-color: #5f7ea8; border-radius: 8px; max-width: 100%;">
        <span class="text-white fw-bold">Jadwal Pendaftaran</span>
    </div>
    </div>
    <div class="cards" style="width: 20rem;">
    <div class="cards-body">
        <h5 class="card-title">Tanggal dan Waktu :</h5>
        <p class="card-text">10 - 14 Juni 2025, Selama 24 Jam</p>
        <h5 class="card-title">Tempat :</h5>
        <p class="card-text"> Bebas ( Selama Terhubung dengan Internet ) </p>
    </div>
    </div>

    <div class="mt-3">
    <div class="d-flex justify-content-between align-items-center px-3 py-3"
        style="background-color: #5f7ea8; border-radius: 8px; max-width: 100%;">
        <span class="text-white fw-bold">Panduan Pendaftaran Pengisian Formulir</span>
        <a href="file/panduan-pendaftaran.pdf" class="btn btn-outline-light btn-sm" download>
        <i class="bi bi-download"></i> Unduh
        </a>
    </div>
    </div>
    </div>
    
 <!-- Footer -->
        <footer>
            <div class="footer-section">
                <h4>Tautan</h4>
                <p><a href="#">Kemendikbud</a></p>
                <p><a href="#">Dinas Pendidikan</a></p>
            </div>
            <div class="footer-section">
                <h4>Sosial Media</h4>
                <p><a href="#">Instagram</a></p>
                <p><a href="#">Facebook</a></p>
            </div>
                <div class="footer-section">
                <h4>About Me</h4>
                <p>Website ini dibuat untuk keperluan informasi dan publikasi SD Negeri Ngadirego 02.</p>
            </div>
        </footer>

</body>
</html>