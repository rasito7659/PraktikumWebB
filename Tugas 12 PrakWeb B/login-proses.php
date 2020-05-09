<?php
    include('koneksi.php');

    if(isset($_POST['login'])){
        session_start();
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $sql = mysqli_query($connect,"SELECT * FROM `user` WHERE `user`='$user' AND`pass`='$pass'");
        if(mysqli_num_rows($sql) > 0){
            $data = mysqli_fetch_array($sql);

            $_SESSION['id'] = $data['id'];
            $_SESSION['role'] = $data['role'];

            if($data['role'] == 0){
                header('location:home-a.php');
            }else{
                header('location:home-m.php');
            }
        }
    }
?>