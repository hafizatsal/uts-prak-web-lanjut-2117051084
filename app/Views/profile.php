<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .id-card {
            background-color: #3498db; /* Ubah warna latar belakang */
            color: #fff; /* Ubah warna teks */
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .profil-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 4px solid #fff; /* Ubah warna bingkai foto profil */
            margin: 0 auto;
            display: block;
        }

        .info-box {
            background-color: #fff; /* Ubah warna latar belakang info-box */
            color: #333; /* Ubah warna teks info-box */
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="id-card">
            <div class="text-center">
                <img src="https://th.bing.com/th/id/OIP.OesLvyzDO6AvU_hYUAT4IAHaHa?pid=ImgDet&rs=1" alt="Profil"
                    class="profil-img">
            </div>
            <div class="text-center mt-3">
                <div class="info-box">
                    <h5>
                        <?= $nama ?>
                    </h5>
                </div>
                <div class="info-box">
                    <h5>
                        <?= $kelas ?>
                    </h5>
                </div>
                <div class="info-box">
                    <h5>
                        <?= $npm ?>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</body>

</html>