<!DOCTYPE html>
<html>
<style>
        ul.heading-gradient {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-image: linear-gradient(45deg, #FF0000, #ffffff, #0000ff);
  font-family: sans-serif;
}
        a.heading-gradient {
            background-image: linear-gradient(45deg, #FF0000, #ffffff, #0000ff);
        }
        </style>
<body>
<div class="page">

   <br><a href="tambah.php" class="heading-gradient"><font color = black size = 4>+TAMBAH MEMBER</font></a>
    <br/>
    <table border="5" width="715px" style="background-color: blue;">
        <tr>

        
        <br>
    </br>
            <td style = background-color:blue colspan ="7"><center> <b><font color =white size=10> Member </font></b></center> </td>
</tr>
<tr>
            <th style="background-color: blue;">Id</th>
            <th style="background-color: blue;">Nama</th>
            <th style="background-color: blue;">Unit</th>
            <th style="background-color: blue;">Alamat</th>
            <th style="background-color: blue;">Opsi</th>
           
        </tr>
        <?php
        include 'koneksi.php';
        $id = 1;
        $data = mysqli_query($koneksi, "select * from profil");
        while ($d = mysqli_fetch_array($data)){

            ?>
            <tr>
                <td><?php echo $id++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['unit']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                

            
            <td>
            <a href="edit.php?id=<?php echo $d['id'];?>"<font color = black>EDIT<font></a>
            <a href="hapus.php?id=<?php echo $d['id'];?>"<font color = black>HAPUS<font></a>
        </td>
        </tr>
        <?php
        }
        ?>
</div>
</body>
</html>