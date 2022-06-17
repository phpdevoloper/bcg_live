<?php include('inc/header.php'); 
include('inc/dbconnection.php');
?>
<!-- Home -->
<div class="banner">
    <img src="images/about.jpg" alt="" />
</div>
<!-- product description -->
<div class="about">
    <section>
        <ul class="breadcrumb wizard">
            <li class="completed"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li class="completed"><a href="javascript:void(0);">Who's who</a></li>
            <li class=""><a href="director_desk.php">Director Message</a></li>
            <li class="text-center">Director Desk</li>
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
                <section id="about" class="about">
                    <div class="container" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="../bcgcms/<?php echo $value['director_photo'];?>" class="img-flu" alt="" />
                            </div>
                            <div class="col-lg-8 pt-4 content">
                                <h3 class="dir_title"><?php echo $value['director_name'];?></h3>
                                <p class="fst-italic">
                                <?php echo $value['director_qualification'];?>
                                </p>
                                <div class="pos_held">
                                    <h4 style="color: #032e47;">Positions Held :</h4>
                                </div>
                                <div class="testimonial-item">
                                    <p>
                                    <?php echo $value['position_held'];?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <h3 style="color: #032e47;">Message :</h3>
                        <p><?php echo $value['director_message'];?> </p>
                        </div>
                </section>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include('inc/simple_footer.php'); ?>