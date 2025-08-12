<?php
include '../helper/connection.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM galeri WHERE id_kegiatan = $id");
$galeri = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
    $name = $_POST['nama_kegiatan'];
    $keterangan = $_POST['keterangan'];
    $fotoLama = $_POST['foto_lama'];

    if ($_FILES['foto_kegiatan']['name'] != '') {
    $foto = $_FILES['foto_kegiatan']['name'];
    $tmp = $_FILES['foto_kegiatan']['tmp_name'];
    $folder = '../image/';
    $newFotoName = uniqid() . '_' . $foto;

    move_uploaded_file($tmp, $folder . $newFotoName);
    if (file_exists($folder . $fotoLama)) {
        unlink($folder . $fotoLama); // hapus foto lama
    }
    } else {
        $newFotoName = $fotoLama; // tidak upload baru
    }

    $query = mysqli_query($conn, "UPDATE galeri SET nama_kegiatan='$name', keterangan='$keterangan', foto_kegiatan='$newFotoName' WHERE id_kegiatan=$id");

    if ($query) {
        echo "<script>
            alert('Data berhasil diupdate'); 
            window.location.href='admin_galeri.php';
            </script>";
    } else {
        echo "<script>
        alert('Gagal update data');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Galeri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3 class="mb-4 text-center">Edit Data Galeri</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="foto_lama" value="<?= $galeri['foto_kegiatan']; ?>">
        <div class="mb-3">
            <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
            <input type="text" name="nama_kegiatan" class="form-control" value="<?= $galeri['nama_kegiatan']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="<?= $galeri['keterangan']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="foto_kegiatan" class="form-label">Foto (opsional)</label>
            <input type="file" name="foto_kegiatan" class="form-control">
            <p class="mt-2">Foto saat ini:</p>
            <img src="../image/<?= $galeri['foto_kegiatan']; ?>" width="100">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
        <a href="admin_galeri.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
