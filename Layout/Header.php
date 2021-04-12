<?php
    session_start();
    ob_start();
    if (!isset($_SESSION['btnLogin'])) {
        header('location:login.php');
    }
  
    
?>

<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobile Shopping</title>

     <!-- icon -->
     <link rel="shortcut icon" href="https://www.thegioididong.com/favicon.ico">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">



    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script language="javascript" type="text/javascript" src="js/function1.js"></script>

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- load database -->
    <!-- php xóa  -->


</head>

<body>

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i>
                                    <?php if (isset($_SESSION['btnLogin'])) {
    echo $_SESSION['btnLogin'];
} ?> <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Đăng Xuất</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area" style = "background: blanchedalmond;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="admin.php" style="color: #333; font-family: fantasy;"><b>CHÀO MỪNG ĐẾN VỚI TRANG ADMIN</b></a></h1>
                    </div>
                    <div class="Search" style="position: relative;top: -120px;left: 123%;">
                        <form method="POST" action="#">
                            <input type="text" placeholder="Nhập tên sản phẩm, từ khóa cần tìm..." name="txtSearch">
                            <input type="submit" name="btnTimKiem" value="Tìm kiếm">
                        </form>
                    </div>
                </div>
                <?php
                //    include_once("Controller/Cart/Cart.php");
                ?>
            </div>
        </div>
    </div> <!-- End site branding area -->