<div id="atas">
    <img src="gambar/latar.jpg" alt="" style="height: 200px; width: 700px;">
    <p style="color: white; font-weight: bolder;">PERPUSTAKAAN RAYARK</p>
</div>
<div id="sidebar">
    <img src="gambar/Rayark.png" alt="" style="height: auto; width: 240px;">
    <div class="populer">
        <p><?php
        if(isset($_SESSION['is_login'])){
            if($_SESSION['role']=="user")
                echo $_SESSION['nama'];
            elseif($_SESSION['role']=="admin")
                echo $_SESSION['nama'];
            elseif($_SESSION['role']=="suadmin")
                echo "Super Admin";
        }
        else{
            echo "Selamat Datang!";
        }
        ?></p>
    </div>
    <ul>
    <?php
        if(isset($_SESSION['is_login'])){
            if($_SESSION['role'] == "user"){
                echo "<li><a href=\"index.php\">HOME</a></li>
                <li><a href=\"galeri.php\">GALERI</a></li>
                <li><a href=\"tentang.php\">TENTANG</a></li>
                <li><a href=\"kontak.php\">PROFIL</a></li>
                <li><a href=\"peminjaman-user.php\">AKTIVITAS</a></li>
                <li><a href=\"logout.php\">KELUAR</a></li>";
            }
            elseif($_SESSION['role'] == "admin"){
                echo "<li><a href=\"book-management.php\">MANAJEMEN BUKU</a></li>
                <li><a href=\"category.php\">KATEGORI</a></li>
                <li><a href=\"peminjaman-admin.php\">PEMINJAMAN</a></li>
                <li><a href=\"logout.php\">KELUAR</a></li>"; 
            }
            elseif($_SESSION['role'] == "suadmin"){
                echo "<li><a href=\"admin.php\">ADMIN</a></li>
                <li><a href=\"user.php\">USER</a></li>
                <li><a href=\"stok.php\">STOK</a></li>
                <li><a href=\"logout.php\">KELUAR</a></li>"; 
            }
        }
        else{
            echo "<li><a href=\"index.php\">HOME</a></li>
                <li><a href=\"galeri.php\">GALERI</a></li>
                <li><a href=\"tentang.php\">TENTANG</a></li>
                <li><a href=\"login.php\">PROFIL</a></li>
                <li><a href=\"login.php\">MASUK</a></li>
                <li><a href=\"daftar.php\">DAFTAR</a></li>";
        }
        ?>
        
    </ul>

</div>
<div id="menu">
    <ul>
    <?php
        if(isset($_SESSION['is_login'])){
            if($_SESSION['role'] == "user"){
                echo "<li><a href=\"index.php\">HOME</a></li>
                <li><a href=\"galeri.php\">GALERI</a></li>
                <li><a href=\"tentang.php\">TENTANG</a></li>
                <li><a href=\"kontak.php\">PROFIL</a></li>
                <li><a href=\"peminjaman-user.php\">AKTIVITAS</a></li>
                <li><a href=\"logout.php\">KELUAR</a></li>";
            }
            elseif($_SESSION['role'] == "admin"){
                echo "<li><a href=\"book-management.php\">MANAJEMEN BUKU</a></li>
                <li><a href=\"category.php\">KATEGORI</a></li>
                <li><a href=\"peminjaman-admin.php\">PEMINJAMAN</a></li>
                <li><a href=\"logout.php\">KELUAR</a></li>"; 
            }elseif($_SESSION['role'] == "suadmin"){
                echo "<br><center><span style='color:white;font-weight:bold;'>SUPER ADMIN AREA</span></center><br>";
            }
        }
        else{
            echo "<li><a href=\"index.php\">HOME</a></li>
                <li><a href=\"galeri.php\">GALERI</a></li>
                <li><a href=\"tentang.php\">TENTANG</a></li>
                <li><a href=\"login.php\">PROFIL</a></li>
                <li><a href=\"login.php\">MASUK</a></li>
                <li><a href=\"daftar.php\">DAFTAR</a></li>";
        }
        ?>
    </ul>
</div>