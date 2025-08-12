<?php
include "../helper/connection.php";
session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['nama_fasilitas'];
    $keterangan = $_POST['keterangan'];
    $slug = $_POST['slug'];

    $foto = $_FILES['foto_fasilitas']['name'];
    $tmp = $_FILES['foto_fasilitas']['tmp_name'];
    $folder = '../image/';

    $newFotoName = uniqid() . '_' . $foto;

    if (move_uploaded_file($tmp, $folder . $newFotoName)) {
        $query = mysqli_query($conn, "INSERT INTO fasilitas (nama_fasilitas, foto_fasilitas, keterangan, slug) VALUES ('$name', '$newFotoName', '$keterangan', '$slug')");
        
        if ($query) {
            echo "<script>
            alert ('Data berhasil ditambahkan!');
            window.location.href = 'admin_fasilitas.php';
            </script>";
        } else {
            echo "<script>
            alert ('Gagal menyimpan ke database');
            </script>";
        }
    } else {
        echo "<script>
        alert ('Gagal upload foto');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Fasilitas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h3 class="mb-4 text-center">Form Tambah Fasilitas</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="nama_fasilitas" class="form-label">Nama Fasilitas</label>
      <input type="text" name="nama_fasilitas" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="keterangan" class="form-label">keterangan</label>
      <input type="text" name="keterangan" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">slug</label>
      <input type="text" name="slug" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="foto_fasilitas" class="form-label">Foto</label>
      <input type="file" name="foto_fasilitas" class="form-control" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    <a href="admin_galeri.php" class="btn btn-secondary">Kembali</a>
  </form>
</div>
</body>
</html>