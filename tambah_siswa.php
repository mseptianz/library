<?php
    include "header.php";

?>
<div class="container">
    <div class="row">
      <div class="col-lg-12 mt-2" style = "min-height:550px;">
        <div class="card">
          <div class="card-header">
            Tambah Data Siswa
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
              <form action="simpan_siswa.php" method="POST">
                <div>
                  <!-- NISN -->
                  <div class="form-group mt-2">
                    <label for="nisn">NISN</label>
                    <input type="number" class="form-control" id="nisn" placeholder="Masukkan NISN" name="nisn" required>
                  </div>

                  <!-- Nama Siswa -->
                  <div class="form-group mt-2">
                    <label for="nama_siswa">Nama Siswa</label>
                    <input type="text" class="form-control" id="nama_siswa" placeholder="Masukkan Nama Siswa" name="nama_siswa" required>
                  </div>

                  <!-- Gender -->
                  <div class="form-group mt-2">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender" required>
                      <option value="">-- Pilih Gender --</option>
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>

                  <!-- Tempat Lahir -->
                  <div class="form-group mt-2">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" required>
                  </div>

                  <!-- Tanggal Lahir -->
                  <div class="form-group mt-2">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                  </div>

                  <!-- Alamat -->
                  <div class="form-group mt-2">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" required>
                  </div>

                  <!-- Nomor Telepon -->
                  <div class="form-group mt-2">
                    <label for="no_hpa">No Handphone</label>
                    <input type="number" class="form-control" id="no_hpa" placeholder="Masukkan No Handphone" name="no_hpa" required>
                  </div>

                  <!-- Tombol Simpan -->
                  <button type="submit" class="btn btn-primary mt-3">Simpan</button>
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