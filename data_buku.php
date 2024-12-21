<?php
    include "header.php";
?>
<div class="container">
    <div class="row">
      <div class="col-lg-12 mt-2" style = "min-height:550px;">
        <div class="card">
          <div class="card-header">
            Data Buku
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <a href="" class="btn btn-primart">Cari Buku</a>
              </div>
              <div class="col">
                <form class="d-flex align-items-center justify-content-end" method="GET">
                    <input type="text" class="form-control me-2" placeholder="masukan nama"name="keyword">
                    <input type="submit" class="btn btn-primary" value="cari"name="cari" >
                </form>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <table class="table table-bordered table-striped">
                    <tr>
                      <th>No</th>
                      <th>ID Buku</th>
                      <th>ISBN</th>
                      <th>Judul Buku </th>
                      <th>Tahun Terbit</th>
                      <th>Sinopsis</th>
                      <th>Jumlah Stok</th>
                    </tr>
                    <?php
                        if(isset($_GET['cari'])){
                            $keyword = $_GET['keyword'];
                            $query=mysqli_query ($koneksi,"SELECT * FROM buku WHERE judul LIKE '%$keyword%'");
                        }else{$query=mysqli_query($koneksi,"SELECT * FROM buku");

                        }
                        $no =1;
                        while ($ambil_data =mysqli_fetch_array($query)){
                    ?>
                    <tr>
                      <td><?php echo $no++ ?> </td>
                      <td><?php echo $ambil_data['Id_buku'];?></td>
                      <td><?php echo $ambil_data['isbn'];?></td>
                      <td><?php echo $ambil_data['judul'];?></td>
                      <td><?php echo $ambil_data['tahun_terbit'];?></td>
                      <td><?php echo $ambil_data['sinopsis'];?></td>
                      <td><?php echo $ambil_data['jumlah'];?></td>
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