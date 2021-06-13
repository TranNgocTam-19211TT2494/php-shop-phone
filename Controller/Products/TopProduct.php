<?php
 // echo "<script>console.log('okee');</script>";
    include_once("Model/Products.php");
    $pro = new Products();
    $rs = $pro->getProductByOrderItem();

    include_once("View/Products/TopProduct.php");
