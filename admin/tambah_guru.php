<?php
include '../helper/connection.php';

if (isset($_POST['submit'])) {
  $nama = $_POST['nama_guru'];
  $jabatan = $_POST['jabatan'];

  // proses upload foto
  $foto = $_FILES['foto_guru']['name'];
  $tmp = $_FILES['foto_guru']['tmp_name'];
  $folder = '../image/';

  // generate nama unik (opsional)
  $newFotoName = uniqid() . '_' . $foto;
 
  if (move_uploaded_file($tmp, $folder . $newFotoName)) {
    // simpan ke database
    $query = mysqli_query($conn, "INSERT INTO profile_guru (nama_guru, foto_guru, jabatan) VALUES ('$nama', '$newFotoName', '$jabatan')");

    if ($query) {
      echo "<script> alert('Data berhasil ditambahkan'); window.location.href='profile_guru.php';</script>";
    } else {
      echo "<script>alert('Gagal menyimpan ke database');</script>";
    }
  } else {
    echo "<script>alert('Gagal upload foto');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Guru</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h3 class="mb-4 text-center">Form Tambah Guru</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="nama_guru" class="form-label">Nama Guru</label>
      <input type="text" name="nama_guru" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="jabatan" class="form-label">Jabatan</label>
      <input type="text" name="jabatan" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="foto_guru" class="form-label">Foto</label>
      <input type="file" name="foto_guru" class="form-control" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    <a href="profile_guru.php" class="btn btn-secondary">Kembali</a>
  </form>
</div>
</body>
</html>
