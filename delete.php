<?php
include 'config.php';
if (isset($_GET['id'])) {
    $delete = mysqli_query($koneksi, "DELETE FROM siswa WHERE id = '" . $_GET['id'] . "' ");
    header('location:index.php');
}
?>