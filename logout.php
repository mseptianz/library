<?php
// Mulai session
session_start();

// Hapus session
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Terima Kasih!</h1>
        <p>Anda telah berhasil logout.</p>
        <a href="login.php" class="btn btn-primary mt-3">Kembali ke Login</a>
    </div>
</body>
</html>
