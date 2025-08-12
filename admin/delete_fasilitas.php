<?php
include '../helper/connection.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM fasilitas WHERE id_fasilitas = $id");
if ($query) {
    echo "<script>
    alert('Data berhasil dihapus');
    window.location.href='admin_fasilitas.php';
    </script>";
}
else {
    echo "<script>
    alert('Gagal menghapus data');
    window.location.href='admin_fasilitas.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hapus Fasilitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3 class="mb-4 text-center">Hapus Fasilitas</h3>
    <p class="text-center">Apakah Anda yakin ingin menghapus fasilitas ini?</p>
    <form action="" method="POST">
        <input type="hidden" name="id_fasilitas" value="<?= $id; ?>">
        <div class="text-center">
            <button type="submit" name="confirm" class="btn btn-danger">Ya, Hapus</button>
            <a href="admin_fasilitas.php" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>