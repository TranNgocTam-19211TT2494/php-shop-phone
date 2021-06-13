<?php
    include_once("Layout/Header.php");
    
?>

<!--Start Main-->

<div id="page" class="box">
    <div id="page-in" class="box">

        <!-- Content -->
        <div id="content">
            <?php
                    if (isset($_GET['mod'])) {
                        $a = ucfirst($_GET['mod']);
                        $b = ucfirst($_GET['act']);
            
                        include_once("Controller/".$a."/".$b.".php");
                    } else {
                        include_once("Controller/Products/Manage.php");
                    }
            ?>
        </div> <!-- /content -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="admin.php?mod=products&act=manage">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">SYSTEM</div>
                            <a class="nav-link" href="admin.php?mod=user&act=manage">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Users
                            </a>
                            <a class="nav-link" href="admin.php?mod=group&act=manage">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Groups
                            </a>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="admin.php?mod=category&act=manage">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Category
                            </a>
                            <a class="nav-link" href="admin.php?mod=manufacturer&act=manage">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Manufacture
                            </a>
                            <a class="nav-link" href="admin.php?mod=news&act=manage">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                News
                            </a>
                            <a class="nav-link" href="admin.php?mod=order&act=manage">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Order
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>

        </div> <!-- /page-in -->
    </div> <!-- /page -->
    <!--End content-->

    <div style="clear: both;"></div>
    <!--End Main-->

    <!--Start Footer-->
    <?php
        include_once("Layout/Footer.php");
    ?>

    <?php
    ob_end_flush();
?>