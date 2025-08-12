<?php
include '../helper/connection.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM ekstrakurikuler WHERE id_ekstra = $id");
$data = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
    $name = $_POST['jenis_ekstra'];
    $deskripsi = $_POST['deskripsi_ekstra'];

    $foto = $_FILES['foto_ekstra']['name'];
    $tmp = $_FILES['foto_ekstra']['tmp_name'];
    $folder = '../image/';

    if ($foto) {
        $newFotoName = uniqid() . '_' . $foto;
        move_uploaded_file($tmp, $folder . $newFotoName);
        $query = mysqli_query($conn, "UPDATE ekstrakurikuler SET jenis_ekstra='$name', foto_ekstra='$newFotoName', deskripsi_ekstra='$deskripsi' WHERE id_ekstra=$id");
    } else {
        $query = mysqli_query($conn, "UPDATE ekstrakurikuler SET jenis_ekstra='$name', deskripsi_ekstra='$deskripsi' WHERE id_ekstra=$id");
    }

    if ($query) {
        echo "<script>
        alert('Data berhasil diupdate!');
        window.location.href = 'admin_ekstra.php';
        </script>";
    } else {
        echo "<script>
        alert('Gagal mengupdate data');
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit ekstra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3 class="mb-4 text-center">Form Edit Ekstrakurikuler</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="jenis_ekstra" class="form-label">Jenis Ekstrakurikuler</label>
            <input type="text" name="jenis_ekstra" class="form-control" value="<?= $data['jenis_ekstra']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi_ekstra" class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi_ekstra" class="form-control" value="<?= $data['deskripsi_ekstra']; ?>" required>
        </div>  
        <div class="mb-3">
            <label for="foto_ekstra" class="form-label">Foto</label>
            <input type="file" name="foto_ekstra" class="form-control">
            <input type="hidden" name="foto_lama" value="<?= $data['foto_ekstra']; ?>">
            <img src="../image/<?= $data['foto_ekstra']; ?>" style="width: 90px; margin-top: 10px;">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <a href="admin_ekstra.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
