<?php
include_once('koneksi.php');

// tangkap id
$id = $_GET['id'];

// buat query
$query = "DELETE FROM dokter WHERE id='$id'";

// eksekusi query
if ($dbh->query($query)) {
    header('Location: dokter.php');
} else {
    echo "Gagal menghapus data";
}

?>