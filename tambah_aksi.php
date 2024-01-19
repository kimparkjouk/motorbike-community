<?php

include "koneksi.php";

$nama = $_POST['nama'];
$unit = $_POST['unit'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"insert into profil values('','$nama','$unit','$alamat')");

header ("location:index.php?page=member");