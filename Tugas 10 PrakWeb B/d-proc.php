<?php
    include('konek.php');

    if(isset($_GET['nik'])){
        $nik = $_GET['nik'];

        $sql = mysqli_query($connect,"DELETE FROM `tb_pegawai` WHERE `nik`='$nik'");
        header('location:crud.php');
    }
?>