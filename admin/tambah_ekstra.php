<?php
include "../helper/connection.php";

if (isset($_POST['submit'])){
    $name = $_POST['jenis_ekstra'];
    $deskripsi = $_POST['deskripsi_ekstra'];

    $foto = $_FILES['foto_ekstra']['name'];
    $tmp = $_FILES['foto_ekstra']['tmp_name'];
    $folder = '../image/';

    $newFotoName = uniqid() . '_' . $foto;

    if (move_uploaded_file($tmp, $folder . $newFotoName)) {
        $query = mysqli_query($conn, "INSERT INTO ekstrakurikuler (jenis_ekstra, foto_ekstra, deskripsi_ekstra) VALUES ('$name', '$newFotoName', '$deskripsi')");

        if ($query) {
            echo "<script>
            alert ('Data berhasil ditambahkan!');
            window.location.href = 'admin_ekstra.php';
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
    <title>Tambah Ekstrakurikuler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>  
<div class="container mt-5">
    <h3 class="mb-4 text-center">Form Tambah Ekstrakurikuler</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="jenis_ekstra" class="form-label">Jenis Ekstrakurikuler</label>
            <input type="text" name="jenis_ekstra" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi_ekstra" class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi_ekstra" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="foto_ekstra" class="form-label">Foto</label>
            <input type="file" name="foto_ekstra" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <a href="admin_ekstra.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>