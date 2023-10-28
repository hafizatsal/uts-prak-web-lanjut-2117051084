<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">DeMon Project 1</a>
</nav>

<div class="container mt-4">
    <!-- Judul -->
    <h1>List User</h1>
    <a href="<?= base_url('user/create') ?>" class="btn btn-primary">Tambah User</a>

    <p>Data Mahasiswa jurusan Ilmu Komputer angkatan 2021</p>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($users as $user) {
                ?>
                <tr>
                    <td>
                        <?= $user['id'] ?>
                    </td>
                    <td>
                        <?= $user['nama'] ?>
                    </td>
                    <td>
                        <?= $user['npm'] ?>
                    </td>
                    <td>
                        <?= $user['nama_kelas'] ?>
                    </td>
                    <td>
                        <a href="<?= base_url('user/' . $user['id'] . '/edit') ?>">Edit</a>
                        <button type="button">Delete</button>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>