<?php
// Menghubungkan ke database
include "koneksi.php";

// Mengambil data dari form
$Id_buku = $_POST['Id_buku'];
$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$Id_penulis = $_POST['Id_penulis'];
$Id_penerbit = $_POST['Id_penerbit'];
$Id_kategori = $_POST['Id_kategori'];
$tahun_terbit = $_POST['tahun_terbit'];
$sinopsis = $_POST['sinopsis'];
$jumlah = $_POST['jumlah'];
$foto_sampul = $_POST['foto_sampul'];

// Query untuk memasukkan data ke tabel buku
$query = mysqli_query($koneksi, "INSERT INTO buku (Id_buku, isbn, judul, Id_penulis, Id_penerbit, Id_kategori, tahun_terbit, sinopsis, jumlah, foto_sampul) 
                                 VALUES ('$Id_buku', '$isbn', '$judul', '$Id_penulis', '$Id_penerbit', '$Id_kategori', '$tahun_terbit', '$sinopsis', '$jumlah', '$foto_sampul')");

// Mengecek apakah query berhasil
if ($query) {
    // Redirect ke halaman data_buku.php jika berhasil
    header('Location: data_buku.php');
} else {
    // Menampilkan pesan error jika gagal
    echo "Data gagal disimpan: " . mysqli_error($koneksi);
}
?>
