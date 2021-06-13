<?php
    include_once("Model/User.php");
    include_once("Model/News.php");
    
    $new = new News();

    $resulf = $new->getNewsByItems();
    include_once("View/News/show.php");