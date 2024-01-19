<!DOCTYPE html>
<html lang="en">

<head>
        <style>
            h2.heading-gradient {
            background-image: linear-gradient(45deg, #FF0000, #ffffff, #0000ff);
            }
            h3.heading-gradient {
            background-image: linear-gradient(45deg, #FF0000, #ffffff, #0000ff);
            }
            footer.heading-gradient {
            background-image: linear-gradient(45deg, #FF0000, #ffffff, #0000ff);
            }
            a.heading-gradient {
            background-image: linear-gradient(45deg, #FF0000, #ffffff, #0000ff);
            }
            td.heading-gradient {
            background-image: linear-gradient(45deg, #FF0000, #ffffff, #0000ff);
            }
            body
            {
            color: #000000;
            background-image: url("FT2.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            }
        </style>
</head>

<body>
<center><h2 class="heading-gradient">Mudiak Looks Modified</h2></center>
    <a class="heading-gradient" href="index.php?page=member">KEMBALI</a>
    <h3 class="heading-gradient">EDIT DATA MEMBER</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from profil where id='$id'");
    while ($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td class="heading-gradient">Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td class="heading-gradient">Unit</td>
                    <td>
                        <input type="text" name="unit" value="<?php echo $d['unit']; ?>">
                    </td>
                </tr>
                <tr>
                    <td class="heading-gradient">Alamat</td>
                    <td>
                        <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
                    </td>
                </tr>
                
                    <td></td>
                    <td>
                        <input type="submit" value="SIMPAN">
                    </td>
                </tr>
    </table>
    </form>
    <?php
    }
    ?>

</body>
</html>