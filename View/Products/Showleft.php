  <style>
/* Rating */
.rating_box {
    display: inline-flex;
}

.star-rating {
    font-size: 0;
    padding-right: 10px;
}

.wrapper {
    display: inline-block;
    border: none;
    font-size: 14px;
}

.wrapper input {
    border: 0;
    width: 1px;
    height: 1px;
    clip: rect(1px 1px 1px 1px);
    clip: rect(1px, 1px, 1px, 1px);
    opacity: 0;
}

.wrapper label {
    position: relative;
    float: right;
    color: #C8C8C8;
}

.wrapper label:before {
    margin: 5px;
    content: "\f005";
    font-family: FontAwesome;
    display: inline-block;
    font-size: 1.5em;
    color: #ccc;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}

.wrapper input:checked~label:before {
    color: #FFC107;
}

.wrapper label:hover~label:before {
    color: #ffdb70;
}

.wrapper label:hover:before {
    color: #FFC107;
}

.g-color-gray-dark-v4 {
    color: #FFC107;
}
  </style>
  <div class="single-product-area">
      <div class="zigzag-bottom"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <div class="single-sidebar">
                      <!-- <h2 class="sidebar-title">Tìm kiếm</h2> -->
                      <!--Start Search Products-->
                      <?php
                            include_once("Controller/Products/Search.php");
                        ?>
                      <!--End search products-->
                  </div>

                  <div class="single-sidebar">
                      <h2 class="sidebar-title">Sản phẩm mới nhất</h2>
                      <?php
                        $dem=0;
                        foreach ($newproducts as $row) {
                            $pr = $row['Price']*1.2;
                            if ($dem==4) {
                                break;
                            }

                            echo "<div class=\"thubmnail-recent\">";
                            echo    "<a href=\"index.php?mod=products&act=detail&id={$row['ProductID']}\"><img src=\"Upload/{$row['ImageUrl']}\" class=\"recent-thumb\"></a>";
                            echo   "<h2><a href=\"index.php?mod=products&act=detail&id={$row['ProductID']}\">{$row['ProductName']}</a></h2>";
                            echo    "<div class=\"product-sidebar-price\">";
                            echo        "<ins>{$row['Price']}$</ins> <del>$pr$</del>";
                            echo    "</div></div>";
                            $dem++;
                        }
                    ?>

                  </div>
                
              </div>
              