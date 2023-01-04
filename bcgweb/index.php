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
        <?php
         $sql = 'SELECT * FROM sliders order by slider_id';
         $exe = pg_query($db,$sql);
         $res = pg_fetch_all($exe);
         $counter = 0;?>
         <ol class="carousel-indicators">
         <?php for ($i= 0; $i < pg_num_rows($exe) ; $i++) { ?>
             <li
             data-target="#carouselExampleIndicators"
             data-slide-to="<?php echo $i; ?>"
             class="active"
             ></li>
         <?php } ?>
        </ol>
        <div class="carousel-inner">
        <?php foreach ($res as $result) { ?>
            <div class="carousel-item <?php echo ($counter == 0) ? 'active':'';?>">
            <img
                class="d-block w-100 slideimg"
                src="uploads/Sliders/<?php echo $result['slider_img'];?>"
                alt="slide"
            />
            </div>
            <?php $counter++; } ?>
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
                        <?php 
                        function first($response){
                            $pos = strpos($response, '.');
                            return substr($response, 0, $pos+1);
                        }
                        echo first($res[0]['content_description']);
                        
                        ?>
                    </div>
                </div>
                <div class="read_more">
                    <a href="about_bcg.php" class="more_class">More<i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <!-- Service -->
        <div class="col-lg-4 col-md-6 service_col dir">
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
                        <h4><?php echo $res[0]['director_qualification'];?></h4>
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
                                            >
                                            <i class="far fa-hand-point-right"></i>
                                            <?php echo $value['whats_title']; ?>
                                        </a>
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
                <div class="col-lg-3 col-md-3 service_col">
                    <div class="card-flyer">
                        <div class="card">
                            <div class="row img-grid">
                                <div class="col-lg-12">
                                    <img src="images/BCG.png" alt="">
                                </div>
                            </div>
                            <div class="row img-grid">
                                <div class="col-lg-12">
                                    <img src="images/product1.png" alt="">         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 service_col">
                    <div class="card-flyer">
                        <div class="card">
                            <div class="text-box">
                                <!-- <div class="image-box">
                                    <img src="images/BCG.png" alt=""/>
                                    <img src="images/product2.png" alt="" />
                                </div> -->
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