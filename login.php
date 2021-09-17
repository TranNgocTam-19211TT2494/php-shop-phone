<?php
    include_once("View/admin/login.php");
    if (isset($_POST['btnLogin'])) {
        header('location:admin.php');
    }
    
    if (isset($_POST["btnLogin"])) {
        $userName=trim($_POST["txtUserName"]);
        $passWord=trim($_POST["txtPassWord"]);
        if ($userName!="" && $passWord!="") {
            include_once("Model/User.php");
            $user = new User();
            $row=$user->Login($userName, $passWord);
            if ($row) {
                session_start();
                $_SESSION["btnLogin"]=$userName;
                header("location:admin.php");
            } else {
                echo "<p class=\"error\">Tên đăng nhập hoặc mật khẩu không đúng</p>";
            }
        } else {
            echo "<p class=\"error\">Tên đăng nhập hoặc mật khẩu không đúng</p>";
        }
    }