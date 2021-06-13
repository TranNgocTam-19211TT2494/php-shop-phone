<?php
    include_once("View/Header.php");
    
    include("Model/User.php");
    include("Model/News.php");
    
   
            ?>
<br>
<center>
    <h2 style="color: #5a88ca;">Tin Tức</h2>
</center>
<div class="container">
    <div class="row">

        <div class="col-sm-12">
            <div class="blog-post-area">
                <div class="single-blog-post">
                    <?php
                         $news = new News;
                         if (isset($_GET['id'])) {
                             $id = $_GET['id'];
                            
                             $ress = $news->getNewsByID($id);
                             $resulf = $news->getNewsByItems();
                         }    ?>
                    <?php
                        foreach ($resulf as $key => $value) {
                           if($value['ReviewID'] == $id) {
                                ?>
                    <h3><?php echo $value['titile']; ?></h3>
                    <?php echo($value["content"])?>

                    <?php
                            }
                        }
                     ?>

                    <div class="pager-area">

                        <div class="addthis_inline_share_toolbox"></div>
                        <ul class="pager pull-right">
                            <li><a href="#">Pre</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<?php
    include_once("View/Footer.php");
    
?>