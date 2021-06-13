 <div class="product-widget-area">
     <div class="zigzag-bottom"></div>
     <div class="container">
         <div class="row">

             <?php

    //$result
 
    foreach ($result as $row) {
        $cateID = $row['CategoryID'];
        $res = $pro->getProductsByCateID($cateID);
    
        echo "<div class=\"col-md-4\">";
        echo            "<div class=\"single-product-widget\">";
        echo                "<h2 class=\"product-wid-title\">{$row['CategoryName']}</h2>";
        echo                "<a href=\"index.php?mod=products&act=viewallcategory&cateid=$cateID\" class=\"wid-view-more\">Xem tất cả</a>";
        $dem =1;

        foreach ($res as $r) {
            if ($dem==2) {
                break;
            }
            $pr = (int)($r['Price']*1.2);
            $chuoi=<<<EOD

                   <div class="single-wid-product">
                        <a href="index.php?mod=products&act=detail&id={$r['ProductID']}"><img src="Upload/{$r['ImageUrl']}" alt="" class="product-thumb"></a>
                        <h2><a href="index.php?mod=products&act=detail&id={$r['ProductID']}">{$r['ProductName']}</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>{$r['Price']}$</ins> <del>{$pr}$</del>
                        </div>                            
                    </div>
EOD;
            echo $chuoi;
            $dem++;
        }

        echo" </div>";
        echo "</div>";
    }
                
?>

         </div>
     </div>
 </div>
 <!-- <div class="container">
     <div class="card">
         <div class="row">
             <div class="col-3"> <img src="https://i.imgur.com/xELPaag.jpg" width="70" class="rounded-circle mt-2">
             </div>
             <div class="col-9">
                 <div class="comment-box ml-2">
                     <h4>Add a comment</h4>
                     <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                         <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio"
                             name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating"
                             value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1"
                             id="1"><label for="1">☆</label>
                     </div>
                     <div class="comment-area"> <textarea class="form-control" placeholder="what is your view?"
                             rows="4"></textarea> </div>
                     <div class="comment-btns mt-2">
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="pull-left" style="padding-top: 10px;"> <button
                                         class="btn btn-success btn-sm">Cancel</button>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="pull-right" style="padding-top: 10px;"> <button
                                         class="btn btn-success send btn-sm">Send <i
                                             class="fa fa-long-arrow-right ml-1"></i></button> </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="container">
     <div class="row">
         <div class="col-md-8">
             <div class="media g-mb-30 media-comment">
                 <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15"
                     src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Image Description">
                 <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                     <div class="g-mb-15">
                         <h5 class="h5 g-color-gray-dark-v1 mb-0">John Doe</h5>
                         <span class="g-color-gray-dark-v4 g-font-size-12">5 days ago</span>
                     </div>

                     <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                         purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                         vulputate fringilla. Donec lacinia congue
                         felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>

                     <ul class="list-inline d-sm-flex my-0">
                         <li class="list-inline-item g-mr-20">
                             <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                 <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3"></i>
                                 178
                             </a>
                         </li>
                         <li class="list-inline-item g-mr-20">
                             <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                 <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3"></i>
                                 34
                             </a>
                         </li>
                         <li class="list-inline-item ml-auto">
                             <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                 <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i>
                                 Reply
                             </a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>

         <div class="col-md-8">
             <div class="media g-mb-30 media-comment">
                 <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15"
                     src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Image Description">
                 <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                     <div class="g-mb-15">
                         <h5 class="h5 g-color-gray-dark-v1 mb-0">John Doe</h5>
                         <span class="g-color-gray-dark-v4 g-font-size-12">5 days ago</span>
                     </div>

                     <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                         purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                         vulputate fringilla. Donec lacinia congue
                         felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>

                     <ul class="list-inline d-sm-flex my-0">
                         <li class="list-inline-item g-mr-20">
                             <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                 <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3"></i>
                                 178
                             </a>
                         </li>
                         <li class="list-inline-item g-mr-20">
                             <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                 <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3"></i>
                                 34
                             </a>
                         </li>
                         <li class="list-inline-item ml-auto">
                             <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                 <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i>
                                 Reply
                             </a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div> -->
 <!-- <style>
@media (min-width: 0) {
    .g-mr-15 {
        margin-right: 1.07143rem !important;
    }
}

@media (min-width: 0) {
    .g-mt-3 {
        margin-top: 0.21429rem !important;
    }
}

.g-height-50 {
    height: 50px;
}

.g-width-50 {
    width: 50px !important;
}

@media (min-width: 0) {
    .g-pa-30 {
        padding: 2.14286rem !important;
    }
}

.g-bg-secondary {
    background-color: #fafafa !important;
}

.u-shadow-v18 {
    box-shadow: 0 5px 10px -6px rgba(0, 0, 0, 0.15);
}

.g-color-gray-dark-v4 {
    color: #777 !important;
}

.g-font-size-12 {
    font-size: 0.85714rem !important;
}

.media-comment {
    margin-top: 20px
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    padding: 20px;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border-radius: 6px;
    -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1)
}

.comment-box {
    padding: 5px
}

.comment-area textarea {
    resize: none;
    border: 1px solid #ad9f9f
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ffffff;
    outline: 0;
    box-shadow: 0 0 0 1px rgb(255, 0, 0) !important
}

.send {
    color: #fff;
    background-color: #ff0000;
    border-color: #ff0000
}

.send:hover {
    color: #fff;
    background-color: #f50202;
    border-color: #f50202
}

.rating {
    display: flex;
    margin-top: -10px;
    flex-direction: row-reverse;
    margin-left: -4px;
    float: left
}

.rating>input {
    display: none
}

.rating>label {
    position: relative;
    width: 19px;
    font-size: 25px;
    color: #ff0000;
    cursor: pointer
}

.rating>label::before {
    content: "\2605";
    position: absolute;
    opacity: 0
}

.rating>label:hover:before,
.rating>label:hover~label:before {
    opacity: 1 !important
}

.rating>input:checked~label:before {
    opacity: 1
}

.rating:hover>input:checked~label:before {
    opacity: 0.4
}
 </style> -->