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
         $sql = 'SELECT * FROM sliders order by created_at DESC';
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
                <div id="servhov" class="service ft">
                    <h5 class="title_card trans_200">ABOUT BCGVL</h5>
                    <div class="container">
                        <?php
                            $sql = "select * from about_us where content_id='ABG'";
                            $exe = pg_query($db,$sql);
                            $res = pg_fetch_all($exe);
                        ?>
                        <?php 
                        // function first($response){
                        //     $pos = strpos($response, '.');
                        //     var_dump(substr($response, 0, $pos+1));die;
                        // }
                        // echo first($res[0]['content_description']);
                        
                        echo $res[0]['content_description'];
                        ?>
                    </div>
                </div>
                <div class="card-footer1">
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
                <div id="servhov" class="service text-center trans_200 ft-b">
                    <h5 class="title_card trans_200">DIRECTOR</h5>
                    <div class="">
                        <img class="svg director text-center" src="<?php echo $res[0]['director_photo'];?>" alt=""/>
                    </div>
                    <div class="service_title trans_200 direct">
                        <h3><?php echo $res[0]['director_name'];?></h3>
                        <h4><?php echo $res[0]['director_qualification'];?></h4>
                    </div>
                </div>
                <div class="card-footer1">
                    <a href="director_desk3.php" class="more_class">More<i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 service_col">
            <div class="card">
                <div id="servhov" class="service whats ft">
                    <h5 class="title_card">WHAT'S NEW</h5>
                    <div class="container">
                        <marquee class="what_new" onmouseover="this.stop()" onmouseout="this.start()" width="100%" direction="up" Scrollamount=4>
                            <ul class="cont">
                                 <?php $sql= "SELECT * FROM events WHERE date_to >= CURRENT_DATE AND event_status = 'L' LIMIT 2";
                                    $res = pg_query($db,$sql);
                                    $result = pg_fetch_all($res);
                                    // var_dump($result);die;
                                    foreach($result as $value){
                                 ?>
                                    <li>
                                        <a href="events_details.php" target="_blank">
                                            <i class="far fa-hand-point-right"></i>
                                            <?php echo $value['event_title']; ?>
                                        </a>
                                    </li>
                                <?php }?> 
                                <?php $sql= "SELECT * FROM recruitment where last_date_to_apply >= current_date and  rec_dstatus = 'L'";
                                // echo $sql;
                                    $res = pg_query($db,$sql);
                                    $result = pg_fetch_all($res);
                                    foreach($result as $value){
                                 ?>
                                    <li>
                                        <a href="uploads/recruitment/<?php echo $value['upload_advt'];?>" target="_blank">
                                            <i class="far fa-hand-point-right"></i>
                                            <?php echo $value['rect_title']; ?>
                                        </a>
                                    </li>
                                <?php }?>
                                <?php $sql= "SELECT * FROM tenders where TO_DATE(date_of_closed,'YYYY-MM-DD') >= current_date and tender_dstatus = 'L' LIMIT 2";
                                    $res = pg_query($db,$sql);
                                    $result = pg_fetch_all($res);
                                     // var_dump($result);die;
                                    foreach($result as $value){
                                 ?>
                                    <li>
                                        <a href="uploads/tenders/<?php echo $value['tenders_notice'];?>" target="_blank">
                                            <i class="far fa-hand-point-right"></i>
                                            <?php echo $value['tender_title']; ?>
                                        </a>
                                    </li>
                                <?php }?>
                            </ul>
                        </marquee>
                    </div>
                </div>
                <div class="card-footer1">
                    <!-- <a href="whats_new.php" class="more_class">More<i class="fa fa-long-arrow-alt-right"></i></a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bgone">
    <div id="cards_landscape_wrap-2">
        <h3 class="h_head">OUR PRODUCTS</h3>
        <div class="container">
            <div class="card-flyer">
                <div class="card">
                    <div class="row services_row">
                        <div class="col-lg-3 col-md-3 service_col img-grid text-center">
                            <img src="images/BCG.png" alt="">
                        </div>
                        <div class="col-lg-9 col-md-8 service_col">
                            <div class="text-box">
                                <div class="text-container">
                                    <?php $sql= "SELECT * FROM product ORDER BY product_id ASC ";
                                    $res = pg_query($db,$sql);
                                    $result = pg_fetch_all($res);
                                    foreach($result as $value){ //var_dump($value);?>
                                    <h6 class="">
                                        <?php echo $value['product_name']; ?>
                                    </h6>
                                    <p>
                                    <?php 
                                   $small = substr($value['product_desc'], 0, 450);
                                   echo $small;
                                  ?>
                                    </p>
                                    <?php } ?>
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
                <div id="servhov" class="service sertwo">
                    <h5 class="title_card trans_200">EVENTS</h5>
                    <div class="container">
                        <ul class="cont">
                            <?php $sql= "SELECT * FROM events WHERE date_to >= CURRENT_DATE AND event_status = 'L' LIMIT 5";
                            $res = pg_query($db,$sql);
                            $result = pg_fetch_all($res);
                            foreach($result as $value){
                            ?>
                            <li>
                                <a href="events_details.php" target="_blank"
                                    ><i class="far fa-hand-point-right"></i>
                                    <?php echo $value['event_title']; ?></a
                                >
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="card-footer1">
                    <a href="events_details.php" class="more_class">More<i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 service_col">
            <div class="card">
                <div id="servhov" class="service sertwo">
                    <h5 class="title_card trans_200">RECRUITMENTS</h5>
                    <div class="container">
                        <ul class="cont">
                            <?php $sql= "SELECT * FROM recruitment where last_date_to_apply >= current_date and  rec_dstatus = 'L' LIMIT 5";
                            $res = pg_query($db,$sql);
                            $result = pg_fetch_all($res);
                            foreach($result as $value){
                            ?>
                            <li>
                                <a href="uploads/recruitment/<?php echo $value['upload_advt'] ?? '';?>" target="_blank"
                                    ><i class="far fa-hand-point-right"></i>
                                    <?php echo $value['rect_title']; ?></a
                                >
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="card-footer1">
                    <a href="recruitments.php" class="more_class">More<i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 service_col">
            <a href="">
                <div class="card">
                    <div id="servhov" class="service sertwo">
                        <h5 class="title_card trans_200">TENDERS</h5>
                        <div class="container">
                            <ul class="cont">
                                <?php $sql= "SELECT * FROM tenders where TO_DATE(date_of_closed,'YYYY-MM-DD') >= current_date and tender_dstatus = 'L'";
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
                    <div class="card-footer1">
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
                <?php 
                   $sql = "SELECT * FROM photo_gallery where photo_status = 'L' ORDER BY created_at DESC";
                   $res = pg_query($db,$sql);
                   $gallery = pg_fetch_all($res);
                   foreach($gallery as $value){ ?>
                        <li class="magnific-img" data-match="panda">
                            <a class="image-popup-vertical-fit" href="uploads/gallery/photo/<?php echo $value["photo_file"];?>" style="color:none;">
                                <img src="uploads/gallery/photo/<?php echo $value["photo_file"];?>"/>
                            </a>
                        </li>
                <?php } ?>
                <?php 
                   $sql = "SELECT * FROM video_gallery ORDER BY created_at DESC";
                   $res = pg_query($db,$sql);
                   $gallery = pg_fetch_all($res);
                   foreach($gallery as $value){ ?>
                <li class="magnific-img" data-match="cat">
                    <a class="image-popup-vertical-fit" href="<?php echo $value["photo_file"];?>">
                        <iframe width="100%" height="157" src="<?php echo $value["photo_file"];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="slider-controls">
            <span class="prevSlide"><i class="fas fa-arrow-left"></i></span>
            <span class="nextSlide"><i class="fas fa-arrow-right"></i></span>
            <a href="photo_gallery.php" class="view-all float-right">View All</a>
        </div>
    </div>
</div>
<?php include('inc/footer.php'); ?>
