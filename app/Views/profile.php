<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        /* CSS untuk mengatur tampilan */
        body {
            font-family: Arial, sans-serif;
        }
        
        .profile-container {
            width: 300px;
            margin: 0 auto;
            text-align: center;
        }
        
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%; /* Membuat gambar menjadi lingkaran */
            object-fit: cover; /* Memastikan gambar sesuai dalam lingkaran */
            margin: 25px ;
            border: 2px solid black;
        }

        .profile-item {
            background-color: #f0f0f0;
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
        }
        
        .profile-label {
            font-weight: bold;
        }
    </style>
</head>
<body> -->
<?= $this->extend('layouts/app.php') ?>

<?= $this->section('content') ?>

<div class="profile-container">
    <div class="w-100 d-grid border gap-2" style="height: 50vh; place-content: center;">
     <div class="profile-image">
        <img src="<?= $user['foto'] ?? base_url("assets/img/PicProfile.png")  ?>"
        width="100%" height="100%" alt="profil" class="profile-item">
    </div>
    <div class="profile-label dark-text"><?= $user['nama'] ?></div>
    <div class="profile-label light-text"><?= $user['npm'] ?></div>
    <div class="profile-label dark-text"><?= $user['nama_kelas'] ?></div>
    </div>
    </div>
    <?= $this->endSection() ?>
<!--</body>
</html> -->