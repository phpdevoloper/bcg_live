<?php include('inc/header.php');
 include('inc/dbconnection.php'); ?>
<!-- Home -->

<div class="home">
<div class="home_slider_container">
    <div
    id="carouselExampleIndicators"
    class="carousel slide"
    data-ride="carousel"
    >
    <ol class="carousel-indicators">
        <li
        data-target="#carouselExampleIndicators"
        data-slide-to="0"
        class="active"
        ></li>
        <li
        data-target="#carouselExampleIndicators"
        data-slide-to="1"
        ></li>
        <li
        data-target="#carouselExampleIndicators"
        data-slide-to="2"
        ></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img
            class="d-block w-100 slideimg"
            src="images/sliders/DSC05001.jpg"
            alt="First slide"
        />
        </div>
        <div class="carousel-item">
        <img
            class="d-block w-100 slideimg"
            src="images/sliders/DSC05007.jpg"
            alt="Second slide"
        />
        </div>
        <div class="carousel-item">
        <img
            class="d-block w-100 slideimg"
            src="images/sliders/Banner.png"
            alt="Second slide"
        />
        </div>
    </div>
    <a
        class="carousel-control-prev slide"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
    >
        <span
        class="carousel-control-prev-icon slide"
        aria-hidden="true"
        ></span>
        <span class="sr-only">Previous</span>
    </a>
    <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
    >
        <span
        class="carousel-control-next-icon"
        aria-hidden="true"
        ></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>
</div>

<!-- Services section one -->
<div class="services">
    <div class="container">
        <div class="row services_row">
        <!-- Service -->
        <div class="col-lg-4 col-md-6 service_col">
            <div class="card">
                <div id="servhov" class="service">
                    <h5 class="title_card trans_200">ABOUT BCGVL</h5>
                    <div class="container">
                        <?php
                            $sql = "select * from about_us where content_id='ABG'";
                            $exe = pg_query($db,$sql);
                            $res = pg_fetch_all($exe);
                        ?>
                        <?php echo $res[0]['content_description'];?>
                    </div>
                </div>
                <div class="read_more">
                    <a href="about_bcg.php" class="more_class">More<i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <!-- Service -->
        <div class="col-lg-4 col-md-6 service_col">
                <?php
                    $sql = "select * from director_desk";
                    $exe = pg_query($db,$sql);
                    $res = pg_fetch_all($exe);
                ?>
            <div class="card">
                <div id="servhov" class="service text-center trans_200">
                <h5 class="title_card trans_200">DIRECTOR</h5>
                    <div class="">
                        <img class="svg director text-center" src="<?php echo $res[0]['director_photo'];?>" alt=""/>
                    </div>
                    <div class="service_title trans_200 direct">
                        <h3><?php echo $res[0]['director_name'];?></h3>
                        <h4><?php echo $res[0]['director_qualification'];?></h3>
                    </div>
                </div>
                <div class="read_more">
                    <a href="director_desk3.php" class="more_class">More<i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 service_col">
            <div class="card">
                <div id="servhov" class="service whats">
                    <h5 class="title_card">WHAT'S NEW</h5>
                    <div class="container">
                        <marquee class="what_new" onmouseover="this.stop()" onmouseout="this.start()" width="100%" direction="up">
                        <ul class="cont">
                            <?php $sql= "SELECT * FROM what_new";
                            $res = pg_query($db,$sql);
                            $result = pg_fetch_all($res);
                            foreach($result as $value){
                            ?>
                                <li>
                                <a href="uploads/whatsNew/<?php echo $value['whats_file'];?>" target="_blank"
                                    ><i class="far fa-hand-point-right"></i>
                                    <?php echo $value['whats_title']; ?></a
                                >
                                </li>
                                <?php }?>
                            </ul>
                        </marquee>
                    </div>
                </div>
                <div class="read_more">
                    <a href="whats_new.php" class="more_class">More<i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bgone">
<div id="cards_landscape_wrap-2">
<h3 class="h_head">OUR PRODUCTS</h3>
    <div class="container">
    <div class="row services_row">
        <div class="col-lg-6 col-md-6 service_col">
        </div>
        <div class="col-lg-6 col-md-6 service_col">
            <div class="card-flyer">
                <div class="card">
                    <div class="text-box">
                        <div class="image-box">
                            <img src="images/BCG.png" alt=""/>
                            <img src="images/product2.png" alt="" />
                        </div>
                        <div class="text-container">
                            <h6 class="text-center">
                                BCG Vaccine I.P. (10 dose/vial) & Diluent (Sodium chloride I.P.)
                            </h6>
                            <p>
                                Freeze dried BCG Vaccine is a preparation of live
                                bacteria derived from the culture of attenuated strain
                                of Mycobacterium bovis BCG. It is used for the
                                prevention of childhood tuberculosis. The vaccine
                                complies with the requirements of Indian Pharmacopoeia
                                2010.
                            </p>
                        </div>
                    </div>
                    <div class="read_more">
                        <a href="product.php" class="more_class">More<i class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-6 col-md-6 service_col">
            <div class="card-flyer">
                <div class="card">
                    <div class="text-box">
                        <div class="image-box">
                            <img src="images/products/therap.png" alt="" />
                        </div>
                        <div class="text-container">
                            <h6 class="text-center">BCG THERAPEUTIC (40 MG.)</h6>
                            <p>
                                From the year 1994 BCGVL started manufacturing BCG
                                Therapeutic Vaccine (40mg). This is also a live,
                                freeze-dried preparation of Danish 1331 strain of BCG
                                Mycobacterium bovis, meant for therapeutic use in
                                Carcinoma bladder. Sodium glutamate is used as
                                stabilizer. No preservatives are added.
                            </p>
                        </div>
                    </div>
                    <div class="read_more">
                        <a href="product.php" class="more_class">More<i class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    </div>
