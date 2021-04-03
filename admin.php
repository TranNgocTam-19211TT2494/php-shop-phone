<?php
    include_once("Layout/Header.php");
    
?>
    
    <!--Start Main-->

    <div id="page" class="box">
        <div id="page-in" class="box">

            <!-- Content -->
            <div id="content">
            <?php                    
                    if(isset($_GET['mod'])){
                        $a = ucfirst($_GET['mod']);
                        $b = ucfirst($_GET['act']);
            
                        include_once("Controller/".$a."/".$b.".php");
                    }
                    else
                    {
                        include_once("Controller/Products/Manage.php");
                    }
            ?>
            </div> <!-- /content -->

            <!-- Right column -->
            <div id="col" style="float: left; width: 214px; margin-left: 10px; border-right: 1px solid #ddd; min-height: 400px;">
                <div id="col-in">
                   
                    <ul id="sidebar" style="
    position: relative;
    top: -49px;"> 
                        <li style = "border: 1px solid;
    margin-right: 84px;"><a href="admin.php?mod=products&act=manage" style = "margin-left: 20px;font-size: large;"><span>Dashboard</span></a></li>
                        <li style = "border: 1px solid;
    margin-right: 84px;"><a href="admin.php?mod=user&act=manage" style = "margin-left: 20px;font-size: large;">Users</a></li>
                        <li style = "border: 1px solid;
    margin-right: 84px;"><a href="admin.php?mod=category&act=manage" style = "margin-left: 20px;font-size: large;">Category</a></li>
                        <li style = "border: 1px solid;
    margin-right: 84px;"><a href="admin.php?mod=manufacturer&act=manage" style = "margin-left: 20px;font-size: 1.6rem;">Manufacture</a></li>
                        <li style = "border: 1px solid;
    margin-right: 84px;"><a href="admin.php?mod=order&act=manage" style = "margin-left: 20px;font-size: large;">Order</a></li>
                    </ul>
                    
                    </div> <!-- /col-in -->
            </div> <!-- /col -->


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