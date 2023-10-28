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
                <form action="<?=base_url('/user/store')?>" method="POST" class="needs-validation" novalidate>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nama</span>
                        </div>
                        <input type="text" class="form-control" id="nama" name="nama" required placeholder="Enter your nama">
                        <div class="invalid-feedback">
                            Nama harus diisi.
                        </div>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">NPM</span>
                        </div>
                        <input type="text" class="form-control" id="npm" name="npm" required placeholder="Enter your NPM">
                        <div class="invalid-feedback">
                            NPM harus diisi.
                        </div>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Kelas</span>
                        </div>
                        <input type="text" class="form-control" id="kelas" name="kelas" required placeholder="Enter your kelas">
                        <div class="invalid-feedback">
                            Kelas harus diisi.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>