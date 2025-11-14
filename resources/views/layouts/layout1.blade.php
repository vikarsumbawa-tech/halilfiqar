<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>

    <!-- FONT MIRIP GAMBAR -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: url('image/bg.jpg') center/cover fixed no-repeat;
            min-height: 100vh;
            padding-bottom: 60px;
        }

        /* OVERLAY DARK */
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.45);
            backdrop-filter: blur(3px);
            z-index: -1;
        }

        /* NAVBAR MIRIP GAMBAR */
        .navbar-custom {
            background: linear-gradient(to bottom, rgba(0,0,0,0.75), rgba(0,0,0,0));
            padding: 15px 0;
        }

        .navbar-custom .nav-link,
        .navbar-custom .navbar-brand {
            font-weight: 600;
            color: white !important;
        }

        .judul {
            margin-top: 40px;
            text-align: center;
            font-size: 30px;
            font-weight: 700;
            color: white;
            text-shadow: 0 4px 15px rgba(0,0,0,0.9);
        }

        /* CARD GLASS */
        .glass-card {
            width: 100%;
            background: linear-gradient(
                135deg,
                rgba(100,155,255,0.30),
                rgba(30,70,150,0.30),
                rgba(20,40,80,0.28)
            );
            padding: 90px 40px 55px;
            border-radius: 35px;
            backdrop-filter: blur(13px);
            border: 1.5px solid rgba(255,255,255,0.25);
            box-shadow: 0 20px 45px rgba(0,0,0,0.45);
            position: relative;
            color: white;
            text-align: center;
        }

        /* FOTO PROFILE CIRCLE */
        .profile-img {
            width: 165px;
            height: 165px;
            border-radius: 50%;
            object-fit: cover;
            border: 6px solid rgba(255,255,255,0.85);
            position: absolute;
            top: -75px;
            left: 50%;
            transform: translateX(-50%);
            box-shadow: 0 10px 30px rgba(0,0,0,0.55);
        }

        .student-name {
            font-size: 20px;
            font-weight: 700;
            margin-top: 5px;
        }

        .nim {
            font-size: 14px;
            opacity: 0.9;
        }

        .bio-box {
            background: rgba(255,255,255,0.20);
            border: 1.7px solid rgba(255,255,255,0.45);
            border-radius: 18px;
            padding: 18px;
            margin-top: 20px;
            font-size: 14px;
            text-align: left;
            backdrop-filter: blur(12px);
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="#">Home</a>

        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="nav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- JUDUL -->
<h2 class="judul">
    Halaman ini dibuat oleh MARSSA ZULFIQAR & M.HALIL ASRINAJI
</h2>

<!-- CARD AREA -->
<div class="container mt-5">
    <div class="row justify-content-center g-5">

        <!-- Card 1 -->
        <div class="col-md-6">
            <div class="card shadow-sm">
               <img src="{{ asset('img/fanny.jpg') }}"
    class="card-img-top"
    alt="Foto Profile"
    style="width: 100%; height: 400px; object-fit: cover; object-position: center;">

                <div class="card-body">
                    <h5 class="card-title fw-bold">Fiqar</h5>
                    <p class="card-text">suka adek adek</p>
                    <p class="text-muted small mb-0">2301010104</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <img src="{{ asset('img/fanny.jpg') }}"
    class="card-img-top"
    alt="Foto Profile"
    style="width: 100%; height: 400px; object-fit: cover; object-position: center;">


                <div class="card-body">
                    <h5 class="card-title fw-bold">Halil</h5>
                    <p class="card-text">Suka uang</p>
                    <p class="text-muted small mb-0">2301010107</p>
                </div>
            </div>
        </div>

    </div>
</div>


    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>