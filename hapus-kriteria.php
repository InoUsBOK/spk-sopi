<?php

include 'koneksi.php';

$id = $_GET['id'];

//query delete
$querydelete = mysqli_query($koneksi, "DELETE FROM kriteria WHERE id='$id' ");

if ($querydelete) {
    # credirect ke page index
    header("location:kriteria.php");   
}
else{
    echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}
?>