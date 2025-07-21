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

        <!-- Isi Konten -->
        <div class="galeri-video-wrapper">
            <button class="prev-btn">&#10094;</button> <!-- panah kiri -->
            <div class="container-galerivideo">
                <figure class="figure">
                    <img src="../image/gambar 1.jpg" class="figure-img img-fluid rounded" alt="gambar 1">
                    <figcaption class="figure-caption">Video Perayaan Hari Guru</figcaption>
                </figure>
                <figure class="figure">
                    <img src="../image/gambar 2.jpeg" class="figure-img img-fluid rounded" alt="gambar 2">
                    <figcaption class="figure-caption">Video Upacara Hari Senin</figcaption>
                </figure>
                <figure class="figure">
                    <img src="../image/gambar 3.jpeg" class="figure-img img-fluid rounded" alt="gambar 3">
                    <figcaption class="figure-caption">Video Ekstrakurikuler</figcaption>
                </figure>
                <figure class="figure">
                    <img src="../image/gambar 4.jpeg" class="figure-img img-fluid rounded" alt="gambar 4">
                    <figcaption class="figure-caption">Video Ekstrakurikuler</figcaption>
                </figure>
                <figure class="figure">
                    <img src="../image/gambar 5.jpeg" class="figure-img img-fluid rounded" alt="gambar 5">
                    <figcaption class="figure-caption">Video Ekstrakurikuler</figcaption>
                </figure>
                <!-- Tambah lagi jika ada -->
            </div>
            <button class="next-btn">&#10095;</button> <!-- panah kanan -->
        </div>

        
        <!-- Footer -->
        <footer class="footer">
            <div class="footer-col">
                <h4>Tautan</h4>
                <ul>
                    <li>
                        <a href="https://www.kemdikbud.go.id/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 2048 2048"><path fill="currentColor" d="M1836 517q42 87 63 184t21 195q0 131-36 252t-102 227t-162 190t-212 141v86H768v128h256v128H384v-128h256v-128H0V896h128q0-124 32-238t90-214t140-181t181-140t214-91t239-32q130 0 252 36t227 102t190 162t141 212h2zm-147-5q-73-127-187-217t-254-134q48 78 77 169t47 182zm103 384q0-132-44-256h-356q16 128 16 255t0 257h340q44-124 44-256m-512 0q0-65-4-128t-12-128H784q-8 64-12 127t-4 129zm-256-763q-29 0-55 21t-49 56t-41 78t-33 85t-25 79t-15 60h436q-5-23-15-60t-24-79t-33-85t-41-77t-49-56t-56-22m-224 28q-140 43-254 133T359 512h317q17-90 46-181t78-170M300 640q-44 124-44 256h384q0-65 4-128t12-128zM128 1664h1152v-640H128zm1280-103q88-51 159-122t123-159h-282z"/></svg> Kemendikbud</li></a>
                    <li>
                        <a href=https://disdiksmg.semarangkota.go.id>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 2048 2048"><path fill="currentColor" d="M1836 517q42 87 63 184t21 195q0 131-36 252t-102 227t-162 190t-212 141v86H768v128h256v128H384v-128h256v-128H0V896h128q0-124 32-238t90-214t140-181t181-140t214-91t239-32q130 0 252 36t227 102t190 162t141 212h2zm-147-5q-73-127-187-217t-254-134q48 78 77 169t47 182zm103 384q0-132-44-256h-356q16 128 16 255t0 257h340q44-124 44-256m-512 0q0-65-4-128t-12-128H784q-8 64-12 127t-4 129zm-256-763q-29 0-55 21t-49 56t-41 78t-33 85t-25 79t-15 60h436q-5-23-15-60t-24-79t-33-85t-41-77t-49-56t-56-22m-224 28q-140 43-254 133T359 512h317q17-90 46-181t78-170M300 640q-44 124-44 256h384q0-65 4-128t12-128zM128 1664h1152v-640H128zm1280-103q88-51 159-122t123-159h-282z"/></svg> Dinas Pendidikan</li></a>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Sosial Media</h4>
                <ul>
                    <li>
                        <a href="https://www.youtube.com/sdnngadirgo02">    
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 180"><path fill="#f00" d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134"/><path fill="#fff" d="m102.421 128.06l66.328-38.418l-66.328-38.418z"/></svg> @sdnngadirgo02</li></a>
                    <li>
                        <a href="https://www.instagram.com/sdnngadirgo02">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 256 256"><g fill="none"><rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60"/><rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60"/><path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"/><defs><radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse"><stop stop-color="#fd5"/><stop offset=".1" stop-color="#fd5"/><stop offset=".5" stop-color="#ff543e"/><stop offset="1" stop-color="#c837ab"/></radialGradient><radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse"><stop stop-color="#3771c8"/><stop offset=".128" stop-color="#3771c8"/><stop offset="1" stop-color="#60f" stop-opacity="0"/></radialGradient></defs></g></svg> @sdnngadirgo02</li></a>
                </ul>
            </div>
            <div class="footer-col">
                <h4>About Me</h4>
                <ul>
                <li>
                    <a href="https://maps.google.com/?q=SD+Negeri+Ngadirgo+02">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.56px" height="22px" viewBox="0 0 256 367"><path fill="#34a853" d="M70.585 271.865a371 371 0 0 1 28.911 42.642c7.374 13.982 10.448 23.463 15.837 40.31c3.305 9.308 6.292 12.086 12.714 12.086c6.998 0 10.173-4.726 12.626-12.035c5.094-15.91 9.091-28.052 15.397-39.525c12.374-22.15 27.75-41.833 42.858-60.75c4.09-5.354 30.534-36.545 42.439-61.156c0 0 14.632-27.035 14.632-64.792c0-35.318-14.43-59.813-14.43-59.813l-41.545 11.126l-25.23 66.451l-6.242 9.163l-1.248 1.66l-1.66 2.078l-2.914 3.319l-4.164 4.163l-22.467 18.304l-56.17 32.432z"/><path fill="#fbbc04" d="M12.612 188.892c13.709 31.313 40.145 58.839 58.031 82.995l95.001-112.534s-13.384 17.504-37.662 17.504c-27.043 0-48.89-21.595-48.89-48.825c0-18.673 11.234-31.501 11.234-31.501l-64.489 17.28z"/><path fill="#4285f4" d="M166.705 5.787c31.552 10.173 58.558 31.53 74.893 63.023l-75.925 90.478s11.234-13.06 11.234-31.617c0-27.864-23.463-48.68-48.81-48.68c-23.969 0-37.735 17.475-37.735 17.475v-57z"/><path fill="#1a73e8" d="M30.015 45.765C48.86 23.218 82.02 0 127.736 0c22.18 0 38.89 5.823 38.89 5.823L90.29 96.516H36.205z"/><path fill="#ea4335" d="M12.612 188.892S0 164.194 0 128.414c0-33.817 13.146-63.377 30.015-82.649l60.318 50.759z"/></svg> Jl. Ngadirgo RT 01 RW 08, Kelurahan Ngadirgo, Kecamatan Mijen, Kota Semarang</li></a>
                <li>
                    <a href="tel:081332730489">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 32 32"><g fill="none"><path fill="#f8312f" d="M29.72 25.84L25.1 23.5l-2.51-4.79a.97.97 0 0 0-1.18-.14a6.2 6.2 0 0 0-2.7 3.43c-.23.72-1.07 1.05-1.72.66l-.01-.01l-.01-.01a22.2 22.2 0 0 1-7.61-7.61c0-.01-.01-.02-.01-.02c-.4-.65-.07-1.49.65-1.72a6.13 6.13 0 0 0 3.43-2.7c.23-.38.17-.86-.14-1.18L8.5 7L6.16 2.28a.97.97 0 0 0-1.18-.14a6.13 6.13 0 0 0-2.97 5.01v.01c-.01.1-.01.2-.01.3c0 .14.01.27.02.4a23.16 23.16 0 0 0 3.29 11.22c1.87 3.12 4.49 5.74 7.61 7.61l.01.01c3.44 2.07 7.36 3.2 11.37 3.29c.08 0 .16.01.24.01h.56v-.02a6.19 6.19 0 0 0 4.77-2.96c.22-.38.16-.87-.15-1.18"/><path fill="#bb1d80" d="M13.44 10.59c-.38.63-.87 1.18-1.44 1.64L3.34 3.57C3.8 3 4.35 2.52 4.98 2.14c.38-.23.87-.17 1.18.14l7.14 7.13c.31.32.37.8.14 1.18m7.96 7.98c.38-.23.87-.17 1.18.14l7.13 7.15c.32.31.38.79.15 1.17c-.38.63-.87 1.18-1.44 1.64l-8.66-8.66c.46-.57 1.01-1.06 1.64-1.44"/></g></svg> 0813-3273-0489</li></a>
                <li>
                    <a href="mailto:sdnngadirgo02mijen@gmail.com">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 512 512"><path fill="#96a9b2" d="M511.824 425.007c1.941-5.245-220.916-173.519-220.916-173.519c-27.9-20.589-42.574-20.913-70.164 0c0 0-222.532 168.138-220.659 173.311l-.045.038c.023.045.06.076.091.117a48.5 48.5 0 0 0 8.119 14.157c1.473 1.786 3.248 3.282 4.955 4.837l-.083.064c.136.121.317.177.453.298c7.235 6.454 16.359 10.634 26.495 11.827c.159.019.287.102.446.121h.612c1.541.147 3.006.517 4.584.517h420.721c20.717 0 38.269-13.028 45.241-31.291c.083-.136.211-.234.287-.374z"/><path fill="#b9c5c6" d="M256.133 232.176L1.216 423.364V152.515c0-26.4 21.397-47.797 47.797-47.797h414.24c26.4 0 47.797 21.397 47.797 47.797v270.849z"/><path fill="#edece6" d="m4.189 135.896l217.645 170.949c27.47 20.271 41.918 20.591 69.083 0L508.22 136.167c-3.77-6.834-9.414-12.233-15.869-16.538l2.989-2.342c-7.295-6.641-16.62-10.946-26.971-12.058l-424.455.015c-10.322 1.097-19.662 5.417-26.942 12.043l2.967 2.313c-6.38 4.245-11.972 9.551-15.75 16.296"/><path fill="#dce2e2" d="M4.118 136.254C2.207 141.419 221.63 307.099 221.63 307.099c27.47 20.271 41.918 20.591 69.083 0c0 0 219.103-165.546 217.258-170.64l.045-.037c-.022-.045-.059-.074-.089-.115a47.7 47.7 0 0 0-7.994-13.939c-1.45-1.759-3.198-3.231-4.878-4.763l.082-.063c-.134-.119-.312-.175-.446-.294c-7.124-6.354-16.107-10.47-26.086-11.645c-.156-.019-.283-.1-.439-.119h-.602c-1.517-.145-2.96-.509-4.514-.509H48.81c-20.398 0-37.68 12.828-44.543 30.809c-.082.134-.208.231-.283.368z"/><path fill="#597b91" d="M291.401 154.645h-38.632a6.155 6.155 0 0 0-6.155 6.155v21.722a6.155 6.155 0 0 0 6.155 6.155h31.415a6.155 6.155 0 0 1 6.155 6.155v11.616a6.155 6.155 0 0 1-6.155 6.155h-31.415a6.155 6.155 0 0 0-6.155 6.155v23.578a6.155 6.155 0 0 0 6.155 6.155h41.316a6.155 6.155 0 0 1 6.155 6.155v12.441a6.155 6.155 0 0 1-6.155 6.155h-75.76a6.155 6.155 0 0 1-6.155-6.155V136.461a6.155 6.155 0 0 1 6.155-6.155h74.81c3.749 0 6.627 3.322 6.092 7.033l-1.733 12.028a6.156 6.156 0 0 1-6.093 5.278"/></svg>  sdnngadirgo02mijen@gmail.com</li></a>
                </ul>
            </div>
        </footer>

<script>
  const container = document.querySelector('.container-galerivideo');
  document.querySelector('.next-btn').addEventListener('click', () => {
    container.scrollBy({ left: 320, behavior: 'smooth' });
  });
  document.querySelector('.prev-btn').addEventListener('click', () => {
    container.scrollBy({ left: -320, behavior: 'smooth' });
  });
</script>


</body>
</html>