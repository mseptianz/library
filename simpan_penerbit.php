<?php
  include "koneksi.php";
  $Id_penerbit = $_POST['Id_penerbit']; 
  $nama_penerbit = $_POST['nama_penerbit']; 
  $kota= $_POST['kota']; 
  $query =mysqli_query($koneksi,"INSERT INTO penerbit (Id_penerbit,nama_penerbit,kota)
                            VALUES ('$Id_penerbit','$nama_penerbit','$kota')");
  header('location:data_penerbit.php');
?>