<?php
include '../helper/connection.php'; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD Negeri Ngadirgo 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/style2.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user"></i><span class="sidebar-title"> Profil</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                    <li><a class="dropdown-item" href="http://localhost/ngadirgo02/admin/profile_siswa.php">Jumlah Siswa</a></li>
                    <li><a class="dropdown-item" href="http://localhost/ngadirgo02/admin/profile_guru.php">Profil Guru</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/ngadirgo02/admin/admin_galeri.php"><i class="fas fa-image"></i><span class="sidebar-title"> Galeri</span></a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/ngadirgo02/admin/admin_fasilitas.php"><i class="fas fa-school"></i><span class="sidebar-title"> Fasilitas</span></a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/ngadirgo02/admin/admin_ekstra.php"><i class="fas fa-futbol"></i><span class="sidebar-title"> Ekstrakurikuler</span></a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/ngadirgo02/admin/admin_berita.php"><i class="fas fa-newspaper"></i><span class="sidebar-title"> Berita</span></a></li>
        </ul>
    </div>

<div class="container">
  <h3 class="text-center judul-section mt-4 py-2 rounded">Data Tenaga Pendidik SDN Ngadirgo 02</h3>

  <div class="text-end mb-3">
    <a href="tambah_guru.php" class="btn btn-primary mt-4">Tambah</a>
  </div>

  <table class="table table-bordered mt-4 text-center align-middle">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">NAMA</th>
        <th scope="col">FOTO</th>
        <th scope="col">JABATAN</th>
        <th scope="col">AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      $query = mysqli_query ($conn, "SELECT * FROM profile_guru ORDER BY id_guru ASC");
      while ($data = mysqli_fetch_assoc($query)) {
      ?>
        <tr>
          <th scope="row"><?= $no++ ?></th>
          <td><?= $data['nama_guru'] ?></td>
          <td>
            <img src="../image/<?= $data['foto_guru'] ?>" style="width: 90px;">
          </td>
          <td><?= $data['jabatan'] ?></td>
          <td>
            <a href="edit_guru.php?id=<?= $data['id_guru']; ?>" class="btn btn-warning">Edit</a>
            <a href="delete_guru.php?id=<?= $data['id_guru']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
