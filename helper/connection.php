<?php
$conn = mysqli_connect("localhost", "root", "", "sd");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>