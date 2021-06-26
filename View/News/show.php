<style>
.nav-arrow-a {
    text-decoration: none;
}

.section-t8 {
    padding-top: 8rem;
}

.title-wrap {
    padding-bottom: 4rem;
}

.title-a {
    text-decoration: none;
    font-size: 2.6rem;
    font-weight: 600;
}

.img-fluid {
    width: 350px;
    height: 185px;
    border-radius: 70px;
}

.testimonials-box {
    padding: 1rem 0;
}

.testimonial-ico {
    text-align: center;
}

.testimonial-text {
    font-style: italic;
    margin-top: 25px;

    background-color: #f3f3f3;
    position: relative;
}

/* .testimonial-text:after {
    content: "";
    position: absolute;
    top: 100%;
    left: 25px;
    width: 0px;
    height: 0px;
    border-top: 15px solid #f3f3f3;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
} */
.testimonial-author-box {
    margin-top: 2rem;
}

.testimonials-box .testimonial-avatar {
    width: 80px !important;
    display: inline-flex !important;
    border-radius: 50%;
}

.testimonial-author {
    margin-left: 1rem;
    display: inline-flex;
    font-size: 1.2rem;
    color: #000000;
    padding: 20px 40px;
    margin: 12px;
    display: inline-block;
    transform: translate(0%, 0%);
    overflow: hidden;
    font-size: 20px;
    letter-spacing: 2.5px;
    text-align: center;
    text-transform: uppercase;
    text-decoration: none;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
}

.testimonial-author::before {
    content: '';
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    background-color: #8592ad;
    opacity: 0;
    -webkit-transition: .2s opacity ease-in-out;
    transition: .2s opacity ease-in-out;
}

.testimonial-author:hover::before {
    opacity: 0.2;
}

.testimonial-author span {
    position: absolute;
}

.testimonial-author span:nth-child(1) {
    top: 0px;
    left: 0px;
    width: 100%;
    height: 2px;

    background: linear-gradient(to left, rgba(8, 20, 43, 0), #2662d9);

    animation: 2s animateTop linear infinite;
}

@keyframes animateTop {
    0% {

        transform: translateX(100%);
    }

    100% {

        transform: translateX(-100%);
    }
}

.testimonial-author span:nth-child(2) {
    top: 0px;
    right: 0px;
    height: 100%;
    width: 2px;

    background: linear-gradient(to top, rgba(8, 20, 43, 0), #2662d9);

    animation: 2s animateRight linear -1s infinite;
}

@keyframes animateRight {
    0% {
        -webkit-transform: translateY(100%);
        transform: translateY(100%);
    }

    100% {
        -webkit-transform: translateY(-100%);
        transform: translateY(-100%);
    }
}

.testimonial-author span:nth-child(3) {
    bottom: 0px;
    left: 0px;
    width: 100%;
    height: 2px;

    background: linear-gradient(to right, rgba(8, 20, 43, 0), #2662d9);

    animation: 2s animateBottom linear infinite;
}

@keyframes animateBottom {
    0% {
        transform: translateX(-100%);
    }

    100% {
        transform: translateX(100%);
    }
}

.testimonial-author span:nth-child(4) {
    top: 0px;
    left: 0px;
    height: 100%;
    width: 2px;
    background: linear-gradient(to bottom, rgba(8, 20, 43, 0), #2662d9);
    animation: 2s animateLeft linear -1s infinite;
}

@keyframes animateLeft {
    0% {
        transform: translateY(-100%);
    }

    100% {
        transform: translateY(100%);
    }
}

.swiper-slide {
    flex-shrink: 0;
    width: 100%;
    height: 100%;
    position: relative;
    transition-property: transform;
}

.testimonials-box {
    box-shadow: 0px 0px 10px 5px grey;
    border-radius: 25px;
    margin: 28px;
}

.testimonial-img {
    margin: 5px;
}
</style>

<section class="section-testimonials section-t8 nav-arrow-a">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Tin Tức</h2>
                    </div>
                </div>
            </div>
        </div>

        <div id="testimonial-carousel" class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                        foreach ($resulf as $key) {
                        
                    ?>
                <div class="carousel-item-a swiper-slide">
                    <div class="testimonials-box">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="testimonial-img">
                                    <img src="Upload/<?= $key['photo'] ?>" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <div class="testimonial-ico">
                                    <i class="bi bi-chat-quote-fill"></i>
                                </div>
                                <div class="testimonials-content">
                                    <p class="testimonial-text">
                                        <?php echo $key['intro']?>
                                    </p>
                                </div>
                                <div class="testimonial-author-box">

                                    <a href="tintuc.php?id=<?php echo $key['ReviewID'];?>"
                                        class="testimonial-author"><span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <?= $key['titile']?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- End carousel item -->
                <?php } ?>


            </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>

    </div>
</section><!-- End Testimonials Section -->