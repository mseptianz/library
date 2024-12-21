<?php
    include "header.php";

?>
<div class="container">
    <div class="row">
      <div class="col-lg-12 mt-2" style = "min-height:550px;">
        <div class="card">
          <div class="card-header">
            Tambah Data
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <form action="simpan_buku.php" method="POST">
                    <div>
                        <div class="form-group mt-2">
                        <label for="Id_buku">Id Buku</label>
                        <input class="form-control" placeholder="Masukkan Id Buku" name="Id_buku" required>
                        </div>
                        <div class="form-group mt-2">
                        <label for="isbn">ISBN</label>
                        <input type="text" class="form-control" placeholder="Masukkan ISBN (Format Angka)" name="isbn" pattern="[0-9]+" required>
                        </div>
                        <div class="form-group mt-2">
                        <label for="judul">Judul Buku</label>
                        <input type="text" class="form-control" placeholder="Masukkan Judul Buku" name="judul" required>
                        </div>
                        <div class="form-group mt-2">
                        <label for="Id_penulis">Id Penulis</label>
                        <input type="number" class="form-control" placeholder="Masukkan Id Penulis" name="Id_penulis" required>
                        </div>
                        <div class="form-group mt-2">
                        <label for="Id_penerbit">Id Penerbit</label>
                        <input type="number" class="form-control" placeholder="Masukkan Id Penerbit" name="Id_penerbit" required>
                        </div>
                        <div class="form-group mt-2">
                        <label for="Id_kategori">Id Kategori</label>
                        <input type="number" class="form-control" placeholder="Masukkan Id Kategori" name="Id_kategori" required>
                        </div>
                        <div class="form-group mt-2">
                        <label for="tahun_terbit">Tahun Terbit</label>
                        <input class="form-control" placeholder="Masukkan Tahun Terbit" name="tahun_terbit" min="1000" max="9999" required>
                        </div>
                        <div class="form-group mt-2">
                        <label for="sinopsis">Sinopsis</label>
                        <textarea class="form-control" placeholder="Masukkan Sinopsis" name="sinopsis" rows="3" required></textarea>
                        </div>
                        <div class="form-group mt-2">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" class="form-control" placeholder="Masukkan Jumlah Buku" name="jumlah" required>
                        </div>
                        <div class="form-group mt-2">
                        <label for="foto_sampul">Foto Sampul (URL)</label>
                        <input type="url" class="form-control" placeholder="Masukkan URL Foto Sampul" name="foto_sampul">
                        </div>
                        <input type="submit" class="btn btn-primary mt-3" value="Simpan"> 
                    </div>
                </form>

              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
</div>
<?php
    include "footer.html";
?>