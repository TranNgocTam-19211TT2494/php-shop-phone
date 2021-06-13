<?php
     include_once("Model/User.php");
     include_once("Model/News.php");

     $new = new News();
     $user = new User();
     $us = $user->getUserManage();

   
    
    if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $row=$new->getNewsByID($id);
        include_once("View/News/Edit.php");
        if (isset($_POST['btnChange'])) {
            include("Model/Upload.php");


            $title=$_POST["txtTitle"];
            if (isset($_FILES['txtImageUrl'])) {
                $fileName = Upload::UploadImage("txtImageUrl", "Upload");
            }
           
            $status=$_POST["txtStatus"];
            $content = addslashes($_POST['txtContent']);
            $intro=addslashes($_POST['txtIntro']);
            $UserID=$_POST["slUser"];
            if (!isset($_FILES['txtImageUrl'])) {
                $ret=$new->UpdateNew($id, $UserID, $title, $intro, $content, $status);
                if ($ret>0) {
                    header("location:admin.php?mod=news&act=manage");
                } else {
                    echo "<p class=\"error\">Lỗi</p>";
                }
            } else {
                if($fileName!="") {
                    $ret=$new->UpdateNew($id, $UserID, $title, $fileName ,$intro, $content, $status);
                    if ($ret>0) {
                        header("location:admin.php?mod=news&act=manage");
                    } else {
                        echo "<p class=\"error\">Lỗi</p>";
                    }
                }
                else {
                    echo "<p style='color:red;position: relative;
                    left: 50%;'>Chỉ upload nhưng ảnh có đuôi là: jpg,png,gif</p>";
                }
            }
            
        }
    }