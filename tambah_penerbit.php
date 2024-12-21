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
                <form action="simpan_penerbit.php" method="POST">
                  <div>
                    <div class="form-group mt-2">
                      <label for="">Id Penerbit</label>
                      <input type="text" class="form-control"placeholder="Id Penerbit"name="Id_penerbit">
                    </div>
                    <div class="form-group mt-2">
                      <label for="">Nama Penerbit</label>
                      <input type="text" class="form-control"placeholder="Nama Penerbit"name="nama_penerbit">
                    </div>
                    <div class="form-group mt-2">
                      <label for="">Kota</label>
                      <input type="text" class="form-control"placeholder="kota"name="kota">
                    </div>
                    <input type="submit" class="btn btn-primary mt-2" calue ="Simpan"> 
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