<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM dokter";
$dokters = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3 class="me-auto">Dokter</h3>
        <a href="dokter_create.php" class="btn btn-primary">Tambah Dokter</a>
    </div>

    <table class="table mt-4">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>JK</th>
            <th>Kategori</th>
            <th>Telpon</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>

        <?php
        $no = 0;
        foreach ($dokters as $dokter) : ?>
            <tr> 
                <td><?= $no += 1; ?></td>
                <td><?= $dokter['nama'] ?></td>
                <td><?= $dokter['tmp_lahir'] ?></td>
                <td><?= $dokter['tgl_lahir'] ?></td>
                <td><?= $dokter['gender'] ?></td>
                <td><?= $dokter['kategori'] ?></td>
                <td><?= $dokter['telpon'] ?></td>
                <td><?= $dokter['alamat'] ?></td>
                <td>
                    <a href="dokter_edit.php?id=<?= $dokter['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="dokter_delete.php?id=<?= $dokter['id'] ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>

<?php
include_once('bottom.php');
?>