<?php
    include_once("Model/User.php");
    include_once("Model/News.php");
    $new = new News();
    $user = new User();

    $us = $user->getUserManage();
    

    include_once("View/News/Insert.php");

    if (isset($_POST['btnSave'])) {
        include_once("Model/Upload.php");

        $title = $_POST['txtTitle'];
        $UserID=$_POST["slUser"];
        $filename = Upload::UploadImage("txtImageUrl", "Upload");
        
        $content = addslashes($_POST['txtBody']);
        $intro=addslashes($_POST['txtDescription']);
        $status=$_POST["txtQuantity"];
        
        
        // echo $filename;
        if ($filename!="") {
            if (is_numeric($status)) {
                $ret = $new->InsertNews($UserID, $title, $intro, $content, $filename,$status);
                if ($ret>0) {
                    header("location:admin.php?mod=news&act=manage");
                } else {
                    echo "<p style='color:red;position: relative;
                    left: 50%;' class=\"error\">Thêm bị lỗi</p>";
                }
            } else {
                echo "<p style='color:red;position: relative;
                left: 50%;'>Status không hợp lệ</p>";
            }
        } else {
            echo "<p style='color:red;position: relative;
            left: 50%;'>Chỉ upload nhưng ảnh có đuôi là: jpg,png,gif</p>";
        }
    }
