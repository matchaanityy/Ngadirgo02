<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD Negeri Ngadirgo 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style2.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="header-text">
        <h1>WELCOME TO WEBSITE</h1>
        <h2>SD NEGERI NGADIRGO 02</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed eu aliquam tempor.</p>
        </div>
    </header>

    <!-- Tombol Toggle Sidebar -->
    <button class="toggle-btn" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
    </button>

        <!-- Sidebar --> 
    <div id="sidebar" class="offcanvas-start">
        <div class="brand-logo">
            <img src="../image/logo.jpeg" alt="Logo Sekolah" style="width: 60px;">
            <h6 class="mt-2">SDN Ngadirgo02</h6>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="http://localhost/ngadirgo02/admin/dashboard.php"><i class="fas fa-home"></i><span class="sidebar-title"> Beranda</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user"></i><span class="sidebar-title"> Profil</span></a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/ngadirgo02/admin/admin_galeri.php"><i class="fas fa-image"></i><span class="sidebar-title"> Galeri</span></a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/ngadirgo02/admin/admin_fasilitas.php"><i class="fas fa-school"></i><span class="sidebar-title"> Fasilitas</span></a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/ngadirgo02/admin/admin_ekstra.php"><i class="fas fa-futbol"></i><span class="sidebar-title"> Ekstrakurikuler</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-newspaper"></i><span class="sidebar-title"> Berita</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user-plus"></i><span class="sidebar-title"> PPDB</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-book"></i><span class="sidebar-title"> Perpustakaan</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-info-circle"></i><span class="sidebar-title"> About Us</span></a></li>
        </ul>
    </div>
    
        <!-- Isi Konten -->
        <div class="container mt-5">

            <!-- Statistik -->
            <div class="stats">
            <div class="stat-box">
                <img src="../image/ruang guru.jpeg" alt="Guru">
                <p><strong>Jumlah Tenaga Pendidik</strong><br>10 orang</p>
            </div>
            <div class="stat-box">
                <img src="../image/drumband.jpg" alt="Siswa">
                <p><strong>Jumlah Siswa</strong><br>90 siswa</p>
            </div>
            <div class="stat-box">
                <img src="../image/ruang kelas.jpg" alt="Ruang">
                <p><strong>Jumlah Ruangan</strong><br>9 ruang</p>
            </div>
            </div>

            <!-- Container Flex Utama -->
            <div class="row-flex">
            
            <!-- Sambutan Kepala Sekolah -->
            <div class="sambutan-card">
                <div class="sambutan">
                <div class="sambutan-img">
                    <img src="../image/gambar 2.jpeg" alt="Foto Kepala Sekolah">
                </div>
                <div class="sambutan-text">
                    <h5>SAMBUTAN KEPALA SEKOLAH</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut enim euismod, tempor risus id, tincidunt orci. Vestibulum ut lorem et velit iaculis bibendum. Duis a nulla quis orci placerat ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut enim euismod, tempor risus id, tincidunt orci. Vestibulum ut lorem et velit iaculis bibendum. Duis a nulla quis orci placerat ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut enim euismod, tempor risus id, tincidunt orci. Vestibulum ut lorem et velit iaculis bibendum. Duis a nulla quis orci placerat ullamcorper.</p>
                </div>
                </div>
            </div>

            <!-- Berita Terbaru -->
            <div class="berita">
                <h2>BERITA TERBARU</h2>

                <div class="berita-card">
                <img src="../image/gambar 3.jpeg" alt="Berita 1">
                <div class="berita-info">
                    <small>29 Juni 2025</small>
                    <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></p>
                </div>
                </div>

                <div class="berita-card">
                <img src="../image/gambar 3.jpeg" alt="Berita 2">
                <div class="berita-info">
                    <small>28 Juni 2025</small>
                    <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></p>
                </div>
                </div>

                <div class="berita-card">
                <img src="../image/gambar 3.jpeg" alt="Berita 3">
                <div class="berita-info">
                    <small>27 Juni 2025</small>
                    <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></p>
                </div>
                </div>

                <div class="berita-card">
                <img src="../image/gambar 3.jpeg" alt="Berita 4">
                <div class="berita-info">
                    <small>26 Juni 2025</small>
                    <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></p>
                </div>
                </div>

                <div class="berita-card">
                <img src="../image/gambar 3.jpeg" alt="Berita 4">
                <div class="berita-info">
                    <small>26 Juni 2025</small>
                    <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></p>
                </div>
                </div>

                <div class="berita-card">
                <img src="../image/gambar 3.jpeg" alt="Berita 4">
                <div class="berita-info">
                    <small>26 Juni 2025</small>
                    <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></p>
                </div>
                </div>
            </div>

            </div>

            <!-- Peta -->
            <div class="map">
                <h3>PETA SDN NGADIREGO 02</h3>
                <iframe src="https://maps.app.goo.gl/hpFXGHjwKbeFPAYL8?g_st=aw" allowfullscreen></iframe>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/script.js"></script>

</body>
</html>