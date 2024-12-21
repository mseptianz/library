<?php
    include "header.php";
?>
<div class="container">
    <div class="row">
      <div class="col-lg-12 mt-2" style = "min-height:550px;">
        <div class="card">
          <div class="card-header">
            Tambah Peminjaman
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
              <form action="simpan_peminjaman.php" method="POST">
                <div>
                  <!-- Id Peminjam -->
                  <div class="form-group mt-2">
                    <label for="Id_peminjaman">Id Peminjaman</label>
                    <input type="number" class="form-control" id="Id_peminjaman" placeholder="Masukkan Id Peminjaman" name="Id_peminjaman" required>
                  </div>

                  <!-- NISN -->
                  <div class="form-group mt-2">
                    <label for="nisn">NISN</label>
                    <input type="number" class="form-control" id="nisn" placeholder="Masukkan NISN" name="nisn" required>
                  </div>

                  <!-- Tanggal Pinjam -->
                  <div class="form-group mt-2">
                    <label for="tanggal_pinjam">Tanggal Peminjaman</label>
                    <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required>
                  </div>

                  <!-- Tanggal Jatuh Tempo -->
                  <div class="form-group mt-2">
                    <label for="tanggal_jatuh_tempo">Tanggal Jatuh Tempo</label>
                    <input type="date" class="form-control" id="tanggal_jatuh_tempo" name="tanggal_jatuh_tempo" required>
                  </div>

                  <!-- Id Admin -->
                  <div class="form-group mt-2">
                    <label for="Id_admin">Id Admin</label>
                    <input type="number" class="form-control" id="Id_admin" placeholder="Masukkan Id Admin" name="Id_admin" required>
                  </div>

                  <!-- Status Peminjaman -->
                  <div class="form-group mt-2">
                    <label for="status_peminjaman">Status Peminjaman</label>
                    <select class="form-control" id="status_peminjaman" name="status_peminjaman" required>
                      <option value="">-- Pilih Status --</option>
                      <option value="Pinjam">Dipinjam</option>
                      <option value="Kembali">Dikembalikan</option>
                    </select>
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
