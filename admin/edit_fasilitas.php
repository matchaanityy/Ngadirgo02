<?php
include '../helper/connection.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM fasilitas WHERE id_fasilitas = $id");
$fasilitas = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])){
    $name = $_POST['nama_fasilitas'];
    $keterangan = $_POST['keterangan'];
    $slug = $_POST['slug'];
    $fotoLama = $_POST['foto_lama'];

    if ($_FILES['foto_fasilitas']['name']!= ''){
        $foto = $_FILES['foto_fasilitas']['name'];
        $tmp =$_FILES['foto_fasilitas']['tmp_name'];
        $folder = '../image/';

        $newFotoName = uniqid() . '_' . $foto;

        move_uploaded_file($tmp, $folder . $newFotoName);
        if (file_exists($folder . $fotoLama)) {
            unlink($folder . $fotoLama); 
        }
    } else {
        $newFotoName = $fotoLama; 
    }

    $query = mysqli_query($conn, "UPDATE fasilitas SET nama_fasilitas='$name', keterangan='$keterangan', slug='$slug', foto_fasilitas='$newFotoName' WHERE id_fasilitas=$id");

    if ($query) {
        echo "<script>
        alert ('Data berhasil diupdate');
        window.location.href='admin_fasilitas.php';
        </script>";
    } else {
    echo "<script>
    alert ('Gagal update data');
    </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Fasilitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3 class="mb-4 text-center">Edit Data Fasilitas</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="foto_lama" value="<?= $fasilitas['foto_fasilitas']; ?>">
        <div class="mb-3">
            <label for="nama_fasilitas" class="form-label">Nama Fasilitas</label>
            <input type="text" name="nama_fasilitas" class="form-control" value="<?= $fasilitas['nama_fasilitas']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="<?= $fasilitas['keterangan']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control" value="<?= $fasilitas['slug']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="foto_fasilitas" class="form-label">Foto (opsional)</label>
            <input type="file" name="foto_fasilitas" class="form-control">
            <p class="mt-2">Foto saat ini:</p>
            <img src="../image/<?= $fasilitas['foto_fasilitas']; ?>" width="100">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
        <a href="admin_fasilitas.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
