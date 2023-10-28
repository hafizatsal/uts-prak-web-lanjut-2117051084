<?= $this->extend('layouts/app.php') ?>
<?= $this->section('content') ?>
<div class="container">
    <h1>Edit User</h1>
    <form action="/user/store" method="post" enctype="multipart/form-data">
        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto">
        <label for="nama">Nama</label>
        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 
            ' is-invalid' : ''; ?>" id="nama" name="nama">
        <div class="invalid-feedback">
            <?= $validation->getError('nama'); ?>
        </div><br><br>
        <label for="npm">NPM</label>
        <input type="text" class="form-control <?= ($validation->hasError('npm')) ? 
            ' is-invalid' : ''; ?>" id="npm" name="npm">
        <div class="invalid-feedback">
            <?= $validation->getError('npm'); ?>
        </div><br><br>

        <select name="kelas" id="kelas">
            <?php 
    foreach ($kelas as $item){
        ?>
            <option value="<?= $item['id'] ?>">
                <?= $item['nama_kelas'] ?>
            </option>
            <?php 
    } 
    ?>
        </select>
        <br><br>


        <input type="submit" value="Submit">
    </form>
</div>

<?= $this->endSection() ?>