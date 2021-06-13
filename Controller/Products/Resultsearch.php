<?php
 
 include_once("Model/Products.php");
 include_once("Model/Pages.php");
  define("MAX", 8);
  $pro = new Products();
  $count = $pro->CountProducts();
  $findStart = Pages::findStart(MAX);
  $findPage = Pages::findPages($count, MAX);

    if (isset($_POST["btnTimKiem"])) {
        $name = $_POST["txtSearch"];
        if ($name!="") {
             $result = $pro->Search($name,$findStart,MAX);
            include_once("View/Products/Resultsearch.php");
            
        }

    }


