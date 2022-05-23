<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id'];
$nama = $_GET['nama'];
$lokasi = $_GET['lokasi'];

//query update
$queryupdate = mysqli_query($koneksi, "UPDATE alternatif SET nama='$nama' , lokasi='$lokasi' WHERE id='$id' ");

if ($queryupdate) {
    # credirect ke page index
    header("location:alternatif.php");   
}
else{
    echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}
?>