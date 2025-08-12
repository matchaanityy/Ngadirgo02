<?php
include '../helper/connection.php';

if (isset($_POST['submit'])) {
    $kelas = $_POST['kelas'];
    $jumlah = $_POST['jumlah_siswa'];

    $query = mysqli_query($conn, "INSERT INTO profile_siswa (kelas, jumlah_siswa) VALUES ('$kelas', $jumlah)");

    if ($query) {
        echo "<script>
            alert('Data berhasil ditambahkan!');
            window.location.href = 'profile_siswa.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal menambahkan data!');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Tambah Data Jumlah Siswa per Kelas</h3>
        <form method="POST">
            <div class="mb-3">
                <label>Kelas</label>
                <input type="text" name="kelas" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Jumlah Siswa</label>
                <input type="number" name="jumlah_siswa" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</body>
</html>
