<?php
    session_start();
    ob_start();
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

    <title> Mobile Shopping</title>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
    <!-- Hover icon footer -->
    <style>
    .wrappers {
        display: inline-flex;
    }

    .wrappers .icon {
        position: relative;
        background-color: #ffffff;
        border-radius: 50%;
        padding: 15px;
        margin: 10px;
        width: 50px;
        height: 50px;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .wrappers .tooltip {
        position: absolute;
        top: 0;
        font-size: 14px;
        background-color: #ffffff;
        color: #ffffff;
        padding: 5px 8px;
        border-radius: 5px;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
        opacity: 0;
        pointer-events: none;
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .wrappers .tooltip::before {
        position: absolute;
        content: "";
        height: 8px;
        width: 8px;
        background-color: #ffffff;
        bottom: -3px;
        left: 50%;
        transform: translate(-50%) rotate(45deg);
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .wrappers .icon:hover .tooltip {
        top: -45px;
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
    }

    .wrappers .facebook:hover,
    .wrappers .facebook:hover .tooltip,
    .wrappers .facebook:hover .tooltip::before {
        background-color: #3b5999;
        color: #ffffff;
    }

    .wrappers .twitter:hover,
    .wrappers .twitter:hover .tooltip,
    .wrappers .twitter:hover .tooltip::before {
        background-color: #46c1f6;
        color: #ffffff;
    }

    .wrappers .instagram:hover,
    .wrappers .instagram:hover .tooltip,
    .wrappers .instagram:hover .tooltip::before {
        background-color: #e1306c;
        color: #ffffff;
    }

    .wrappers .github:hover,
    .wrappers .github:hover .tooltip,
    .wrappers .github:hover .tooltip::before {
        background-color: #333333;
        color: #ffffff;
    }

    .wrappers .youtube:hover,
    .wrappers .youtube:hover .tooltip,
    .wrappers .youtube:hover .tooltip::before {
        background-color: #de463b;
        color: #ffffff;
    }

    #btn-back-to-top {
        cursor: pointer;
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
    }
    </style>
</head>

<body style="background: #fff;">

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>

                            <li><a href="index.php?mod=user&act=about"><i class="fa fa-user"></i>Tài Khoản</a></li>

                            <?php
                            if (isset($_SESSION["lgUserID"])) {
                                $chuoi1 = <<<EOD
                            <li><a href="index.php?mod=user&act=logout"><i class="fa fa-user"></i>Đăng xuất</a></li>

EOD;
                                echo $chuoi1;
                            // if($_SESSION['lgGroupID']==1){
                            //     echo "<li><a href=\"admin.php\"><i class=\"fa fa-user\"></i>Admin</a></li>";
                            // }
                            } else {
                            $chuoi1 = <<<EOD
                            <li><a href="index.php?mod=user&act=login"><i class="fa fa-user"></i>Đăng Nhập</a></li>
                            <li><a href="index.php?mod=user&act=register"><i class="fa fa-user"></i>Đăng Ký</a></li>
EOD;
                            echo $chuoi1;
                        }

                        ?>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.php" style="color: #333; font-family: fantasy;"><b>Moble Shop</b></a></h1>
                    </div>
                </div>
                <div class="single-sidebar">

                    <!--Start Search Products-->
                    <?php
                            include_once("Controller/Products/Search.php");
                        ?>
                    <!--End search products-->
                </div>

                <?php
                   include_once("Controller/Cart/Cart.php");
                ?>

            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" style="color:white;">
                        <li><a href="index.php">Trang Chủ</a></li>
                        <li><a href="index.php?mod=products&act=allproducts" onclick="return isActive()">Sản Phẩm</a>
                        </li>
                        <li><a href="index.php?mod=products&act=detail">Thông Tin Sản Phẩm</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropbtn">Phân Loại</a>
                            <div class="dropdown-content">

                                <?php
                                    include_once("Controller/Category/Category.php");
                                ?>


                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropbtn">Hãng sản xuất</a>
                            <div class="dropdown-content">

                                <?php
                                    include_once("Controller/Manufacturer/Manufacturer.php");
                                ?>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="lienhe.php" class="dropbtn">Liên Hệ</a>
                        </li>
                    </ul>
                    <?php
                    // include_once("Controller/Cart/Cart.php");
                ?>
                </div>

            </div>
        </div>
    </div> <!-- End mainmenu area -->