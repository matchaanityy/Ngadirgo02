<?php
include '../helper/connection.php';

$id = $_GET['id_kelas'];
$query = mysqli_query($conn, "SELECT * FROM profile_siswa WHERE id_kelas = $id");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['submit'])) {
    $kelas = $_POST['kelas'];
    $jumlah_siswa = $_POST['jumlah_siswa'];

    $update = mysqli_query($conn, "UPDATE profile_siswa SET kelas='$kelas', jumlah_siswa=$jumlah_siswa WHERE id_kelas=$id");

    if ($update) {
        echo "<script>
            alert('Data berhasil diupdate!');
            window.location.href = 'profile_siswa.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal update data!');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-4 text-center">Edit Data Jumlah Siswa</h3>
        <form method="POST">
            <div class="mb-3">
                <label>Kelas</label>
                <input type="text" name="kelas" class="form-control" value="<?= htmlspecialchars($data['kelas']) ?>" required>
            </div>
            <div class="mb-3">
                <label>Jumlah</label>
                <input type="number" name="jumlah_siswa" class="form-control" value="<?= htmlspecialchars($data['jumlah_siswa']) ?>" required>
            </div>
            <button type="submit" name="submit" class="btn btn-warning">Update</button>
            <a href="profile_siswa.php" class="btn btn-secondary ms-2">Batal</a>
        </form>
    </div>
</body>
</html>
