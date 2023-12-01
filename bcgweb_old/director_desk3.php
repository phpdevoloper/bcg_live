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
            <li class=""><a href="director_desk3.php">Director of BCG</a></li>
        </ul>
    </section>
    <div class="container">
        <div class="row">
            <!-- About Content -->
            <div class="col-lg-12">
                    <?php $sql = "select * from director_desk"; 
                            $res = pg_query($db,$sql);
                            $result = pg_fetch_all($res);
                            foreach($result as $value){
                            //    var_dump($value['position_held']);die;
                    ?>
                    <div class="section">
                        <h3 class="text-center txt" style="color: #299adc;">DIRECTOR OF BCG</h3>
                    </div>
                <section id="about">
                    <div class="container aos-init aos-animate" data-aos="fade-up" style="padding-top: 38px;">
                        <div class="row">
                            <div class="col-lg-4" style="background: #f7f9fa;">                     
                                <div class="practice-area-wrap">
                                    <div class="outer">
                                        <img src="<?php echo $value['director_photo'];?>" class="img-flu" alt="" />
                                    </div>
                                    <div class="text-center" style="padding-bottom: 13px;">
                                        <h3 style="color: #012970;"><?php echo $value['director_name'];?></h3>
                                        <h5 style="color: #012970;font-size: 11px;"><?php echo $value['director_qualification'];?></h5>
                                    </div> 
                                    <div class="row text-center mt-4">
                                        <a href="<?php echo $value['short_profile'];?>"  target="_blank" class="btn_theme ml-2"><i class="fas fa-file-pdf"></i>Short profile</a>
                                        <a href="<?php echo $value['detail_profile'];?>" target="_blank" class="btn_theme ml-2"><i class="fas fa-file-pdf"></i>Detailed profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 pt-4 pt-lg-0 content">
                                <div class="info">
                                    <div class="header_text">
                                        <h4 style="color: #3CC053;"> Expertise </h4>
                                        <?php echo $value['director_expertise'];?>
                                    </div>
                                </div>
                                <div style="padding-top: 32px;color: #3bc053;">
                                    <h4>Positions held</h4>
                                </div>
                                <div class="testimonial-item">
                                    <p>
                                    <?php echo html_entity_decode($value['position_held']);?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    
                </section>
                <?php   }     ?>
            </div>
        </div>
    </div>
</div>
<?php include('inc/simple_footer.php'); ?>