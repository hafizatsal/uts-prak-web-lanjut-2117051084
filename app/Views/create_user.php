<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Create User</h3>
            </div>

            <div class="card-body">

                <?php if (isset($validation) || session()->has('npm_error')): ?>
                    <div class="alert alert-danger">

                        <?php
                        if (isset($validation)) {
                            echo $validation->listErrors();
                        }
                        if (session()->has('npm_error')) {
                            echo session('npm_error');
                        }
                        ?>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url('/user/store') ?>" method="POST" class="needs-validation" novalidate>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nama</span>
                        </div>
                        <input type="text" class="form-control" id="nama" name="nama" required placeholder="Enter your nama">

                        <?php if (isset($validation) && $validation->hasError('nama')): ?>
                            <div class="invalid-feedback">
                                Nama harus diisi.
                                <?= $validation->getError('nama') ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">NPM</span>
                        </div>
                        <input type="text" class="form-control" id="npm" name="npm" required placeholder="Enter your NPM">

                        <?php if (isset($validation) && $validation->hasError('npm')): ?>
                            <div class="invalid-feedback">
                                NPM harus diisi.
                                <?= $validation->getError('npm') ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Kelas</span>
                        </div>
                        <select class="form-control <?php if (isset($validation) && $validation->hasError('kelas'))
                        echo 'is-invalid'; ?>" name="kelas" id="kelas">
                            <option value="">Pilih kelas</option>
                            <?php foreach ($kelas as $item) {
                            ?>
                                <option value="<?= $item['id'] ?>">
                                    <?= $item['nama_kelas'] ?>
                            </option>
                            <?php
                        }
                        ?>
                        </select>

                        <?php if (isset($validation) && $validation->hasError('kelas')): ?>
                            <div class="invalid-feedback">
                                Kelas harus diisi.
                                <?= $validation->getError('kelas') ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>