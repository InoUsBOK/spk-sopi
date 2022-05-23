<!DOCTYPE html>
<html lang="en">
<?php require "layout/head.php" ?>

<body class="sb-nav-fixed">
    <?php require "layout/sidebar.php"; ?>
    <?php include 'koneksi.php'; ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1><i class="fa-solid fa-list-ol"></i>Bobot Alternatif & Kriteria</h1>
                <hr class="bg-secondary">
                </h1>
                <div class="card mb-4 bg-light">

                    <div class="row no-gutters ">
                        <div class="col-md-3 bg-light pt-1">
                            <div class="card-body bg-light">
                                <h3 class="text-center"> Tambah Data</h3>
                                <br>
                                <form action="" method="post">
                                    <label>Id Alternatif</label>
                                    <input type="" name="id" maxlength="12" size="" class="form-control" placeholder="Auto">
                                    <br>

                                    <label>Nama Alternatif</label>
                                    <input type="text" name="nama" maxlength="50" size="50" class="form-control" placeholder="Masukan Nama" required>
                                    <br>

                                    <label>Lokasi Alternatif</label>
                                    <input type="text" name="lokasi" maxlength="20" size="50" class="form-control" placeholder="Masukan Lokasi" required>

                                    <br>
                                    <input type="submit" name="proses" value="Simpan" class=" btn btn-success">
                                </form>

                                <?php
                                include "koneksi.php";

                                if (isset($_POST['proses'])) {
                                    mysqli_query($koneksi, "insert into alternatif set 
                                id = '$_POST[id]',
                                nama = '$_POST[nama]',
                                lokasi = '$_POST[lokasi]'");

                                echo "<div align ='center'><h5> Data Telah Disimpan</h5></div> ";
                                echo "<meta http-equiv='refresh' content='1;url=http://localhost/siap-ujian/alternatif.php'>";
                                }

                                ?>
                            </div>
                        </div>
                        <br>

                        <div class="col-md-9 bg-white">
                            <h3 class="text-center">Data Nilai</h3>
                            <div class="card-body">

                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>ID</th>
                                            <th>Nama alternatif</th>
                                            <th>Lokasi Alternatif</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>ID</th>
                                            <th>Nama alternatif</th>
                                            <th>Lokasi Alternatif</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $select = mysqli_query($koneksi, "SELECT * FROM alternatif");
                                        while ($data = mysqli_fetch_array($select)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td>IDalt0<?php echo $data['id'] ?></td>
                                                <td><?php echo $data['nama'] ?></td>
                                                <td><?php echo $data['lokasi'] ?></td>
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
                                                            Konfirmasi untuk menghapus data IDalt0<?php echo $data['id']; ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <a href="hapus-alt.php?delete&id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
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
                                                            <form role="form" action="edit-alt.php" method="get">
                                                                <?php
                                                                $id = $data['id'];
                                                                $query_view = mysqli_query($koneksi, "SELECT * FROM alternatif WHERE id='$id'");
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
                                                                    <div class="form-group">
                                                                        <label>lokasi</label>
                                                                        <input type="text" name="lokasi" class="form-control" value="<?php echo $data['lokasi']; ?>">
                                                                    </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>