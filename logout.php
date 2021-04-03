<?php 
session_start();
if(isset($_SESSION['btnLogin'])){
    unset($_SESSION['btnLogin']);
}
header("location:login.php");