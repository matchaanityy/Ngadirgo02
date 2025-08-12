<?php
include "../helper/connection.php";

if (isset($_POST['submit'])){
    $name = $_POST['judul'];
    $deskripsi = $_POST['isi'];

    $foto = $_FILES['foto_berita']['name'];
    $tmp = $_FILES['foto_berita']['tmp_name'];
    $folder = '../image/';

    $newFotoName = uniqid() . '_' . $foto;

    if (move_uploaded_file($tmp, $folder . $newFotoName)) {
        $query = mysqli_query($conn, "INSERT INTO berita (judul, foto_berita, isi) VALUES ('$name', '$newFotoName', '$deskripsi')");

        if ($query) {
            echo "<script>
            alert ('Data berhasil ditambahkan!');
            window.location.href = 'admin_berita.php';
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
    <title>Tambah Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>  
<div class="container mt-5">
    <h3 class="mb-4 text-center">Form Tambah Berita</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea name="isi" class="form-control" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label for="foto_berita" class="form-label">Foto</label>
            <input type="file" name="foto_berita" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <a href="admin_berita.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>