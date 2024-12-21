<?php
  include "koneksi.php";
  $Id_penulis = $_POST['Id_penulis']; 
  $nama_penulis= $_POST['nama_penulis']; 
  $query =mysqli_query($koneksi,"INSERT INTO penulis (Id_penulis,nama_penulis)
                            VALUES ('$Id_penulis','$nama_penulis')");
  header('location:data_penulis.php');
?>