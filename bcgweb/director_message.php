<?php include('inc/header.php'); 
include('inc/dbconnection.php');
?>
<!-- Home -->
<!-- <div class="banner">
    <img src="images/about.jpg" alt="" />
</div> -->
<!-- product description -->
<div class="about">
    <section>
        <ul class="breadcrumb wizard">
            <li class="completed"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li class="completed"><a href="javascript:void(0);">Who's who</a></li>
            <li class=""><a href="director_desk.php">Director Message</a></li>
        </ul>
    </section>
    <div class="section">
        <h3 class="text-center txt" style="color: #299adc;">DIRECTOR MESSAGE</h3>
    </div>
    <div class="container aos-init aos-animate" data-aos="fade-up" style="padding-top: 38px;">
        <div class="container">
            <div class="row">
            <?php $sql = "select * from director_desk"; 
                                $res = pg_query($db,$sql);
                                $result = pg_fetch_all($res);
   var_dump($result);die;
                                foreach($result as $value){
                                
                        ?>
                <div class="col-lg-4 mb-3" style="background: #f7f9fa;">                     
                    <div class="practice-area-wrap">
                        <div class="outer">
                            <img src="<?php echo $value['director_photo'];?>" class="img-flu" alt="" />
                        </div>
                        <div class="text-center" style="padding-bottom: 13px;">
                            <h3 style="color: #012970;"><?php echo $value['director_name'];?></h3>
                            <h5 style="color: #012970;font-size: 11px;"><?php echo $value['director_qualification'];?></h5>
                        </div> 
                    </div>
                </div>
                <?php } ?>
                <!-- About Content -->
                <div class="col-lg-8">
                    <?php $sql = "select * from director_desk"; 
                            $res = pg_query($db,$sql);
                            $result = pg_fetch_all($res);
                            foreach($result as $value){
                            //    var_dump($value['position_held']);die;
                    ?>
                    <section id="about">
                        <div class="container aos-init aos-animate" data-aos="fade-up">
                            <div class="testimonial-item">
                                <p><?php echo $value['director_message'];?></p>
                            </div>
                        </div>
                    </section>
                    <?php   }     ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('inc/simple_footer.php'); ?>