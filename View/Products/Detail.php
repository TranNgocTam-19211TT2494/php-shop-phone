<style>
.animated {
    -webkit-transition: height 0.2s;
    -moz-transition: height 0.2s;
    transition: height 0.2s;
}

.stars {
    margin: 20px 0;
    font-size: 24px;
    color: #d17581;
}

.card-inner {
    margin-left: 4rem;
}

.fa-star {
    color: gold;
}

.fa-star-o {
    color: black;
}
</style>

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


                    <!-- Gía sản phẩm -->
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
<?php



include("Model/Review.php");

$reviews = new Review();


    
    if (isset($_POST['btnSave'])) {
        $rate = $_POST['rating'];
        $ProductID=$_POST['ProductID'];
        $review = addslashes($_POST['comment']);
        if($review != "") {
            $result =  $reviews->InsertReviews($ProductID, $rate, $review);
            if ($result > 0) {
                header("index.php?mod=products&act=detail");
                
            } else {
                echo "<p style='color:red;position: relative;
            left: 50%;' class=\"error\">Thêm bị lỗi</p>";
            }
            
        }
      
    }
   

?>
<div class="row" style="margin-top:40px;">
    <div class="col-md-12">
        <div class="well well-sm">
            <div class="text-right">
                <a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Leave
                    a Review</a>
            </div>
            <div class="row" id="post-review-box" style="display:none;">
                <div class="col-md-12">
                    <form accept-charset="UTF-8" action="index.php?mod=products&act=detail&id=<?= $res['ProductID'] ?>"
                        method="post" enctype="multipart/form-data">
                        <input id="ratings-hidden" name="rating" type="hidden">
                        <div class="form-group">
                            <input type="hidden" name="ProductID" class="form-control" value="<?= $res['ProductID']?>">
                        </div>
                        <textarea class="form-control animated" cols="50" id="new-review" name="comment"
                            placeholder="Enter your review here..." rows="5"></textarea>
                        <div class="text-right">
                            <div class="stars starrr" data-rating="0"></div>
                            <a class="btn btn-danger btn-sm" href="#" id="close-review-box"
                                style="display:none; margin-right: 10px;">
                                <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                            <button class="btn btn-success btn-lg" name="btnSave" value="Lưu" type="submit"
                                id="btnSave">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
include("Model/User.php");
$user = new User();

$reviews = new Review();
$rate = $reviews->getReview();




?>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-2">
                <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid" />
                <p class="text-secondary text-center">15 Minutes Ago</p>
            </div>
            <?php 
                foreach ($rate as $key => $value) {
                    if ($value['ProductID'] == $res['ProductID']) {
                        ?>
            <div class="col-md-10">
                <p>
                    <?php 
                        $check = $user->getUserManage();
                        foreach ($check as $key => $data) {
                            if ($data['UserID'] == '40') {
                                ?>
                    <a class="float-left"
                        href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong><?= $data['UserName'] ?></strong></a>
                    <?php
                            }
                        } ?>
                    <?php  if($value['rate'] <= '0') { ?>
                    <span class="float-right"> <i class="fa fa-star-o" aria-hidden="true"></i></span>
                    <span class="float-right"> <i class="fa fa-star-o" aria-hidden="true"></i></span>
                    <span class="float-right"> <i class="fa fa-star-o" aria-hidden="true"></i></span>
                    <span class="float-right"> <i class="fa fa-star-o" aria-hidden="true"></i></span>
                    <span class="float-right"> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                    <?php } ?>
                    <?php if($value['rate'] === '1') { ?>
                    <span class="float-right"> <i class="fa fa-star"></i> </span>
                    <span class="float-right"> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                    <span class="float-right"> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                    <span class="float-right"> <i class="fa fa-star-o" aria-hidden="true"></i></span>
                    <span class="float-right"> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                    <?php } ?>
                    <?php if($value['rate'] === '2') { ?>
                    <span class="float-right"> <i class="fa fa-star"></i> </span>
                    <span class="float-right"> <i class="fa fa-star"></i> </span>
                    <span class="float-right"> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                    <span class="float-right"> <i class="fa fa-star-o" aria-hidden="true"></i></span>
                    <span class="float-right"> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                    <?php } ?>
                    <?php if($value['rate'] === '3') { ?>
                    <span class="float-right"> <i class="fa fa-star"></i> </span>
                    <span class="float-right"> <i class="fa fa-star"></i> </span>
                    <span class="float-right"> <i class="fa fa-star"></i> </span>
                    <span class="float-right"> <i class="fa fa-star-o" aria-hidden="true"></i></span>
                    <span class="float-right"> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                    <?php } ?>
                    <?php if($value['rate'] === '4') { ?>
                    <span class="float-right"> <i class="fa fa-star"></i> </span>
                    <span class="float-right"> <i class="fa fa-star"></i> </span>
                    <span class="float-right"> <i class="fa fa-star"></i> </span>
                    <span class="float-right"> <i class="fa fa-star"></i> </span>
                    <span class="float-right"> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                    <?php } ?>
                    <?php if($value['rate'] === '5') { ?>
                    <span class="float-right"> <i class="fa fa-star"></i> </span>
                    <span class="float-right"> <i class="fa fa-star"></i> </span>
                    <span class="float-right"> <i class="fa fa-star"></i> </span>
                    <span class="float-right"> <i class="fa fa-star"></i> </span>
                    <span class="float-right"> <i class="fa fa-star"></i> </span>
                    <?php } ?>


                </p>
                <div class="clearfix"></div>
                <p><?= $value['review']?></p>
                <p>
                    <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                    <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                </p>
            </div>
            <?php }} ?>
        </div>
        <!-- Reply -->
        <!-- <div class="card card-inner">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid" />
                        <p class="text-secondary text-center">15 Minutes Ago</p>
                    </div>
                    <div class="col-md-10">
                        <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman
                                    Akash</strong></a></p>
                        <p>Lorem Ipsum is simply dummy text of the pr make but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                            release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>
                            <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                        </p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
