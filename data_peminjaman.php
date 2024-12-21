<?php
    include "header.php";
?>
<div class="container">
    <div class="row">
      <div class="col-lg-12 mt-2" style="min-height:550px;">
        <div class="card">
          <div class="card-header">
            Data Peminjaman
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <a href="tambah_peminjaman.php" class="btn btn-primary">Tambah Peminjaman</a>
              </div>
              <div class="col">
                <form class="d-flex align-items-center justify-content-end" method="GET">
                    <input type="text" class="form-control me-2" placeholder="Masukkan NISN" name="keyword">
                    <input type="submit" class="btn btn-primary" value="Cari" name="cari">
                </form>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <table class="table table-bordered table-striped">
                    <tr>
                      <th>No</th>
                      <th>Id Peminjaman</th>
                      <th>NISN</th>
                      <th>Tanggal Peminjaman</th>
                      <th>Tanggal Jatuh Tempo</th>
                      <th>Id Admin</th>
                      <th>Status Peminjaman</th>
                    </tr>
                    <?php
                        include "koneksi.php";

                        if (isset($_GET['cari'])) {
                            $keyword = $_GET['keyword'];
                            $query = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE nisn LIKE '%$keyword%'");
                        } else {
                            $query = mysqli_query($koneksi, "SELECT * FROM peminjaman");
                        }

                        $no = 1;
                        while ($ambil_data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $ambil_data['Id_peminjaman']; ?></td>
                      <td><?php echo $ambil_data['nisn']; ?></td>
                      <td><?php echo $ambil_data['tanggal_pinjam']; ?></td>
                      <td><?php echo $ambil_data['tanggal_jatuh_tempo']; ?></td>
                      <td><?php echo $ambil_data['Id_admin']; ?></td>
                      <td><?php echo $ambil_data['status_peminjaman']; ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                  </table>
                </div>
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
