<?php
include "../helper/connection.php";

if (isset($_GET['id'])){
    $id = $_GET ['id'];

    $queryGetFoto = mysqli_query ($conn, "SELECT foto_kegiatan FROM galeri WHERE id_kegiatan = $id");
    $data = mysqli_fetch_assoc($queryGetFoto);
    $foto = $data['foto_kegiatan'];

    $queryDelete = mysqli_query ($conn, "DELETE FROM galeri WHERE id_kegiatan =$id");

    if ($queryDelete) {
        if (file_exists("../image/" . $foto)) {
            unlink("..image/" . $foto);
        }
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href = 'admin_galeri.php';
                </script>";
    } else {
        echo "<script>
                alert('Gagal menghapus data!');
                window.location.href = 'admin_galeri.php';
                </script>";
    }
} else {
    echo "<script>
            alert('ID tidak ditemukan!');
            window.location.href = 'admin_galeri.php';
            </script>";
}
?>
      