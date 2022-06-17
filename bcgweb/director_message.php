<?php include('inc/header.php'); 
include('inc/dbconnection.php');
?>
<!-- Home -->
<div class="banner">
    <img src="images/about.jpg" alt="" />
</div>
<!-- product description -->
<div>
    <ul class="breadcrumb wizard">
        <li class="completed"><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li class="completed"><a href="javascript:void(0);">Who's who</a></li>
        <li class=""><a href="director_message.php">Director Message</a></li>
    </ul>
</div>
<div class="about">
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
                <section id="about" class="about">
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
<?php include('inc/simple_footer.php'); ?>