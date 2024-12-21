<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan - Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                        url('https://source.unsplash.com/1200x400/?library,books') center/cover no-repeat;
            color: white;
            text-align: center;
            padding: 60px 0;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .card {
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>
   
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Selamat Datang di Perpustakaan</h1>
            <p class="lead">Muhammad Septian Zamzani</p>
            <p class="lead">Sistem Informasi 502 - Pemrograman Berbasis Web</p>
        </div>
    </section>

    <!-- Content Section -->
    <div class="container my-5">
        <div class="row text-center">
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Peminjaman</h5>
                        <p class="card-text">Jumlah Transaksi Peminjaman</p>
                        <a href="data_peminjaman.php" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Pengembalian</h5>
                        <p class="card-text">Jumlah Transaksi Pengembalian</p>
                        <a href="data_peminjaman.php" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Data Buku</h5>
                        <p class="card-text">Jumlah Data Buku</p>
                        <a href="data_buku.php" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Data Siswa</h5>
                        <p class="card-text">Jumlah Data Siswa</p>
                        <a href="data_siswa.php" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Perpustakaan. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
