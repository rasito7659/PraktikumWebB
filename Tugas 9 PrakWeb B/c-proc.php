<?php
    include('konek.php');

    if(isset($_POST['tambah'])){
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $telp = $_POST['telp'];
        $mail = $_POST['email'];
        $alamat = $_POST['alamat'];

        $query = mysqli_query($connect,"INSERT INTO `tb_pegawai`(`nik`, `nama`, `jkelamin`, `telp`, `email`, `alamat`) VALUES ('$nik','$nama','$jk','$telp','$mail','$alamat')");
        header('location:crud.php');
    }else if(isset($_POST['batal'])){
        header('location:crud.php');
    }
?>