</div>
</div>
<script>
(function(e) {
    var t, o = {
            className: "autosizejs",
            append: "",
            callback: !1,
            resizeDelay: 10
        },
        i =
        '<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',
        n = ["fontFamily", "fontSize", "fontWeight", "fontStyle", "letterSpacing", "textTransform", "wordSpacing",
            "textIndent"
        ],
        s = e(i).data("autosize", !0)[0];
    s.style.lineHeight = "99px", "99px" === e(s).css("lineHeight") && n.push("lineHeight"), s.style.lineHeight = "",
        e.fn.autosize = function(i) {
            return this.length ? (i = e.extend({}, o, i || {}), s.parentNode !== document.body && e(document.body)
                .append(s), this.each(function() {
                    function o() {
                        var t, o;
                        "getComputedStyle" in window ? (t = window.getComputedStyle(u, null), o = u
                                .getBoundingClientRect().width, e.each(["paddingLeft", "paddingRight",
                                    "borderLeftWidth", "borderRightWidth"
                                ], function(e, i) {
                                    o -= parseInt(t[i], 10)
                                }), s.style.width = o + "px") : s.style.width = Math.max(p.width(), 0) +
                            "px"
                    }

                    function a() {
                        var a = {};
                        if (t = u, s.className = i.className, d = parseInt(p.css("maxHeight"), 10), e.each(
                                n,
                                function(e, t) {
                                    a[t] = p.css(t)
                                }), e(s).css(a), o(), window.chrome) {
                            var r = u.style.width;
                            u.style.width = "0px", u.offsetWidth, u.style.width = r
                        }
                    }

                    function r() {
                        var e, n;
                        t !== u ? a() : o(), s.value = u.value + i.append, s.style.overflowY = u.style
                            .overflowY, n = parseInt(u.style.height, 10), s.scrollTop = 0, s.scrollTop =
                            9e4, e = s.scrollTop, d && e > d ? (u.style.overflowY = "scroll", e = d) : (u
                                .style.overflowY = "hidden", c > e && (e = c)), e += w, n !== e && (u.style
                                .height = e + "px", f && i.callback.call(u, u))
                    }

                    function l() {
                        clearTimeout(h), h = setTimeout(function() {
                            var e = p.width();
                            e !== g && (g = e, r())
                        }, parseInt(i.resizeDelay, 10))
                    }
                    var d, c, h, u = this,
                        p = e(u),
                        w = 0,
                        f = e.isFunction(i.callback),
                        z = {
                            height: u.style.height,
                            overflow: u.style.overflow,
                            overflowY: u.style.overflowY,
                            wordWrap: u.style.wordWrap,
                            resize: u.style.resize
                        },
                        g = p.width();
                    p.data("autosize") || (p.data("autosize", !0), ("border-box" === p.css("box-sizing") ||
                            "border-box" === p.css("-moz-box-sizing") || "border-box" === p.css(
                                "-webkit-box-sizing")) && (w = p.outerHeight() - p.height()), c = Math
                        .max(parseInt(p.css("minHeight"), 10) - w || 0, p.height()), p.css({
                            overflow: "hidden",
                            overflowY: "hidden",
                            wordWrap: "break-word",
                            resize: "none" === p.css("resize") || "vertical" === p.css("resize") ?
                                "none" : "horizontal"
                        }), "onpropertychange" in u ? "oninput" in u ? p.on(
                            "input.autosize keyup.autosize", r) : p.on("propertychange.autosize",
                            function() {
                                "value" === event.propertyName && r()
                            }) : p.on("input.autosize", r), i.resizeDelay !== !1 && e(window).on(
                            "resize.autosize", l), p.on("autosize.resize", r), p.on(
                            "autosize.resizeIncludeStyle",
                            function() {
                                t = null, r()
                            }), p.on("autosize.destroy", function() {
                            t = null, clearTimeout(h), e(window).off("resize", l), p.off("autosize")
                                .off(".autosize").css(z).removeData("autosize")
                        }), r())
                })) : this
        }
})(window.jQuery || window.$);

