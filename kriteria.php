<!DOCTYPE html>
<html lang="en">
<?php require "layout/head.php" ?>


<body class="sb-nav-fixed">
  <?php require "layout/sidebar.php"; ?>

  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid px-4">
        <h1 class="mt-4"> <i class="fa-solid fa-file-signature"></i>Kriteria</h1>
        <div class="card mb-4 bg-light">
          <div class="row no-gutters ">
            <div class="col-md-3 bg-light pt-1">
              <div class="card-body bg-light">
                <h3 class="text-center"> Tambah Data</h3>
                <br>
                <form action="" method="post">
                  <label>Id Kriteria</label>
                  <input type="" name="id" maxlength="12" size="" class="form-control" placeholder="Auto">
                  <br>
                  <label>Nama Kriteria</label>
                  <input type="text" name="nama" maxlength="50" size="50" class="form-control" placeholder="Masukan Nama" required>
                  <br>
                  <label class="col-sm-3 control-label text-right">Atribut</label>
                  <select name="atribut" class="form-control select2" style="width: 100%;">
                    <option value="" selected="selected">-- Pilih Satu --</option>
                    <option value="cost">cost</option>
                    <option value="benefit">benefit</option>
                  </select>
                  <br>
                  <input type="submit" name="proses" value="Simpan" class=" btn btn-success">
                </form>

                <?php
                include "koneksi.php";
                if (isset($_POST['proses'])) {
                  mysqli_query($koneksi, "insert into kriteria set 
                id = '$_POST[id]',
                nama = '$_POST[nama]',
                atribut = '$_POST[atribut]'");

                  echo "<div align ='center'><h5> Data Telah Disimpan</h5></div> ";
                  echo "<meta http-equiv='refresh' content='1;url=http://localhost/siap-ujian/kriteria.php'>";
                }

                ?>
              </div>
            </div>
            <br>

            <div class="col-md-9 bg-white">
              <h3 class="text-center">Data Kriteria</h3>
              <div class="card-body">

                <table id="datatablesSimple">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>ID kriteria</th>
                      <th>Nama Kriteria</th>
                      <th>Atribut</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>NO</th>
                      <th>ID Kriteria</th>
                      <th>Nama Kriteria</th>
                      <th>Atribut</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    $no = 1;
                    $select = mysqli_query($koneksi, "SELECT * FROM kriteria");
                    while ($data = mysqli_fetch_array($select)) {
                    ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td>IDk0<?php echo $data['id'] ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['atribut'] ?></td>
                        <td>
                          <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit-data<?php echo $data['id']; ?>"><i class="fa-solid fa-file-pen" title="Edit"></i></a>
                          <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus-data<?php echo $data['id']; ?>"><i class="fa-solid fa-circle-minus" title="hapus"></i></a>
                        </td>
                      </tr>

                      <!-- hapus-->
                      <div class="modal fade" id="hapus-data<?php echo $data['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel">Hapus Data !!</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Konfirmasi untuk menghapus data IDk0<?php echo $data['id']; ?>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                              <a href="hapus-kriteria.php?delete&id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- edit data-->
                      <div class="modal fade" id="edit-data<?php echo $data['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header ">
                              <h5 class="modal-title" id="staticBackdropLabel"><i class="fa-solid fa-file-pen" title="Edit"></i>Edit Data</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form role="form" action="edit-kriteria.php" method="get">
                                <?php
                                $id = $data['id'];
                                $query_view = mysqli_query($koneksi, "SELECT * FROM kriteria WHERE id='$id'");
                                //$result = mysqli_query($conn, $query);
                                while ($data = mysqli_fetch_assoc($query_view)) {
                                ?>
                                  <div class="mb-3">
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $data['id']; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>">
                                  </div>

                                  <label class="col-sm-3 control-label text-right">Atribut</label>
                                  <select name="atribut" class="form-control select2" style="width: 100%;">
                                    <option value="" selected="selected">-- Pilih Satu --</option>
                                    <option value="cost">cost</option>
                                    <option value="benefit">benefit</option>
                                  </select>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                              <button type="submit" class="btn btn-warning"> Simpan</button>
                            </div>
                          <?php
                                }
                          ?>
                          </form>
                          </div>
                        </div>
                      </div>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </main>
    <?php require 'layout/footer.php'; ?>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>

</html>