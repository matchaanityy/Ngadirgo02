<?php
include '../helper/connection.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM berita WHERE id_berita = $id");
$data = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
    $name = $_POST['judul'];
    $deskripsi = $_POST['isi'];

    $foto = $_FILES['foto_berita']['name'];
    $tmp = $_FILES['foto_berita']['tmp_name'];
    $folder = '../image/';

    if ($foto) {
        $newFotoName = uniqid() . '_' . $foto;
        move_uploaded_file($tmp, $folder . $newFotoName);
        $query = mysqli_query($conn, "UPDATE berita SET judul='$name', foto_berita='$newFotoName', isi='$deskripsi' WHERE id_berita=$id");
    } else {
        $query = mysqli_query($conn, "UPDATE berita SET judul='$name', isi='$deskripsi' WHERE id_berita=$id");
    }

    if ($query) {
        echo "<script>
        alert('Data berhasil diupdate!');
        window.location.href = 'admin_berita.php';
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
    <title>Edit Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3 class="mb-4 text-center">Form Edit Berita</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" value="<?= $data['judul']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <input type="text" name="isi" class="form-control" value="<?= $data['isi']; ?>" required>
        </div>  
        <div class="mb-3">
            <label for="foto_berita" class="form-label">Foto</label>
            <input type="file" name="foto_berita" class="form-control">
            <input type="hidden" name="foto_lama" value="<?= $data['foto_berita']; ?>">
            <img src="../image/<?= $data['foto_berita']; ?>" style="width: 90px; margin-top: 10px;">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <a href="admin_berita.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
