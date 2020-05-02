<?php
    include('konek.php');

    if(isset($_POST['edit'])){
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $telp = $_POST['telp'];
        $mail = $_POST['email'];
        $alamat = $_POST['alamat'];

        $query = mysqli_query($connect,"UPDATE `tb_pegawai` SET `nama`='$nama',`jkelamin`='$jk',`telp`='$telp',`email`='$mail',`alamat`='$alamat' WHERE `nik`='$nik'");
        header('location:crud.php');
    }else if(isset($_POST['batal'])){
        header('location:crud.php');
    }
?>