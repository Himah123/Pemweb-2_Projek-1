<?php
include_once('koneksi.php');

// tangkap data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$telpon = $_POST['telpon'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$kategori = $_POST['kategori'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$unit_kerja_id = $_POST['unit_kerja_id'];

// buat query
$query = "UPDATE dokter SET nama='$nama', telpon='$telpon', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', kategori='$kategori', gender='$gender', alamat='$alamat', unit_kerja_id='$unit_kerja_id' WHERE id='$id'";

// eksekusi query
if ($dbh->query($query)) {
    header('Location: dokter.php');
} else {
    echo "Gagal menyimpan data";
}
