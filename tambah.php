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
    <br/>
    <a class="heading-gradient"href="index.php?page=member">KEMBALI</a>
    <br/>
    <br/>
    <h3 class="heading-gradient">TAMBAH DATA MEMBER</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td class="heading-gradient">Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td class="heading-gradient">Unit</td>
                <td><input type="text" name="unit"></td>
            </tr>
            <tr>
                <td class="heading-gradient">Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>