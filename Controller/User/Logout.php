<?php
    if (isset($_SESSION["lgUserID"])) {
        unset($_SESSION["lgUserName"]);
        unset($_SESSION["lgUserID"]);
        unset($_SESSION["lgGroupID"]);
        if (isset($_SESSION["lgCart"])) {
            unset($_SESSION["lgCart"]);
        }
        header("location:index.php");
    }