</div>
</div>
<div class="container">
<div class="row services_row">
    <!-- Service -->
    <div class="col-lg-4 col-md-6 service_col">
        <div class="card">
            <div id="servhov" class="service">
                <h5 class="title_card trans_200">EVENTS</h5>
                <div class="container">
                    <ul class="cont">
                        <?php $sql= "SELECT * FROM events order by event_id LIMIT 5";
                        $res = pg_query($db,$sql);
                        $result = pg_fetch_all($res);
                        foreach($result as $value){
                        ?>
                        <li>
                            <a href="uploads/event/<?php echo $value['event_file'] ?? '';?>" target="_blank"
                                ><i class="far fa-hand-point-right"></i>
                                <?php echo $value['event_title']; ?></a
                            >
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <div class="read_more">
                <a href="events_details.php" class="more_class">More<i class="fa fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 service_col">
        <div class="card">
            <div id="servhov" class="service">
                <h5 class="title_card trans_200">RECRUITMENTS</h5>
                <div class="container">
                    <ul class="cont">
                        <?php $sql= "SELECT * FROM recruitment";
                        $res = pg_query($db,$sql);
                        $result = pg_fetch_all($res);
                        foreach($result as $value){
                        ?>
                        <li>
                            <a href="uploads/event/<?php echo $value['upload_advt'] ?? '';?>" target="_blank"
                                ><i class="far fa-hand-point-right"></i>
                                <?php echo $value['rect_title']; ?></a
                            >
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <div class="read_more">
                <a href="recruitments.php" class="more_class">More<i class="fa fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 service_col">
        <a href="">
            <div class="card">
                <div id="servhov" class="service">
                    <h5 class="title_card trans_200">TENDERS</h5>
                    <div class="container">
                        <ul class="cont">
                            <?php $sql= "SELECT * FROM tenders";
                            $res = pg_query($db,$sql);
                            $result = pg_fetch_all($res);
                            foreach($result as $value){
                            ?>
                            <li>
                                <a href="uploads/tenders/<?php echo $value['tenders_notice'] ?? '';?>" target="_blank"
                                    ><i class="far fa-hand-point-right"></i>
                                    <?php echo $value['tender_title']; ?></a
                                >
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="read_more">
                    <a href="tenders.php" class="more_class">More<i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </a>
    </div>
</div>
</div>
<!-- Services section two-->
<!-- <div class="bgimg">
    <div class="container">
        <div class="row services_row">
        <div class="col-lg-4 col-md-6 service_col">
            <a href="">
            <div id="servhov" class="service">
                <h5 class="title_card trans_200">EVENTS</h5>
                <ul class="text-center cont">
                <li>
                    <a href="">
                    <i class="fa fa-check-circle"></i>
                    <h4>The Sample Link of Events 1</h4></a
                    >
                </li>
                <li>
                    <a href="">
                    <i class="fa fa-check-circle"></i>

                    <h4>The Sample Link of Events 2</h4></a
                    >
                </li>
                <li>
                    <a href=""
                    ><i class="fa fa-check-circle"></i>
                    <h4>The Sample Link of Events 3</h4></a
                    >
                </li>
                <li>
                    <a href=""
                    ><i class="fa fa-check-circle"></i>
                    <h4>The Sample Link of Events 4</h4></a
                    >
                </li>
                <li>
                    <a href=""
                    ><i class="fa fa-check-circle"></i>
                    <h4>The Sample Link of Events 5</h4></a
                    >
                </li>
                <li>
                    <a href=""
                    ><i class="fa fa-check-circle"></i>
                    <h4>The Sample Link of Events 6</h4></a
                    >
                </li>
                </ul>
            </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6 service_col" style="height: 376px">
            <a href="">
            <div id="servhov" class="service trans_200">
                <div class="service_title text-center trans_200">
                RECRUITMENTS
                </div>
                <div class="service_text">
                <ul class="text-center cont">
                    <li>
                    <a href="">
                        <i class="fa fa-check-circle"></i>
                        <h4>The Sample Link of Recruitments 1</h4></a
                    >
                    </li>
                    <li>
                    <a href="">
                        <i class="fa fa-check-circle"></i>
                        <h4>The Sample Link of Recruitments 2</h4></a
                    >
                    </li>
                    <li>
                    <a href=""
                        ><i class="fa fa-check-circle"></i>
                        <h4>The Sample Link of Recruitments 3</h4></a
                    >
                    </li>
                    <li>
                    <a href=""
                        ><i class="fa fa-check-circle"></i>
                        <h4>The Sample Link of Recruitments 4</h4></a
                    >
                    </li>
                    <li>
                    <a href=""
                        ><i class="fa fa-check-circle"></i>
                        <h4>The Sample Link of Recruitments 5</h4></a
                    >
                    </li>
                    <li>
                    <a href=""
                        ><i class="fa fa-check-circle"></i>
                        <h4>The Sample Link of Recruitments 6</h4></a
                    >
                    </li>
                </ul>
                </div>
            </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6 service_col" style="height: 376px">
            <a href="">
            <div id="servhov" class="service trans_200">
                <div class="service_title text-center trans_200">TENDERS</div>
                <div class="service_text">
                <ul class="text-center cont">
                    <li>
                    <a href="">
                        <i class="fa fa-check-circle"></i>
                        <h4>The Sample Link of Tender 1</h4></a
                    >
                    </li>
                    <li>
                    <a href="">
                        <i class="fa fa-check-circle"></i>
                        <h4>The Sample Link of Tender 2</h4></a
                    >
                    </li>
                    <li>
                    <a href=""
                        ><i class="fa fa-check-circle"></i>
                        <h4>The Sample Link of Tender 3</h4></a
                    >
                    </li>
                    <li>
                    <a href=""
                        ><i class="fa fa-check-circle"></i>
                        <h4>The Sample Link of Tender 4</h4></a
                    >
                    </li>
                    <li>
                    <a href=""
                        ><i class="fa fa-check-circle"></i>
                        <h4>The Sample Link of Tender 5</h4></a
                    >
                    </li>
                    <li>
                    <a href=""
                        ><i class="fa fa-check-circle"></i>
                        <h4>The Sample Link of Tender 6</h4></a
                    >
                    </li>
                </ul>
                </div>
            </div>
            </a>
        </div>
        </div>
    </div>
</div> -->
<!-- Departments -->

<div class="photo_video_gallery">
    <div class="container">
        <ul class="filter-option">
        <li>
            <a class="active" href="javaScript:void(0)" data-category="panda"
            >PHOTO</a
            >
        </li>
        <li>
            <a href="javaScript:void(0)" data-category="cat">VIDEOS</a>
        </li>
        </ul>
        <div class="slider-wrapper">
            <ul class="item-slider">
                <li class="magnific-img" data-match="panda">
                    <a class="image-popup-vertical-fit" href="images/gallery/1DSCN0532.jpg" style="color:none;">
                    <img src="images/gallery/1DSCN0532.jpg" />
                </a>
                </li>
                <li class="magnific-img" data-match="panda">
                <a class="image-popup-vertical-fit" href="images/gallery/20210121_160050.jpg">
                    <img src="images/gallery/20210121_160050.jpg" />
                    
                </a>
                </li>
                <li class="magnific-img" data-match="panda">
                <a class="image-popup-vertical-fit" href="images/gallery/20210121_160106.jpg">
                    <img src="images/gallery/20210121_160106.jpg" />
                    
                </a>
                </li>
                <li class="magnific-img" data-match="panda">
                <a class="image-popup-vertical-fit" href="images/gallery/2DSCN0540.jpg">
                    <img src="images/gallery/2DSCN0540.jpg" />
                    
                </a>
                </li>
                <li class="magnific-img" data-match="panda">
                <a class="image-popup-vertical-fit" href="images/gallery/3DSCN0534.jpg">
                    <img src="images/gallery/3DSCN0534.jpg" />
                    
                </a>
                </li>
                <li class="magnific-img" data-match="panda">
                    <a class="image-popup-vertical-fit" href="images/gallery/3DSCN0534.jpg">
                        <img src="images/gallery/3DSCN0534.jpg" />
                        
                    </a>
                </li>
                <li class="magnific-img" data-match="cat">
                    <a class="image-popup-vertical-fit" href="https://www.youtube.com/embed/brMdT4EiBQM">
                        <iframe width="100%" height="157" src="https://www.youtube.com/embed/brMdT4EiBQM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                        
                    </a>
                </li>
            </ul>
        </div>
        <div class="slider-controls">
        <span class="prevSlide"
            ><i class="fas fa-arrow-left"></i></span
        ><span class="nextSlide"
            ><i class="fas fa-arrow-right"></i></span>
        </div>
    </div>
</div>
<?php include('inc/footer.php'); ?>
<script>
    $(document).ready(function(){
    $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
      mainClass: 'mfp-with-zoom', 
      gallery:{
                enabled:true
            },
    
      zoom: {
        enabled: true, 
    
        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function
    
        opener: function(openerElement) {
    
          return openerElement.is('img') ? openerElement : openerElement.find('img');
      }
    }
    
    });
    
    });
</script>