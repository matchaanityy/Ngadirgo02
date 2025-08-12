<?php
include '../helper/connection.php';

$id = $_GET['id_kelas'];
$query = mysqli_query($conn, "DELETE FROM profile_siswa WHERE id_kelas = $id");

if ($query) {
    echo "<script>
        alert('Data berhasil dihapus!');
        window.location.href = 'profile_siswa.php';
    </script>";
} else {
    echo "<script>
        alert('Gagal menghapus data!');
        window.location.href = 'profile_siswa.php';
    </script>";
}
?>
