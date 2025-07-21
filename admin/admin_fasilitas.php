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
<div class="container">
<h3 class="text-center judul-section mt-6 py-2 rounded">Data Fasilitas SDN Ngadirgo 02</h3>
<div class="text-end mb-3">
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

   <button type="button" class="btn btn-primary mt-4">Tambah</button> 
</div>
<table class="table table-bordered mt-4 text-center align-middle">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">FASILITAS</th>
      <th scope="col">FOTO</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Ruang Guru</td>
      <td>
        <img src="../image/ruang guru.jpeg" style="width: 300px;" >
      </td>
      <td>
        <button type="button" class="btn btn-warning">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ruang TU</td>
      <td>
        <img src="../image/ruang tu.webp" style="width: 300px;" >
      </td>
      <td>
        <button type="button" class="btn btn-warning">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Ruang kelas</td>
     <td>
        <img src="../image/ruang kelas.jpg" style="width: 300px;" >
      </td>
      <td>
        <button type="button" class="btn btn-warning">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
</div>
</tbody>
</table>
</body>