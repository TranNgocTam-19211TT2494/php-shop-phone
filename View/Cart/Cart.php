<div class="shopping-item mx-4" style="margin-bottom: 10px;box-shadow: 0px 0px 10px 5px grey;">
	<a href="index.php?mod=cart&act=detail" id="btnGioHang">Giỏ hàng<span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i>

	<?php
        if (isset($_SESSION['mycart'])) {
            $sum=0;
            foreach ($_SESSION["mycart"] as $item) {
                $sum+=$item;
            }
            echo "<span class=\"product-count\" id=\"sl\">".count($_SESSION["mycart"])."</span></a>";
        } else {
            echo "<span class=\"product-count\" id=\"sl\">"."0"."</span></a>";
        }
    ?>
</div>