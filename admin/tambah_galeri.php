<?php
include '../helper/connection.php';

if (isset($_POST['submit'])) {
  $nama = $_POST['nama_kegiatan'];
  $keterangan = $_POST['keterangan'];

  // proses upload foto
  $foto = $_FILES['foto_kegiatan']['name'];
  $tmp = $_FILES['foto_kegiatan']['tmp_name'];
  $folder = '../image/';

  // generate nama unik (opsional)
  $newFotoName = uniqid() . '_' . $foto;
 
  if (move_uploaded_file($tmp, $folder . $newFotoName)) {
    // simpan ke database
    $query = mysqli_query($conn, "INSERT INTO galeri (nama_kegiatan, foto_kegiatan, keterangan) VALUES ('$nama', '$newFotoName', '$keterangan')");

    if ($query) {
      echo "<script>
          alert('Data berhasil ditambahkan'); 
          window.location.href='admin_galeri.php';
          </script>";
    } else {
      echo "<script>
          alert('Gagal menyimpan ke database');
          </script>";
    }
  } else {
    echo "<script>a
          alert('Gagal upload foto');
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Galeri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h3 class="mb-4 text-center">Form Tambah Galeri</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
      <input type="text" name="nama_kegiatan" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="keterangan" class="form-label">keterangan</label>
      <input type="text" name="keterangan" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="foto_kegiatan" class="form-label">Foto</label>
      <input type="file" name="foto_kegiatan" class="form-control" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    <a href="admin_galeri.php" class="btn btn-secondary">Kembali</a>
  </form>
</div>
</body>
</html>
