<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$unit = $_POST['unit'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"update profil set nama='$nama', unit='$unit', alamat='$alamat' where id='$id' ");

header("location:index.php?page=member");