var __slice = [].slice;
(function(e, t) {
    var n;
    n = function() {
        function t(t, n) {
            var r, i, s, o = this;
            this.options = e.extend({}, this.defaults, n);
            this.$el = t;
            s = this.defaults;
            for (r in s) {
                i = s[r];
                if (this.$el.data(r) != null) {
                    this.options[r] = this.$el.data(r)
                }
            }
            this.createStars();
            this.syncRating();
            this.$el.on("mouseover.starrr", "span", function(e) {
                return o.syncRating(o.$el.find("span").index(e.currentTarget) + 1)
            });
            this.$el.on("mouseout.starrr", function() {
                return o.syncRating()
            });
            this.$el.on("click.starrr", "span", function(e) {
                return o.setRating(o.$el.find("span").index(e.currentTarget) + 1)
            });
            this.$el.on("starrr:change", this.options.change)
        }
        t.prototype.defaults = {
            rating: void 0,
            numStars: 5,
            change: function(e, t) {}
        };
        t.prototype.createStars = function() {
            var e, t, n;
            n = [];
            for (e = 1, t = this.options.numStars; 1 <= t ? e <= t : e >= t; 1 <= t ? e++ : e--) {
                n.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"))
            }
            return n
        };
        t.prototype.setRating = function(e) {
            if (this.options.rating === e) {
                e = void 0
            }
            this.options.rating = e;
            this.syncRating();
            return this.$el.trigger("starrr:change", e)
        };
        t.prototype.syncRating = function(e) {
            var t, n, r, i;
            e || (e = this.options.rating);
            if (e) {
                for (t = n = 0, i = e - 1; 0 <= i ? n <= i : n >= i; t = 0 <= i ? ++n : --n) {
                    this.$el.find("span").eq(t).removeClass("glyphicon-star-empty").addClass(
                        "glyphicon-star")
                }
            }
            if (e && e < 5) {
                for (t = r = e; e <= 4 ? r <= 4 : r >= 4; t = e <= 4 ? ++r : --r) {
                    this.$el.find("span").eq(t).removeClass("glyphicon-star").addClass(
                        "glyphicon-star-empty")
                }
            }
            if (!e) {
                return this.$el.find("span").removeClass("glyphicon-star").addClass("glyphicon-star-empty")
            }
        };
        return t
    }();
    return e.fn.extend({
        starrr: function() {
            var t, r;
            r = arguments[0], t = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
            return this.each(function() {
                var i;
                i = e(this).data("star-rating");
                if (!i) {
                    e(this).data("star-rating", i = new n(e(this), r))
                }
                if (typeof r === "string") {
                    return i[r].apply(i, t)
                }
            })
        }
    })
})(window.jQuery, window);
$(function() {
    return $(".starrr").starrr()
})

$(function() {

    $('#new-review').autosize({
        append: "\n"
    });

    var reviewBox = $('#post-review-box');
    var newReview = $('#new-review');
    var openReviewBtn = $('#open-review-box');
    var closeReviewBtn = $('#close-review-box');
    var ratingsField = $('#ratings-hidden');

    openReviewBtn.click(function(e) {
        reviewBox.slideDown(400, function() {
            $('#new-review').trigger('autosize.resize');
            newReview.focus();
        });
        openReviewBtn.fadeOut(100);
        closeReviewBtn.show();
    });

    closeReviewBtn.click(function(e) {
        e.preventDefault();
        reviewBox.slideUp(300, function() {
            newReview.focus();
            openReviewBtn.fadeIn(200);
        });
        closeReviewBtn.hide();

    });

    $('.starrr').on('starrr:change', function(e, value) {
        ratingsField.val(value);
    });
});
</script>