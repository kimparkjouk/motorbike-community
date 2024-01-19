<!DOCTYPE html>
<html lang="en">

<head>
    <title>Selamat Datang Di WEBSITE MODIAK LOOKS MODIFIED</title>
    <meta charset="UTF-8">
    <meta name="description" contents="MUDIAK LOOKS MODIFIED">
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>
        ul.heading-gradient {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-image: linear-gradient(45deg, #FF0000, #ffffff, #0000ff);
  font-family: sans-serif;
}
        h1.heading-gradient {
            background-image: linear-gradient(45deg, #FF0000, #ffffff, #0000ff);
        }
        h3.heading-gradient {
            background-image: linear-gradient(45deg, #FF0000, #ffffff, #0000ff);
        }
    

        body{
            color: #000;
            background-image: url(FT2.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        </style>
</head>

<body>
    <header>
        <center><h1 class="heading-gradient"> MUDIAK LOOKS MODIFIED</h1></center>
        <center><h3 class="heading-gradient">KOMUNITAS MODIFIKASI MOTOR</h3></center>
        <nav id="navigation">
            <ul class="heading-gradient">
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
                <li><a href="index.php?page=member">Member</a></li>
            </ul>
        </nav>
    </header>
    <div id="contents">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'home':
                    include "home.php";
                    break;
                case 'about':
                    include "about.php";
                    break;
                case 'contact':
                    include "contact.php";
                    break;
                    case 'member':
                        include "member.php";
                        break;
            }
        } else {
            include "home.php";
        }
        ?>

    </div>
    
</body>


</html>
