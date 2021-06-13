<?php
    include_once("Model/News.php");
    $new = new News();
    $ret = $new->getNewsManage();
    include_once("View/News/Manage.php");