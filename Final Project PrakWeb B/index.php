<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "style.php"; ?>
    <link rel="stylesheet" href="css/index.css">
    <title>Home</title>
</head>

<body>
    <div id="main-content">
        <?php include 'header-sidebar.php';?>
        <div id="isi">
            <h1>Selamat Datang</h1>
            <p style="text-align: justify;">Selamat datang di perpustakaan Rayark, perpustakaan berbasis
                online terlengkap yang menyediakan berbagai buku-buku teori dan panduan dalam berbagai bidang.</p>
            <?php
                if(isset($_SESSION['role'])){
                    if($_SESSION['role']!='suadmin'){
            ?>
            <h1>Galeri</h1>
            <p style="text-align: right; margin-top: -30px;"><a href="galeri.php"
                    style="text-decoration: none; color: #29aae3">Lihat lainnya...</a></p>
            <div class="galeri">
                <img src="gambar/1.jpg" alt="">
                <p><a href="galeri.php"><button class="button">Lihat Buku</button></a></p>
            </div>
            <div class="galeri">
                <img src="gambar/2.jpg" alt="">
                <p><a href="galeri.php"><button class="button">Lihat Buku</button></a></p>
            </div>

            <div class="galeri">
                <img src="gambar/3.jpg" alt="">
                <p><a href="galeri.php"><button class="button">Lihat Buku</button></a></p>
            </div>
            <?php
                    }
                }
            ?>
        </div>
        <div id="clear"></div>

    </div>
</body>

</html>