<?php

include('koneksi.php');

$id = $_GET['id'];
$nama = $_GET['nama'];
$atribut = $_GET['atribut'];


$queryupdate = mysqli_query($koneksi, "UPDATE kriteria SET nama='$nama' , atribut='$atribut' WHERE id='$id' ");

if ($queryupdate) {

    header("location:kriteria.php");   
}
else{
    echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}
?>