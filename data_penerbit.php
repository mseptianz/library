<?php
    include "header.php";
?>
<div class="container">
    <div class="row">
      <div class="col-lg-12 mt-2" style = "min-height:550px;">
        <div class="card">
          <div class="card-header">
            Data Penerbit
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <a href="" class="btn btn-primart">Cari Penerbit</a>
              </div>
              <div class="col">
                <form class="d-flex align-items-center justify-content-end" method="GET">
                    <input type="text" class="form-control me-2" placeholder="Enter text"name="keyword">
                    <input type="submit" class="btn btn-primary" value="cari"name="cari" >
                </form>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <table class="table table-bordered table-striped">
                    <tr>
                      <th>No</th>
                      <th>Nama Penerbit</th>
                      <th>Kota</th>
                    </tr>
                    <?php
                        if(isset($_GET['cari'])){
                            $keyword = $_GET['keyword'];
                            $query=mysqli_query ($koneksi,"SELECT * FROM penerbit WHERE nama_penerbit LIKE '%$keyword%'");
                        }else{$query=mysqli_query($koneksi,"SELECT * FROM penerbit");

                        }
                        $no =1;
                        while ($ambil_data =mysqli_fetch_array($query)){
                    ?>
                    <tr>
                      <td><?php echo $no++ ?> </td>
                      <td><?php echo $ambil_data['nama_penerbit'];?></td>
                      <td><?php echo $ambil_data['kota'];?></td>
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