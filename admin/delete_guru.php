<?php
include '../helper/connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil nama file foto dari database
    $queryGetFoto = mysqli_query($conn, "SELECT foto_guru FROM profile_guru WHERE id_guru = $id");
    $data = mysqli_fetch_assoc($queryGetFoto);
    $foto = $data['foto_guru'];

    // Hapus data dari database
    $queryDelete = mysqli_query($conn, "DELETE FROM profile_guru WHERE id_guru = $id");

    if ($queryDelete) {
        // Hapus file foto dari folder jika ada
        if (file_exists("../image/" . $foto)) {
            unlink("../image/" . $foto);
        }

        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href = 'profile_guru.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menghapus data!');
                window.location.href = 'profile_guru.php';
              </script>";
    }
} else {
    // Jika tidak ada parameter ID
    echo "<script>
            alert('ID tidak ditemukan!');
            window.location.href = 'profile_guru.php';
          </script>";
}
?>
