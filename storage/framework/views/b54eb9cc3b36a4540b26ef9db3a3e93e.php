<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome - Moto Galeri</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        /* Custom CSS untuk mengubah warna background dan teks */
        body {
            background-color: #6A6A6A;
            /* Warna background */
            color: #000;
            /* Warna teks */
        }

        /* Styling untuk navbar */
        .navbar {
            background-color: #393939;
            /* Warna background navbar */
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #000;
            /* Warna teks navbar */
        }

        .navbar-nav .nav-link {
            font-size: 18px;
            color: #000;
            /* Warna teks navbar */
        }

        .navbar-nav .nav-link:hover {
            color: #007bff;
            /* Warna teks navbar pada hover */
        }

        /* Styling untuk header */
        .header {
            padding: 60px 0;
            text-align: center;
        }

        .header h1 {
            font-size: 48px;
        }

        .header p {
            font-size: 18px;
        }

        /* Styling untuk penjelasan tentang website */
        .penjelasan {
            text-align: center;
            color: #000;
            /* Warna teks */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="asset/logo.png" alt="" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>SELAMAT DATANG DI MOTOGALERI</h1>
                    <p>Temukan berbagai informasi terbaru seputar dunia permotoran</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Penjelasan tentang website -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 penjelasan">
                <h2>Penjelasan tentang Moto Galeri</h2>
                <p>Moto Galeri adalah situs web yang didedikasikan untuk para pecinta dunia otomotif. Kami menyediakan berbagai informasi terbaru seputar motor, seperti galeri foto motor terbaru, ulasan motor.</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\galeri\resources\views/welcome.blade.php ENDPATH**/ ?>