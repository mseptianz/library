<?php
// Menghubungkan ke database
include "koneksi.php";

// Mengambil data dari form
$Id_peminjaman = $_POST['Id_peminjaman'];
$nisn = $_POST['nisn'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_jatuh_tempo = $_POST['tanggal_jatuh_tempo'];
$Id_admin = $_POST['Id_admin'];
$status_peminjaman = $_POST['status_peminjaman'];

// Query untuk memasukkan data ke tabel peminjaman
$query = mysqli_query($koneksi, "INSERT INTO peminjaman (Id_peminjaman nisn, tanggal_pinjam, tanggal_jatuh_tempo, Id_admin, status_peminjaman) 
                                 VALUES ('$Id_peminjaman','$nisn', '$tanggal_pinjam', '$tanggal_jatuh_tempo', '$Id_admin', '$status_peminjaman')");

// Mengecek apakah query berhasil
if ($query) {
    // Redirect ke halaman data_peminjaman.php jika berhasil
    header('Location: data_peminjaman.php');
} else {
    // Menampilkan pesan error jika gagal
    echo "Data gagal disimpan: " . mysqli_error($koneksi);
}
?>
