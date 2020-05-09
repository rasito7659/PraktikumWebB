<?php
    session_start();
    if(!empty($_SESSION['id'])){
        if($_SESSION['role']==0){
            header('location:home-a.php');
        }else{
            header('location:home-m.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="css/perpus.css">
</head>
<body class="bg-lblue">
    <div class="container">
        <fieldset>
            <legend><h1 class="c-blue">Login</h1></legend>
            <table>
                <form action="login-proses.php" method="POST">
                    <ul>
                        <li>Username :</li>
                        <li><input type="text" name="user" id="user"></li>
                    </ul>
                    <ul>
                        <li>Password :</li>
                        <li><input type="password" name="pass" id="pass"></li>
                    </ul>
                    <ul>
                        <li colspan="2"><input type="submit" name="login" value="Login"></li>
                    </ul>
                </form>
            </table>
        </fieldset>
    </div>
</body>
</html>