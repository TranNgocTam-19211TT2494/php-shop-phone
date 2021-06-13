<?php
    include_once("Model/News.php");
    $new = new News();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $ret = $new->DeleteNews($id);
        // echo $ret;
        if ($ret>0) {
            header("location:admin.php?mod=news&act=manage");
        }
    }