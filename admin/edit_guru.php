<?php
include '../helper/connection.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM profile_guru WHERE id_guru = $id");
$guru = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_guru'];
    $jabatan = $_POST['jabatan'];
    $fotoLama = $_POST['foto_lama'];

    if ($_FILES['foto_guru']['name'] != '') {
    $foto = $_FILES['foto_guru']['name'];
    $tmp = $_FILES['foto_guru']['tmp_name'];
    $folder = '../image/';
    $newFotoName = uniqid() . '_' . $foto;

    move_uploaded_file($tmp, $folder . $newFotoName);
    if (file_exists($folder . $fotoLama)) {
        unlink($folder . $fotoLama); // hapus foto lama
    }
    } else {
        $newFotoName = $fotoLama; // tidak upload baru
    }

    $query = mysqli_query($conn, "UPDATE profile_guru SET nama_guru='$nama', jabatan='$jabatan', foto_guru='$newFotoName' WHERE id_guru=$id");

    if ($query) {
        echo "<script>alert('Data berhasil diupdate'); window.location.href='profile_guru.php';</script>";
    } else {
        echo "<script>alert('Gagal update data');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3 class="mb-4 text-center">Edit Data Guru</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="foto_lama" value="<?= $guru['foto_guru']; ?>">
        <div class="mb-3">
            <label for="nama_guru" class="form-label">Nama Guru</label>
            <input type="text" name="nama_guru" class="form-control" value="<?= $guru['nama_guru']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" value="<?= $guru['jabatan']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="foto_guru" class="form-label">Foto (opsional)</label>
            <input type="file" name="foto_guru" class="form-control">
            <p class="mt-2">Foto saat ini:</p>
            <img src="../image/<?= $guru['foto_guru']; ?>" width="100">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
        <a href="profile_guru.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
