<?php

include 'koneksi.php';

$id = $_GET['id'];


mysqli_query($koneksi,"delete from profil where id='$id'");

header("location:index.php?page=member");