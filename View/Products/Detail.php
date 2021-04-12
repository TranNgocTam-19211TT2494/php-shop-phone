<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>CHI TIẾT SẢN PHẨM</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->
<?php
 include_once("View/Products/Showleft.php");
 $pr =$res['Price']*1.2;
 ?>

<div class="col-md-8">
    <div class="product-content-right">
        <div class="row">
            <div class="col-sm-6">
                <div class="product-images">
                    <div class="product-main-img">
                        <img src=<?php echo "Upload/{$res['ImageUrl']}";?>>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="product-inner">
                    <h2 class="product-name"><?php echo $res['ProductName'];?></h2>
                    <div class="product-inner-price">
                        <ins><?php echo $res['Price'];?>đ</ins> <del><?php echo $pr;?>đ</del>
                    </div>


                    <button href="Controller/Cart/Add.php?id={$row['ProductID']}"
                        onclick="return insertCart(<?php echo"{$res['ProductID']}";?>)" class="add_to_cart_button"
                        type="submit">Thêm vào giỏ hàng</button>


                    <div class="product-inner-category">
                    </div>

                    <div role="tabpanel">
                        <ul class="product-tab" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                    data-toggle="tab">Mô tả</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                    data-toggle="tab">Thông tin chi tiết</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <?php echo $res['Description'];?>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <?php echo $res['Body'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="related-products-wrapper">
            <h2 class="related-products-title">Các Sản phẩm liên quan</h2>
            <div class="related-products-carousel">

                <?php


foreach ($resOther as $row) {
    $pr = $row['Price']*1.2;

    echo    "<div class=\"single-product\">";
    echo        "<div class=\"product-f-image\">";
    echo            "<img src=\"upload/{$row['ImageUrl']}\" alt=\"\" style=\"height:300px;\">";
    echo            "<div class=\"product-hover\">";
    echo                "<a href=\"Controller/Cart/Add.php?id={$row['ProductID']}\" onclick=\"return insertCart({$row['ProductID']})\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Thêm vào giỏ hàng</a>";
    echo                "<a href=\"index.php?mod=products&act=detail&id={$row['ProductID']}\" class=\"view-details-link\"><i class=\"fa fa-link\"></i>Thông tin chi tiết</a>";
     echo           "</div></div>";

    echo        "<h2><a href=\"index.php?mod=products&act=detail&id={$row['ProductID']}\">{$row['ProductName']}</a></h2>";

    echo        "<div class=\"product-carousel-price\">";
    echo            "<ins>{$row['Price']}đ</ins> <del>{$pr}đ</del>";
    echo        "</div> </div>";
}

?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>