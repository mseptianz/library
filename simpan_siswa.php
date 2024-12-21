<?php
// Menghubungkan ke database
include "koneksi.php";

// Mengambil data dari form
$nisn = $_POST['nisn'];
$nama_siswa = $_POST['nama_siswa'];
$gender = $_POST['gender'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$no_hpa = $_POST['no_hpa'];

// Query untuk memasukkan data ke tabel siswa
$query = mysqli_query($koneksi, "INSERT INTO siswa (nisn, nama_siswa, gender, tempat_lahir, tanggal_lahir, alamat, no_hpa) 
                                 VALUES ('$nisn', '$nama_siswa', '$gender', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$no_hpa')");

// Mengecek apakah query berhasil
if ($query) {
    // Redirect ke halaman data_siswa.php jika berhasil
    header('Location: data_siswa.php');
} else {
    // Menampilkan pesan error jika gagal
    echo "Data gagal disimpan: " . mysqli_error($koneksi);
}
?>
