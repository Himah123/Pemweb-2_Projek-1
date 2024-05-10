<?php
include_once('koneksi.php');

// tangkap data dari form
$nama = $_POST['nama'];
$telpon = $_POST['telpon'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$kategori = $_POST['kategori'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$unit_kerja_id = $_POST['unit_kerja_id'];

// buat query
$query = "INSERT INTO dokter (nama, telpon, tmp_lahir, tgl_lahir, kategori, gender, alamat, unit_kerja_id) VALUES ('$nama', '$telpon', '$tmp_lahir', '$tgl_lahir', '$kategori', '$gender', '$alamat', '$unit_kerja_id')";

// eksekusi query
if ($dbh->query($query)) {
    header('Location: dokter.php');
} else {
    echo "Gagal menyimpan data";
}
