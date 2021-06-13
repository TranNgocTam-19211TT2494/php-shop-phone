<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">

            <div class="latest-product">
                <h2 class="section-title">Tin Tức</h2>
                <div class="col-md-12">



                    <?php
                        foreach ($resulf as $key) {
                        
                    ?>
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="Upload/<?= $key['photo'] ?>" class="card-img-top" alt="..." style="height: 108px;width: 100%;
">
                            <div class="card-body">
                                <h5 class="card-title"><?= $key['titile']?></h5>
                                <p class="card-text">...<?php echo substr($key['intro'],1000)?></p>
                                <a href="tintuc.php?id=<?php echo $key['ReviewID'];?>" name="id"
                                    class="btn btn-primary stretched-link">Go somewhere</a>
                            </div>

                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>