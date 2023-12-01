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
            <li class=""><a href="director_info.php">Director of BCG</a></li>
            <li class="text-center">Director of BCG</li>
        </ul>
    </section>
    <div class="container">
        <div class="row">
            <!-- About Content -->
            <div class="col-lg-12">
                <div class="section_title">
                </div>
                                <?php $sql = "select * from director_desk"; 
                                       $res = pg_query($db,$sql);
                                       $result = pg_fetch_all($res);
                                       foreach($result as $value){
                                        //    var_dump($value['position_held']);die;
                                ?>
                <section id="about">
                    <div class="container aos-init aos-animate" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-4" style="background: #f7f9fa;">                         
                                <div class="practice-area-wrap">
                                    <div class="outer">
                                        <img src="../bcgcms/<?php echo $value['director_photo'];?>" class="img-flu" alt="" />
                                    </div>
                                    <div style="text-align: center;">
                                        <h3 style="font-size: 30px;color: #004d73;"><?php echo $value['director_name'];?></h3>
                                    </div>
                                </div>
                                <h5 class="text-center" style="font-size: 12px; color: #299adc;"><?php echo $value['director_qualification'];?></h5>
                                <h4 style="color: red;padding-top: 48px;"> Short profile :</h4> 
                                <a href="<?php echo $value['short_profile'];?>" class="btn_theme">Download<i class="fas fa-download"></i></a>
                                &nbsp;<a href="" class="btn_theme">View<i class="fas fa-eye"></i></a>

                                <h4 style="color: red;padding-top: 48px;"> Detailed profile :</h4>
                                <a href="<?php echo $value['detail_profile'];?>" class="btn_theme">Download<i class="fas fa-download"></i></a>
                                &nbsp;<a href="" class="btn_theme">view<i class="fas fa-eye"></i></a>
                            </div>
                            <div class="col-lg-8 pt-4 pt-lg-0 content">
                                <div>
                                    <h3>Positions held :</h3>
                                </div>
                                <div class="testimonial-item">
                                    <p>
                                    <?php echo $value['position_held'];?>
                                    </p>
                                </div>
                                <h4 style="color: red;padding-top: 48px;"> Expertise :</h4>
                                <p style="color: #004d73;"><?php echo $value['director_expertise'];?></p>
                            </div>
                        </div>
                    </div>
                </section>
                <?php   }     ?>
            </div>
        </div>
    </div>
</div>
<?php include('inc/simple_footer.php'); ?>