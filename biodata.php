<?php

$title = 'Biodata';

include 'layout/header.php';

require 'controller/biodatacontroller.php';

$biodata = query("SELECT * FROM data_pendaftar ORDER BY id_pendaftar DESC");

?>

<div class="container mt-5">
    <h1>Tabel Biodata Peserta</h1>

    <div class="my-2">
        <a href="tambah-biodata.php" class="btn btn-primary">Tambah Biodata</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Agama</th>
                <th>Umur</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Fungsi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($biodata as $item) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $item['nama']; ?></td>
                    <td><?= $item['agama']; ?></td>
                    <td><?= $item['umur']; ?></td>
                    <td><?= date('d/m/Y', strtotime($item['tanggal_lahir'])); ?></td>
                    <td><?= $item['email']; ?></td>
                    <td><?= $item['alamat']; ?></td>
                    <td>
                        <a href="ubah-biodata.php?id_pendaftar=<?= $item['id_pendaftar']; ?>" class="btn btn-success">Ubah</a>
                        <a href="hapus-biodata.php?id_pendaftar=<?= $item['id_pendaftar']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
